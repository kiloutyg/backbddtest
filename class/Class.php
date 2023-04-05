<?php


class mysqli
{
    public  $servername;
    public  $username;
    public  $password;
    public  $dbname;

    public function __construct($servername, $username, $password, $dbname)
    {
    }

    public function query($sql)
    {
        $sql = "INSERT INTO users (name, first_name, date_of_birth, astrological_sign, password, complex_password) VALUES ('$name', '$firstName', '$dateOfBirth', '$astrologicalSign', '$password', '$complexPassword')";
    }
}
