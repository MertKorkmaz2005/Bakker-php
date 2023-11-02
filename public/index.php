 <?php include '../includes/db.php'; ?>



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

   <?php 
     $query = "SELECT * FROM taarten";
     $select__taarten = mysqli_query($connection,$query);

     while($taart = mysqli_fetch_assoc($select__taarten)) : ?>
      
   <article class="food">
      <h2 class="food__h2"><?php echo $taart['title'];?></h2>
      <img src="<?php echo $taart['img'];?>" alt="" class="food__img">
      <p class="food__text"><?php echo $taart['text'];?></p>
      <a href="/single.php?id=<?php echo $taart['id']; ?>"><?php  ?>klik</a>
   </article>
   
   <?php endwhile; ?>

   </section>






    
 </body>
 </html>