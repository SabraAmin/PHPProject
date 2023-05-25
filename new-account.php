<?php
session_start();
if (!isset($_SESSION['S_Role'])) 
{
  header("location:index.php");
}
include("header.php");?>
    <div class="wrapper">
      
        <div class="contentArea">
			<div class="logoutbtn"><a href="logout.php">Log Out</a></div>
			<h3>Hello <span class="role"><?php echo $_SESSION['S_Role']; ?></span></h3><br><hr><br>
	<h4>Create a new account</h4><br>
			<form action="send-email.php" method="POST">
<label for="uemail">Enter your email</label>
<input type="email" name="uemail" required>
<input type="hidden" name="emailType" value="newAccount">
<br><br>
<input type="submit" name="submitbtn" id="submitbtn" value="Submit">
</form>
       </div>
     
    </div>
    <?php include("footer.php");?>