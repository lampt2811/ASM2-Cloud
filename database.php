<<<<<<< HEAD
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
=======
<?php

# Heroku credential 
$host_heroku = "ec2-54-146-73-98.compute-1.amazonaws.com";
$db_heroku = "ddf8u650c3idu7";
$user_heroku = "ncpbukpjfzqszt";
$pw_heroku = "e7933fdf4496f06b8f50f0a79769a1cb33b16b40e0e087374a67b2b96f77836f";
# Create connection to Heroku Postgres
$conn_string = "postgres://ncpbukpjfzqszt:e7933fdf4496f06b8f50f0a79769a1cb33b16b40e0e087374a67b2b96f77836f@ec2-54-146-73-98.compute-1.amazonaws.com:5432/ddf8u650c3idu7";
$conn = pg_connect($conn_string);

if (!$conn)
{
  die('Error: Could not connect: ' . pg_last_error());
}
>>>>>>> 2cde603cbba9fe4417c5191f69648258d2a6b971
?>