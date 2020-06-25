<?php

include 'cache.php';
include 'phpmailer/mailconfig.php';

if (isset($_GET['cache'])) {
    send_queued_emails($_GET['cache']);
} else {
    print('no cache name');
}

function send_queued_emails($cache_name) {
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

    if ($result == "")
        return;

    $result = explode("==", $result);
    $from = 'relayAA@aprotrain.com';

    foreach ($result as $value) {
        $data = explode("||", $value);

        echo 'Email: '.$data[0].'</br>';
        echo 'From name: '.$data[1].'</br>';
        echo 'Subject: '.$data[2].'</br>';
        echo 'Body: '.$data[3].'</br>';
        echo '------------------------';
        smtpmailer($data[0], $from, $data[1], html_entity_decode($data[2], ENT_QUOTES, "UTF-8"), html_entity_decode($data[3], ENT_QUOTES, "UTF-8"));
    }

    echo "[SEND MAIL SUCCESSFULL!] *******************";
};