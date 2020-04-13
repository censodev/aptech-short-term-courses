<?php
include 'queue_email.php';

class AptechGame {
    private $_cacheName = "aptech_game_mx2019";
    private $_giftCacheName = "aptech_game_gift";
    private $_rootPath = '';
    private $_giftCache;

    public function __construct() {
        $this->_rootPath = $_SERVER['DOCUMENT_ROOT'] . '/tm/game_cache/mx2019/';

        $this->_giftCache = new Cache(array(
            'name' => $this->_giftCacheName,
            'path' => $this->_rootPath,
            'extension' => '.cache'
        ));

        if (!$this->_giftCache->isCached($this->_giftCacheName)) {
            $gift = array(
                '1' => 1, '2' => 1, '3' => 1, '4' => 20, '5' => 100000
            );
            $this->_giftCache->store($this->_giftCacheName, json_encode($gift), 9999999);
        }

        if( ! ini_get('date.timezone') )
        {
            date_default_timezone_set('GMT');
        }
    }

    public function registry_game($user_data) {
        $cache_name = $this->getCacheName();

        $c = new Cache(array(
            'name' => $cache_name,
            'path' => $this->_rootPath,
            'extension' => '.cache'
        ));

        $data = array();
        $gift_cache = $this->_giftCache->retrieve($this->_giftCacheName);
        $gift = json_decode($gift_cache, true);

        $gift_code = explode('_', $user_data['giftCode']);
        $area = strtolower($user_data['area']);
        if (count($gift_code) < 2 && count($gift_code) > 3) {
            return '';
        } else {
            $user_data['giftCode'] = '';
            foreach($gift_code as $value) {
                $code = explode('-', $value);
                if ($gift[$code[1]] > 0) {
                    if ($user_data['giftCode'] == '')
                        $user_data['giftCode'] = $value;
                    else
                        $user_data['giftCode'] .= '_' . $value;
                }
            }
        }

        if ($c->isCached($cache_name)) {
            //user has registry with phone number;
            $data = $c->retrieve($cache_name);
            $data = json_decode($data, true);

            if (isset($data[$user_data['phone']])) {
                if ($data[$user_data['phone']]['result_game'] == '0') {
                    $data[$user_data['phone']]['giftCode'] = $user_data['giftCode'];
                    $c->store($cache_name, json_encode($data), 9999999);

                    return $user_data['giftCode'];
                } else {
                    return '';
                }
            } else {
                $user_data['time'] = date("d-m-Y h:i:s", time());
                $data[$user_data['phone']] = $user_data;
                $c->store($cache_name, json_encode($data), 9999999);
                return $user_data['giftCode'];
            }
        } else {
            $data[$user_data['phone']] = $user_data;
            $c->store($cache_name, json_encode($data), 9999999);
            return $user_data['giftCode'];
        }
    }

    public function finish_game($phone, $result) {
        $cache_name = $this->getCacheName();

        $c = new Cache(array(
            'name' => $cache_name,
            'path' => $this->_rootPath,
            'extension' => '.cache'
        ));

        $gift_cache = $this->_giftCache->retrieve($this->_giftCacheName);
        $gift = json_decode($gift_cache, true);

        if ($c->isCached($cache_name)) {
            $user_data = $c->retrieve($cache_name);
            $user_data = json_decode($user_data, true);

            if (isset($user_data[$phone])) {
                if ($user_data[$phone]['result_game'] == "0") {
                    $arr_gift = explode("-", $result);
                    $valid_gift = explode("_", $user_data[$phone]['giftCode']);

                    if (!isset($user_data[$phone]['giftCode']) || !in_array($result, $valid_gift)) {
                        return "gift_not_valid";
                    }

                    if (!isset($arr_gift[1]) || !isset($gift[$arr_gift[1]]) || $gift[$arr_gift[1]] == 0) {
                        return "gift_not_found";
                    }

                    $user_data[$phone]['result_game'] = $arr_gift[1];
                    $user_data[$phone]['time'] = date("d-m-Y h:i:s", time());

                    //send email
                    $this->send_mail($user_data[$phone]);

                    //store result in cache
                    $c->store($cache_name, json_encode($user_data), 9999999);

                    $gift[$arr_gift[1]] = $gift[$arr_gift[1]] - 1;
                    $this->_giftCache->store($this->_giftCacheName, json_encode($gift), 9999999);

                    return "success";
                } else {
                    return "user_has_played";
                }
            }
        }
        return "user_not_found";
    }

	public function get_result() {
        $cache_name = $this->getCacheName();

        $c = new Cache(array(
            'name' => $cache_name,
            'path' => $this->_rootPath,
            'extension' => '.cache'
        ));

		$data = array();

        if ($c->isCached($cache_name)) {
            $user_data = $c->retrieve($cache_name);
            $data = json_decode($user_data, true);
        }
        return $data;
    }

	public function reset_gift()
    {
        $this->_giftCache = new Cache(array(
            'name' => $this->_giftCacheName,
            'path' => $this->_rootPath,
            'extension' => '.cache'
        ));

        $gift = array(
            '1' => 1, '2' => 1, '3' => 1, '4' => 20, '5' => 10000
        );

        $this->_giftCache->store($this->_giftCacheName, json_encode($gift), 9999999);
    }

    private function send_mail($data)
    {
        $origin = "";
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            $origin = $_SERVER['HTTP_ORIGIN'];
        }

        $giftName = array(
            '1' => 'Dong ho bao thuc mini',
            '2' => 'Loa Bluetooth',
            '3' => 'Thiet bi phat Wifi',
            '4' => 'Tien 2 dollar',
            '5' => 'Den leb USB');

        $center_name = array(
            'aptech1@aprotrain.com' => '285 Doi Can, Ba Dinh, HN',
            'aptech2@aprotrain.com' => '212-214 Nguyen Dinh Chieu, HCM',
            'aptech3@aprotrain.com' => '54 Le Thanh Nghi, Hai Ba Trung, HN'
            );

        $subject = "Result game play on Dap Heo Dat 2019";
        $content = '<ul>'
            . '<li>Player: ' . $data['name'] . '</li>'
            . '<li>Phone number: ' . $data['phone'] . '</li>'
            . '<li>Email: ' . $data['email'] . '</li>'
            . '<li>CMND: ' . $data['cmnd'] . '</li>'
            . '<li>Address Registry: ' . $center_name[$data['area']] . '</li>'
            . '<li>Job: ' . $data['job'] . '</li>'
            . '<li>Result game: ' . $giftName[$data['result_game']] . '</li>'
            . '<li>Play time: ' . date("d-m-Y h:i:s", time()) . '</li>'
            . '<li>From domain: ' . $origin . '</li>'
            .'</ul>';

        $emails = array(
            //'vanhiep.ap@gmail.com||Aptech||'.htmlentities($subject, ENT_QUOTES, "UTF-8").'||'. htmlentities($content, ENT_QUOTES, "UTF-8"), //test
            $data['area'] . '||Aptech||'.htmlentities($subject, ENT_QUOTES, "UTF-8").'||'. htmlentities($content, ENT_QUOTES, "UTF-8")
        );

        $queue = new QueueMail(array(
            'emails' => $emails,
            'cache_name' => "aptech_email",
            'url' => 'https://aptechvietnam.com.vn'
        ));

        $queue->queue_email();
    }

    private function setCacheName($name) {
        $this->_cacheName = $name;
        return $this;
    }

    private function getCacheName() {
        return $this->_cacheName;
    }
}