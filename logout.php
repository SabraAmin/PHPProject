<?php 
session_start();
session_destroy();

include("header.php");

?>
    <div class="wrapper">
      
        <div class="contentArea">
			<h3>You are loged out successfully</h3><br><hr><br>
			<p>
				<a href="login.php">Login Again</a>
			</p>
			
       </div>
     
    </div>
    <?php include("footer.php");?>