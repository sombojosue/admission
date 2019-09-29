<?php
/* Connect into the server */
define(host, "localhost");
define(user, "josue");
define(password, "josue");
define(dbname, "admission");

/* testing data to connect into the mysql server */
$con = mysqli_connect(host, user, password, dbname);

?>