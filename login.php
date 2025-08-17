<?php
session_start();
$_SESSION['stdhako']=0;

$error = "";
include 'config.php';

if (isset($_POST['login'])) {
    
	$name = $_POST['name'];
    $pass= $_POST['pass'];
	$sql = mysqli_query($conn, "SELECT * FROM reg where name='$name' and  gsm='$pass' ");
   			  $row  = mysqli_fetch_array($sql);
	
	
	 if (!empty($row['gsm'])) 
	     {
       		 
			  
			        $_SESSION["name"] = $row['name'];
					$_SESSION["gsm"] = $row['gsm'];
        		    
        		
				    $_SESSION['stdhako']=4;
				
      		        header("Location: http://localhost/samtecclass/index.html");
                
          } elseif (empty($row['gsm'])) 
	                  { 
					   echo '<script type="text/javascript">
          window.onload = function () { alert("Invalid Login Deail"); window.location = "http://localhost/samtecclass/index.html"; }
</script>'; $error = "Invalid login detail";
					  }

}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MY PAGE</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
}
.style2 {color: #FFFFFF}
-->
</style>
</head>

<body bgcolor="#00CCFF">
<table width="434" border="1" align="center">
  <tr>
    <td height="82" bgcolor="#993300"><div align="center"><span class="style1"><marquee>WELCOME TO MY WEB SITE</marquee></span> </div></td>
  </tr>
  <tr>
    <td height="38" bgcolor="#999900"><a href="index.html">HOME </a>| ABOUT | GALLARY | CONTACT </td>
  </tr>
  <tr>
    <td height="349" bgcolor="#006633"><form id="form1" name="form1" method="post" action="">
      <div align="center"><span class="style2">LOOGIN FORM
      </span></div>
      <span class="style2"><label></label>
      </span>
      <label>
      <div align="center">
        <p><br />
          USER NAME
          <input type="text" name="name" required />
            <br />
          PASSWORD 
          <input type="password" name="pass" required  />          
          <br />
          <br />
          <input type="submit" name="login" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="reg.html"> <input type="button" name="Submit2" value="New Reg" /> </a>        </p>
        </div>
      </label>
            </form>    </td>
  </tr>
</table>
</body>
</html>
