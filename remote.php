<?php
// This is a sample PHP script which demonstrates the 'remote' validator
// To make it work, point the web server to root Bootstrap Validate directory
// and open the remote.html file:
// http://domain.com/demo/remote.html

header('Content-type: application/json');


//sleep(5);

$valid = false;

$users = array(
    'admin'         => 'admin@domain.com',

);

if (isset($_POST['username']) && array_key_exists($_POST['username'], $users)) {
    $valid = true;
} else if (isset($_POST['email'])) {
    $email = $_POST['email'][0];
    foreach ($users as $k => $v) {
        if ($email == $v) {
            $valid = true;
            break;
        }
    }
}

echo json_encode(array(
    'valid' => $valid,
));
