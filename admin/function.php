<?php
include("conn.php");
function login($uid,$pwd)
{
	  $q="select User_id , Password from registration where User_id='$uid' and Password='$pwd'";
	  $rs=mysql_query($q);
	  return $rs;
	 

}
function registration($fn,$ln,$em,$cn,$add,$uid,$pwd)
{

  $q="insert into registration(First_name,Last_name,Email_id,Contact_number,Address,User_id,Password)values('$fn','$ln','$em','$cn','$add','$uid','$pwd')";
      mysql_query($q);
	 $n=mysql_affected_rows($GLOBALS['conn']);
	 if($n>0)
	 {
	 	return true;
	 }
	 else
	 {
	 	return false;
	 }
}


 function addproduct($pi,$pn,$ds,$pr,$ca)
{

  $q="insert into addproduct(Product_id,Product_name,Description,Price,Category)values('$pi','$pn','$ds','$pr','$ca')";
      mysql_query($q);
	 $n=mysql_affected_rows($GLOBALS['conn']);
	 if($n>0)
	 {
	 	return true;
	 }
	 else
	 {
	 	return false;
	 }
}
 ?>