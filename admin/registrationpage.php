<?php
include("conn.php");
?>

<html>
<head>
	<title>Reg</title><style type="text/css">
  #main
  {
      height: 1050px;
      width: 1330px;
      padding-top: 30px;
      background-image: url("pics/registration/IMG_20170420_155632_143 (2).JPG");
      background-color:palegreen;
    }

    </style>
</head>
<body bgcolor="black">
<form action="#" method="post">
<div id="main">
<table  border="2" align=center style="height:800;width:900; background-color:palegreen;">
<tr>
<td colspan=2, align=center><div float="center"><label>
  <h1>Registration</h1>
 </label></div><div align="left"><!--<marquee direction="right" behavior="alternate"><img src="pics/registration/pic3.JPG" height="120" width="130"><img src="pics/registration/dessert-1526592__340.JPG" height="120" width="370"><img src="pics/registration/heart-1095533__340.JPG" height="120" width="130"><img src="pics/registration/jaffa-1329679__340.JPG" height="120" width="130"><img src="pics/registration/muffin-1504558__340.JPG" height="120" width="130"><img src="pics/registration/pic3.JPG" height="120" width="130"></marquee>--></div></td>

</tr>
<tr><div float="left"><td style="height:600;width:350;background-color:tomato;background-image:url(pics/registration/jaffa-1329679__340.JPG); "> <h3 style="color: maroon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<marquee direction="left" scrollamount="5">We Welcomes You..please register</marquee></h3><marquee direction="left"><img src="pics/registration/heart-1095533__340.JPG" height="530px" width="300px"><img src="pics/registration/muffin-1504558__340.JPG" height="530px" width="300px"><img src="pics/registration/pic3.JPG" height="530px" width="300px"></marquee> 
</td></div>
 <div float="left"><td  align=center style="height:600;width:650;background-color:lightpink;">
 <br><br>
<label>
First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="fn" id="fn" placeholder="Enter First name" required="required" > * </input><br><br>
<label>
Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="ln" id="ln" placeholder="Enter Last name" required="required" > * </input><br><br>

<label>
Email-Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="em" id="em" placeholder="Enter email address" required="required"> * </input><br><br>
<label>
Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="cn" id="cn" placeholder="Enter contact number" required="required"> * </input><br><br>
<label>
Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="add" id="add" placeholder="Enter address" > * </input><br><br>
<label>
User Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="uid" id="uid" placeholder="Enter user id" required="required"> * </input><br><br>
<label>
Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="Password" name="pwd" id="pwd" placeholder="Enter Password" required="required"> * </input><br><br>

<input type="submit" name="btn" id="btn" value="Register" ></input><br><br>
<h5><u><a href="homepage.php">home</a></u></h5>
</td>
 </div>
</table>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
  include("function.php");
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$em=$_POST["em"];
$cn=$_POST["cn"];
$add=$_POST["add"];
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];
if(registration($fn,$ln,$em,$cn,$add,$uid,$pwd))
{
   echo '<script>
   alert("Registration Successfully done......");
   window.location="loginpage.php";
   </script>';
}
else
{
  echo '<script>
   alert("Not Registered please try again......!");
   window.location="registrationpage.php";
   </script>';
}

}
?>