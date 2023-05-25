<?php
    if(!isset($_POST['AddAdventurebtn'])){
        header("location:admin-add.php");
    }
    else{
        // var_dump($_POST);
        $_heading = trim($_POST['heading']);
        $_TripDate = trim($_POST['TripDate']);
        $_duration = trim($_POST['duration']);
        $_summary = htmlspecialchars(trim($_POST['summary']));
        
        include("incl/config.php");
        include("incl/functions.php");
        add_adventures($_heading,$_TripDate, $_duration,$_summary);
        $message = "Data has added successfully to DB";
    }
?>
<?php include("header.php");?>
    <div class="wrapper">
     
        <div class="contentArea">
       <h2 style="text-align:center">Admin - Confirm</h2><br><hr><br>
    
       <p><?php echo $message; ?></p>
    
       <br><br>
    <h3><a href="all-adventures.php">View All Adventures</a></h3>   
    </div>
     
    </div>
    <?php include("footer.php");?>