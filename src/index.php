<?php
//phpinfo();

# Fill our vars and run on cli
# $ php -f db-connect-test.php
$mysqli = new mysqli('db', 'root', 'example');

/* check connection */
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


/* close connection */
$mysqli->close();