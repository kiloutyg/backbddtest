<?php
require_once('class/Class.php');

// User information
$name = "John";
$firstName = "Doe";
$dateOfBirth = "2000-01-01";

// Astrological sign
$astrologicalSign = "";
$monthDay = substr($dateOfBirth, 5);

if ($monthDay >= "03-21" && $monthDay <= "04-19") {
  $astrologicalSign = "Aries";
} else if ($monthDay >= "04-20" && $monthDay <= "05-20") {
  $astrologicalSign = "Taurus";
} else if ($monthDay >= "05-21" && $monthDay <= "06-21") {
  $astrologicalSign = "Gemini";
} else if ($monthDay >= "06-22" && $monthDay <= "07-22") {
  $astrologicalSign = "Cancer";
} else if ($monthDay >= "07-23" && $monthDay <= "08-22") {
  $astrologicalSign = "Leo";
} else if ($monthDay >= "08-23" && $monthDay <= "09-22") {
  $astrologicalSign = "Virgo";
} else if ($monthDay >= "09-23" && $monthDay <= "10-22") {
  $astrologicalSign = "Libra";
} else if ($monthDay >= "10-23" && $monthDay <= "11-21") {
  $astrologicalSign = "Scorpio";
} else if ($monthDay >= "11-22" && $monthDay <= "12-21") {
  $astrologicalSign = "Sagittarius";
} else if ($monthDay >= "12-22" || $monthDay <= "01-19") {
  $astrologicalSign = "Capricorn";
} else if ($monthDay >= "01-20" && $monthDay <= "02-18") {
  $astrologicalSign = "Aquarius";
} else if ($monthDay >= "02-19" && $monthDay <= "03-20") {
  $astrologicalSign = "Pisces";
}

// Password
$password = "";
$length = 12;
$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

for ($i = 0; $i < $length; $i++) {
  $password .= $characters[mt_rand(0, strlen($characters) - 1)];
}

// Complex password with name and/or first name
$complexPassword = "";
$length = 12;

if (strlen($firstName) >= 3) {
  $complexPassword .= substr($firstName, 0, 3);
} else {
  $complexPassword .= $firstName;
}

if (strlen($name) >= 3) {
  $complexPassword .= substr($name, 0, 3);
} else {
  $complexPassword .= $name;
}

$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

for ($i = strlen($complexPassword); $i < $length; $i++) {
  $complexPassword .= $characters[mt_rand(0, strlen($characters) - 1)];
}

// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Insert user information into the database
$sql = "INSERT INTO users (name, first_name, date_of_birth, astrological_sign, password, complex_password) VALUES ('$name', '$firstName', '$dateOfBirth', '$astrologicalSign', '$password', '$complexPassword')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
