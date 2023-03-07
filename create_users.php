<?php

$host = '127.0.0.1';
$username = 'brands';
$password = '@Verification1.';
$dbname = 'brands';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

for ($i = 0; $i < 30; $i++) {
  $name = 'User ' . ($i+1);
  $email = 'user' . ($i+1) . '@example.com';
  $password = password_hash('password123', PASSWORD_DEFAULT);
  $created_at = date('Y-m-d H:i:s', rand(time()-86400*30, time()));
  
  $sql = "INSERT INTO users (name, email, password, created_at) VALUES ('$name', '$email', '$password', '$created_at')";
  
  if (mysqli_query($conn, $sql)) {
    echo "User created successfully: $name\n";
  } else {
    echo "Error creating user: " . mysqli_error($conn) . "\n";
  }
}

mysqli_close($conn);
