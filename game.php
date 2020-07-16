<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game</title>
</head>
<body>
  <form action="game.php" method="get" >
   Color: <input type="text" name="color"> <br><br>
   Verb: <input type="text" name="verb"> <br><br>
    Adverb:<input type="text" name="adverb"> <br><br>

    <input type="submit"><br><br>
  </form>
  <?php 
  
  $color = $_GET["color"];
  $verb = $_GET["verb"];
  $adverb =$_GET["adverb"];
 
  echo  "Female tech geeks are  $color<br>";
  echo  "$verb tech geeks are sweet<br>";
  echo  "Female tech geeks are $adverb<br>"; 
  ?>
  
</body>
</html>