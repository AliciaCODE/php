<?php
 require('inc/func.php');
 require('inc/data.php');
 if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
   $id = $_GET['id'];
   $goodMovie = array();
   foreach ($movies as $key => $movie) {
     if($id == $movie['id']) {
       $goodMovie = $movie;
     }
   }
   //debug($goodMovie);
   if(empty($goodMovie)) { die('404'); }
 } else { die('404'); }
  $title = 'page details';
  include('inc/header.php');?>

  <div class="wrap">
    <div class="onemovie">
      <h1><?php echo $goodMovie['title']; ?></h1>
      <?php echo getImageMovie($goodMovie); ?>
      <p>Year : <?php echo $goodMovie['year']; ?> </p>
      <p>Directors : <?php echo $goodMovie['directors']; ?> </p>
      <p>Rating : <?php echo $goodMovie['rating']; ?> </p>
      <p>Imdb : <?php echo $goodMovie['imdb_id'] ;?> </p>
    </div>






  </div>
<?php include('inc/footer.php'); ?>
