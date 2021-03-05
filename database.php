<?php

# Heroku credential 
$host_heroku = "ec2-54-209-43-223.compute-1.amazonaws.com";
$db_heroku = "d5ip5tr7ul9bnf";
$user_heroku = "zbrqgoahhlgwpf";
$pw_heroku = "4335a717616309bb7c57b0ed14b794b3e0633f9c0fae34a2fb7cfe14cf060d9b";
# Create connection to Heroku Postgres
$conn_string = "postgres://zbrqgoahhlgwpf:4335a717616309bb7c57b0ed14b794b3e0633f9c0fae34a2fb7cfe14cf060d9b@ec2-54-209-43-223.compute-1.amazonaws.com:5432/d5ip5tr7ul9bnf";
$conn = pg_connect($conn_string);

if (!$conn)
{
  die('Error: Could not connect: ' . pg_last_error());
}
?>