<?php
//phpinfo();

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
    printf ("Our connection is ok!\n");
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

$arr = array(
    $mc->get("foo"),
    $mc->get("bar")
);
var_dump($arr);

/* close test connection */