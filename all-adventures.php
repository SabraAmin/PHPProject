<?php 

include("incl/config.php");
include("incl/functions.php");
$AllAdventures = get_adventures();
include("header.php");
?>
    <!-- --------Layout Section starts---------- -->
    <div class="wrapper">
      <main>
        <!-- --------Hero image Section starts---------- -->
        <div class="hero-image">
          <h1 class="hero-text">
            Come Experience <br />
            Canada
          </h1>
			 
        </div>
        <!-- --------Hero image Section starts---------- -->

        <h1 class="adv-heading">Upcoming Adventures</h1>

        <!-- --------Data Loop starts---------- -->

  <?php
  // ["id"]["heading"]["tripDate"]["duration"]["summary"]
  
  foreach($AllAdventures as $SingleRec){ ?>
        <section class="adv-section">
          <h3 class="adv-topic-heading"><?php echo $SingleRec['heading'] ?></h3>
          <div>
            <p class="adv-details">Date: <?php echo $SingleRec['tripDate'] ?></p>
            <p class="adv-details">Duration: <?php echo $SingleRec['duration'] ?> days</p>
          </div>
          <p class="adv-sub-heading">Summary</p>
          <p class="adv-text"><?php echo $SingleRec['summary'] ?>  
          </p>
        </section>
        <?php } ?>
       </main>
    </div>
    <!-- --------Layout Section ends---------- -->

    <?php include("footer.php");?>