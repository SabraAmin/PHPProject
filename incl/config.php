<?php 

define("HOST", "localhost");
define("DBNAME", "adventuredb");
define("DBUSER", "root");
define("DBPASS", "");
function conn()
{
  $cn = mysqli_connect(HOST,DBUSER,DBPASS) or 
  die("<h2>This website is currently under construction</h2>");
  mysqli_select_db($cn,DBNAME);
  return $cn;
}
function DisConn()
{
  $cn = conn();
  mysqli_close($cn);
}