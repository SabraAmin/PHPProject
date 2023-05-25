
<?php include("header.php");?>
    <!-- --------Layout Section starts---------- -->
    <div class="wrapper">
     
        <div class="contentArea">
       <h3>Welcome to your IT support system</h3><br>
       <form action="problem.php" method="POST">
<label for="title">Title</label>
<input type="text" id="title" name="title" required>
<br><br>
		   <label for="fname">First Name</label>
<input type="text" id="fname" name="fname" required>
<br><br>
<label for="lname">Last Name</label>
<input type="text" id="lname" name="lname" required><br><br>
		    <label for="role">Role</label>
<select name="role" required>
	<option value="">Select Role</option>
	<option value="Admin">Admin</option>
	<option value="Manager">Manager</option>
	<option value="CEO">CEO</option>
</select><br><br>


<input type="submit" name="submitbtn" id="submitbtn" value="Submit">
</form></div>
     
    </div>
    <!-- --------Layout Section ends---------- -->

    <?php include("footer.php");?>