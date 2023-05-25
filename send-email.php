<?php
session_start();
if (!isset($_SESSION['S_Role'])) 
{
  header("location:index.php");
}

$_email = $_POST['uemail'];
$_etype = $_POST['emailType'];


include("header.php");

?>
    <div class="wrapper">
      
        <div class="contentArea">
			<div class="logoutbtn"><a href="logout.php">Log Out</a></div>
			<h3>Hello <span class="role"><?php echo $_SESSION['S_Role']; ?></span></h3><br><hr><br>
	
			<?php if($_etype=="newAccount"){  ?>
			<h3>New Account Creation</h3>
	<?php }else if($_etype==  "lostPassword"){ ?>
			<h3>Lost your password</h3>
			<?php } ?>
			
       </div>
     
    </div>
    <?php include("footer.php");?>