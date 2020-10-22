<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
  echo "DataBase Not Connect";	
}
mysql_select_db("onlinebakery");
?>