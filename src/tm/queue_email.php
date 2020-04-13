<?php
include 'cache.php';
include 'phpmailer/mailconfig.php';

class QueueMail {
    private $_emails = array();
    private $_cacheName = "";
    private $_rootPath = "";
    private $_url = "";

    public function __construct($config = null) {
        $this->_rootPath = $_SERVER['DOCUMENT_ROOT'] . '/tm/cache/';

        if (is_array($config)) {
            if (isset($config['emails'])) {
                $this->setQueueEmails($config['emails']);
            }
            if (isset($config['cache_name']))
            {
                $this->setCacheName($config['cache_name']);
            }
            if (isset($config['url']))
            {
                $this->setURL($config['url']);
            }
        }
    }

    public function queue_email() {
        if ($this->getCacheName() == "" || count($this->getQueueEmails()) == 0) return;

        $cache_name = $this->getCacheName();
        $emails = $this->getQueueEmails();

        $c = new Cache(array(
            'name' => $cache_name,
            'path' => $this->_rootPath,
            'extension' => '.cache'
        ));
        $c->eraseExpired();

        $data = "";
        if ($c->isCached($cache_name)) {
            $data = $c->retrieve($cache_name);
        }

        $data .= ($data != '' ? '==' : '' ) . implode("==", $emails);

        $c->store($cache_name, $data, 60*5); //cache in 5 minute

        //$this -> curl_process_email_queue();
        $this->send_emails($cache_name);
    }

    private function curl_process_email_queue() {
        $qry_str = "cache=". $this->getCacheName();
        $url = $this->getURL();

        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $url . "/tm/send_queued_emails.php?" . $qry_str);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);  // Follow the redirects (needed for mod_rewrite)
        curl_setopt($c, CURLOPT_HEADER, false);         // Don't retrieve headers
        curl_setopt($c, CURLOPT_NOBODY, true);          // Don't retrieve the body
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);  // Return from curl_exec rather than echoing
        curl_setopt($c, CURLOPT_FRESH_CONNECT, true);   // Always ensure the connection is fresh

        // Timeout super fast once connected, so it goes into async.
        curl_setopt( $c, CURLOPT_TIMEOUT, 1 );

        return curl_exec( $c );
    }

    function send_emails($cache_name) {
        $c = new Cache(array(
            'name' => $cache_name,
            'path' => $_SERVER['DOCUMENT_ROOT'] . '/tm/cache/',
            'extension' => '.cache'
        ));
        $c->eraseExpired();
    
        $result = "";
        if ($c->isCached($cache_name)) {
            $result = $c->retrieve($cache_name);
            $c->erase($cache_name);
        }
    
        if (!isset($result) || empty($result)) {
            return;
        }
    
        $result = explode("==", $result);
        $from = 'relayAA@aprotrain.com';
    
        foreach ($result as $value) {
            $data = explode("||", $value);
            if (!isset($data[0]) || !isset($data[1]) || !isset($data[2]) || !isset($data[3])) {
                return;
            }
            smtpmailer($data[0], $from, $data[1], html_entity_decode($data[2], ENT_QUOTES, "UTF-8"), html_entity_decode($data[3], ENT_QUOTES, "UTF-8"));
        }
    }


    private function setCacheName($name) {
        $this->_cacheName = $name;
        return $this;
    }

    private function getCacheName() {
        return $this->_cacheName;
    }

    private function setQueueEmails($emails) {
        $this->_emails = $emails;
        return $this;
    }

    private function getQueueEmails() {
        return $this->_emails;
    }

    private function setURL($url) {
        $this->_url = $url;
        return $this;
    }

    private function getURL() {
        return $this->_url;
    }
}