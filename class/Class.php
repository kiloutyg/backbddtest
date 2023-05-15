<?php


class mysqli
{
    public  $servername;
    public  $login;
    public  $password;
    public  $dbname;

    public function __construct($servername, $login, $password, $dbname)
    {
    }

    public function query($sql)
    {
        $sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
    }
}
