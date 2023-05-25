<?php
session_start();
if (!isset($_SESSION['S_Role'])) 
{
  header("location:index.php");
}
include("header.php");

?>
    <div class="wrapper">
        <div class="contentArea">
			<div class="logoutbtn"><a href="logout.php">Log Out</a></div>
			<h3>Hello <span class="role"><?php echo $_SESSION['S_Role']; ?></span></h3><br><hr><br>
	<br>
			<p>
			Please call: 
				<strong>0123-1234567</strong>
			</p>
			
       </div>
     
    </div>
    <?php include("footer.php");?>