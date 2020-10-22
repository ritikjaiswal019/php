<?php
include("conn.php");
?>

<html>
<head>
	<title>add product</title><style type="text/css">
  #main
  {
      height: 600px;
      width: 1330px;
      padding-top: 30px;
      background-image: url("pics/order/bread plugin3.JPG");
      background-color:lightblue;
    }

    </style>
</head>
<body bgcolor="black">
<form action="#" method="post">
<div id="main">
<table  border="2" align=center style="height:500;width:900; background-color:peru;">
<tr>
<td colspan=2, align=center><div float="center"><label>
  <h1 style="color:black">order Products</h1>
 </label></div></td>
</tr>
<tr>
 <div float="left"><td  align=center style="height:300;width:650;background-color:white;">
 <br><br>
<label>
Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="n" id="n" placeholder="Enter name" required="required" > * </input><br><br>
<label>
Product id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="pn" id="pn" placeholder="Enter Product id" required="required" > * </input><br><br>
<label>
card no.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="cn" id="cn" placeholder="Enter card no." required="required"> * </input><br><br>
<input type="submit" name="btn" id="btn" value="Submit" ></input><br>
<h5><u><a href="availableitemspage.php">back</a></u></h5>
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
$n=$_POST["n"];
$pn=$_POST["pn"];
$cn=$_POST["cn"];
if(ordertable($n,$pn,$cn))
{
   echo '<script>
   alert("Order placed......");
   window.location="viewpage.php";
   </script>';
}
else
{
  echo '<script>
   alert(" Product is not placed please try again......!");
   window.location="orderpage.php";
   </script>';
}

}
?>