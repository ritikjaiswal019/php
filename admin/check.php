<?php
if(isset($_POST["btn"]))
{
	include("function.php");
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $rs=login($uid,$pwd);
    $n=mysql_num_rows($rs);
    
    if($n>0)
    {
          if($row=mysql_fetch_array($rs))
          {
             session_start();
             $_SESSION['unm']=$row[0];
             header("location:viewpage.php");
          }
    }
    else
    {
        echo '<script>alert("INvalid Username and Password");window.location="loginpage.php";
        </script>';
    }
    
}
 ?>
    <!--{
       	
        echo  '<script>alert("Data Saved");
         window.location:p4.html;
        </script>';
    }
    else
    {

    	echo  '<script>alert("Data Not Saved");
         window.location:p2.php;
    	</script>';
    }

}-->

	 




