<?php
   error_reporting(E_ALL ^ E_NOTICE);
   session_start();

?>
<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
 </head>
<body>
  <?php
     $forma = "<form action='login.php' method='post'>
     			<table>
     			<tr>
     			  <td>Korisnik </td>
     			  <td><input type='text' name='korisnik'></td>
     			</tr>

     			<tr>
     			  <td>Lozinka</td>
     			  <td><input type='password' name='lozinka'>
     			</tr>

     			<tr>
     			<td><input type='submit' name='posalji' value='uloguj'></td>
     			</tr>
     			</table>
     </form>";

     if($_POST['posalji'])
     {
     	$korisnik = $_POST['korisnik'];
     	$lozinka = $_POST['lozinka'];

     	if($korisnik)
     	{
     		if($lozinka){
     			require("konekcija.php");

     			$password = md5(md5("werte".$password."werte"));
     			$query = mysql_query("SELECT * FROM korisnici WHERE username = '$user'");
     			$numrows = mysql_num_rows($query);
     			if($numrows == 1)
     			{
     				$row = mysql_fetch_assoc($query);
     				$dbid = $row['id'];
     				$dbpass = $row['password'];
     				$dbuser = $row['username'];
     				$dbactive = $row['active'];

     				if($password == $dbpass){
     					if($dbactive == 1)
     					{
     						$_SESSION['id'] = $dbid;
     						$_SESSION['username'] = $dbuser;

     						echo "You have been log in as <b>$dbuser</b>. <a href='/member.php'>Click here to go to the member page.</a>";
     					}
     					else
     					{
     						echo "You must activate your account to log in .$form";
     					}
     				}
     				else{
     					echo "Wrong password .$form";
     				}
     			}
     			else
     			{
     				echo "wrong username or password, try again. $form";
     			}
     			mysql_close();
     		}
     		else
     		{
     			echo "molimo vas unesite lozinku. $forma";
     		}
     	}
     	else
     	{
     		echo "molimo vas unesite korisnicko ime . $forma";
     	}
     }
     else
     {
     	echo $forma;
     }

   
      
  ?>
</body>
</html>