<?php
if(!isset($_POST['submitbtn'])){
	header("location:login.php");
}
else{
	$Title = $_POST["title"];
	$FName = $_POST["fname"];
	$LName = $_POST["lname"];
	$Role = $_POST["role"];
	
	session_start();
	$_SESSION['S_Title'] = $Title;
	$_SESSION['S_FName'] = $FName;
	$_SESSION['S_LName'] = $LName;
	$_SESSION['S_Role'] = $Role;
}
include("header.php");?>
    <div class="wrapper">
      
        <div class="contentArea">
			<div class="logoutbtn"><a href="logout.php">Log Out</a></div>
	<?php if($Role=="Admin"){?>
			<div class="problemLinks">
				<h3>Hello <span class="role"><?php echo $Role; ?></span></h3><hr><br><br>
				<h4>Here are your options:</h4>
				<p><a href="new-account.php">Create new account</a></p>
				<p><a href="isnt-working.php">My Computer is not working</a></p>
			</div>
<?php	}elseif($Role=="Manager"){?>
			<div class="problemLinks">
			<h3>Hello <span class="role"><?php echo $Role; ?></span></h3><hr><br><br>
				<h4>Here are your options:</h4>
				<p><a href="lost-password.php">Lost your password</a></p>
				<p><a href="isnt-working.php">My Computer is not working</a></p>
			</div>
	<?php }elseif($Role=="CEO"){?>
			<div class="problemLinks">
			<h3>Hello <span class="role"><?php echo $Role; ?></span></h3><hr><br><br>
				<h4>Here are your options:</h4>
				<p><a href="need-help.php">Need help</a></p>
				<p><a href="isnt-working.php">My Computer is not working</a></p>
			</div>
	<?php } ?>
			
       </div>
     
    </div>
    <?php include("footer.php");?>