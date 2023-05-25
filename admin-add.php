
<?php include("header.php");?>
    <!-- --------Layout Section starts---------- -->
    <div class="wrapper">
        <div class="contentArea">
       <h2 style="text-align:center">Admin - Add Adventure</h2><br><br><hr><br>
       <p>Input details about the trip</p><br>
       <form action="admin-confirm.php" method="POST">
<label for="heading">Heading</label><br>
<input type="text" id="heading" name="heading" required>
<br><br>
		   <label for="TripDate">Trip Date</label><br>
<input type="date" id="TripDate" name="TripDate" placeholder="mm/dd/yyyy"   required>
<br><br>
<label for="duration">Duration</label><br>
<input type="text" id="duration" name="duration" required><br><br>
		    
<label for="summary">Summary</label><br>
<textarea name="summary" cols="60" rows="8" required></textarea>
<br><br>
<input type="submit" name="AddAdventurebtn" id="AddAdventurebtn" value="Submit">
</form></div>
     
    </div>
    <!-- --------Layout Section ends---------- -->

    <?php include("footer.php");?>