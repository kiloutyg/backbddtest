<?php


class mysqli
{
    public  $servername;
    public  $login;
    public  $hashed;
    public  $dbname;

    public function __construct($servername, $login, $hashed, $dbname)
    {
    }

    public function query($sql)
    {
        $sql = "INSERT INTO users (login, password) VALUES ('$login', '$hashed')";
    }
}
