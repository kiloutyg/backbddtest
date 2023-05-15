<?php

include('databse.php');

function find_users($db)
{
    $request_string = "SELECT * FROM users";
    $request = $db->prepare($request_string);
    $request->execute();

    return $request;
}
