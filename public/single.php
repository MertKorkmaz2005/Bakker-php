<?php include '../includes/db.php'; 

    $sql = 'SELECT * FROM taarten WHERE id=? ORDER BY taarten.title';

    $stmt = $connection->prepare($sql);

    $id = $_GET['id'];

    $stmt->bind_param('i', $id);

    $stmt->execute();

    $result = $stmt->get_result();

    $taart = $result->fetch_assoc();


    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $taart['title'];?></title>
    </head>
    <body>
          
   <article class="food">
      <h2 class="food__h2"><?php echo $taart['title'];?></h2>
      <img src="<?php echo $taart['img'];?>" alt="" class="food__img">
      <p class="food__text"><?php echo $taart['text'];?></p>
   </article>
        
    </body>
    </html>
