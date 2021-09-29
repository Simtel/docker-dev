<?php
phpinfo();

# Fill our vars and run on cli
# $ php -f db-connect-test.php
$mysqli = new mysqli('db', 'root', 'example');

/* check connection mysql */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* check if server is alive */
if ($mysqli->ping()) {
    printf ("Our Mysql connection is ok!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}

$mysqli->close();
/* close test connection */


/* test connection memcached */
$mc = new Memcached();
$mc->addServer("memcached", 11211);

$mc->set("foo", "Hello! 1");
$mc->set("bar", "Memcached 2...");

$arr = [
    $mc->get("foo"),
    $mc->get("bar")
];
var_dump($arr);

/* close test connection */

/* test mail send to mailhog */

// Сообщение
$message = "Line 1\r\nLine 2\r\nLine 3";

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Отправляем
$res = mail('caffeinated@example.com', 'My Subject', $message);

var_dump($res);

/* close test mail send to mailhog */