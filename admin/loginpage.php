<html>
<head>
<title>login</title>
<script type="text/javascript">
function check()
{
	
	uid=document.getElementById("uid").value;
	pwd=document.getElementById("pwd").value;
	if(uid.length<1)
	{
		alert("Id Field Is Required:");
		return false;
	}
	if(pwd.length<1)
	{
		alert("Password Field Is Required:");
		return false;
	}
	
	
	return true;
}
</script>
<style type="text/css">
#main
  {
      height: 700px;
      width: 1330px;
      padding-top: 50px;
      background-image: url("pics/login/2017-04-18-15-43-31-731.JPG");
    }
    #header
  {
      height:100px;
      width:750px;
      background-color:darkseagreen; 
    }
    #menu
  {
      height:50px;
      width: 750px;
      background-color:white;
    }
    #mid
    {
        height: 320px;
        width: 750px;
      background-color:lightyellow; 
    }
    #left
    {
      
        height: 320px;
        width: 200px;
      
    }
     #center
    {
      float: left;
        height: 320px;
        width: 350px;
      
    }
     #right
    {
      float: left;
        height: 320px;
        width: 200px;
      
    }
    #footer
    {
        height:60px;
        width: 750px;
        background-color:darksalmon;
      
    }
    </style>
</head>
<body bgcolor="black">
 <form action="check.php" method="POST">
 <div id="main" align="center" >
<div id="header">
  <div align="center"><h3 style="color:darkslategrey;padding-top:20px;font-size:50px;"><i>Online bakery Shop</i></h3></div>
</div>
<div id="mid">
  <div   align="center" style="padding-top:30">
	<label>
		<b>User Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
	</label>
	<input type="text" name="uid" id="uid" placeholder="Enter User Id"></input>
	<br><br>
<label> 
		<b>Password</b>
	</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pwd"  id="pwd" placeholder="Enter Password"></input><br><br><br><br>
	<input  type="submit" name="btn" id="btn" value="LOGIN" onclick="return check()">
	<!--<a href="check.php">LOGIN</a>-->
    <br><br>
	<h3>
		<a href="registrationpage.php">Registration</a>
	</h3>
	<h5><a href="homepage.php">home</a></h5>
</div>
</div>
<div id="footer"><marquee behavior="alternate" scrollamount="5"><h3 style="font-size: 26px;color:orangered;"><i>www.MPbakeryshop.com</i></h3></marquee></div>
</div>

</form>
</body>
</html>
