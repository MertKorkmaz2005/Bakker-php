 <?php include '../includes/db.php'; ?>

 <?php 
     $query = "SELECT * FROM taarten";
     $select__taarten = mysqli_query($connection,$query);

     $title = [];
     $img = [];
     $text = [];

     while($row = mysqli_fetch_assoc($select__taarten)) {
      $title[] = $row["title"];
      $img[] = $row["img"];
      $text[] = $row["text"];
     }
     


 
 
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bakker</title>
    <link rel="stylesheet" href="src/css/style.css">
 </head>
 <body>
   <h2 class="h2">Mert's Bakery</h2>


   <section class="foods">

   <?php for($i = 0; $i < 6; $i++){
      ?>
   <article class="food">
      <h2 class="food__h2"><?php echo $title[$i];?></h2>
      <img src="<?php echo $img[$i];?>" alt="" class="food__img">
      <p class="food__text"><?php echo $text[$i];?></p>
   </article>
   <?php
   }
   ?>
      



   </section>



    
 </body>
 </html>