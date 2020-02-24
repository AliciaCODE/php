<?php
 require('inc/func.php');
 require('inc/data.php');
 $title = 'page acceuil';
 include('inc/header.php');  ?>
 <div class="wrap">
   <?php
     foreach ($movies as $movie) { ?>
        <div class="image"><a href="detail.php?id=<?php echo $movie['id']; ?>"><?php echo getImageMovie($movie) ?></a></div>

     <?php }
   ?>
 </div>

<div class="clear"></div>


<?php include('inc/footer.php'); ?>
