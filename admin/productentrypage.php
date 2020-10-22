<?php
include("conn.php");
?>

<html>
<head>
	<title>add product</title><style type="text/css">
  #main
  {
      height: 1000px;
      width: 1330px;
      padding-top: 30px;
      background-image: url("pics/registration/IMG_20170420_155632_143 (2).JPG");
      background-color:lightblue;
    }

    </style>
</head>
<body bgcolor="brown">
<form action="#" method="post">
<div id="main">
<table  border="2" align=center style="height:600;width:900; background-color:peru;">
<tr>
<td colspan=2, align=center><div float="center"><label>
  <h1 style="color:black">Add Products</h1>
 </label></div></td>
</tr>
<tr>
 <div float="left"><td  align=center style="height:300;width:650;background-color:white;">
 <br><br>
<label>
Product id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="pi" id="pi" placeholder="Enter Product Id" required="required" > * </input><br><br>
<label>
Product name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="pn" id="pn" placeholder="Enter Product Name" required="required" > * </input><br><br>
<label>
Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="ds" id="ds" placeholder="Description about Product" required="required"> * </input><br><br>
<label>
Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<input type="text" name="pr" id="pr" placeholder="Enter Price" required="required"> * </input><br><br>
<label>
Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<select id="ca" name="ca" required="required"><option>cake</option><option>pastries</option><option>muffins</option></select> * </input><br><br>
<input type="submit" name="btn" id="btn" value="Submit" ></input><br>
<h5><u><a href="viewpage.php">back</a></u></h5>
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
$pi=$_POST["pi"];
$pn=$_POST["pn"];
$ds=$_POST["ds"];
$pr=$_POST["pr"];
$ca=$_POST["ca"];
if(addproduct($pi,$pn,$ds,$pr,$ca))
{
   echo '<script>
   alert("Product added successfully......");
   window.location="viewpage.php";
   </script>';
}
else
{
  echo '<script>
   alert(" Product is not added please try again......!");
   window.location="productentrypage.php";
   </script>';
}

}
?>