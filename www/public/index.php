<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <H1>Elliot</H1>
   <form action="uppg1.php" method="post">
      <fieldset>
         <legend>
            Striptags
         </legend>
      <label>Stripped tag</label>
      <input type="text" name="stripped">
      <label>Unstripped tag</label>
      <input type="text" name="unstripped">
      <input type="submit" value="Skicka">
      </fieldset>
   </form>

   <!--Uppg2-->
   <?php

   //UPPGIFT 2
    for($i = 1; $i <5; $i+=0.1){
        echo($i ." ");
    }
    $i = 1;
    while($i < 5){
      echo($i . " ");
      $i+=0.1;
    }

    // UPPGIFT 3
    $page["head"] = "<h1>Välkommen</h1>";
    $page["main"] = "<p>Detta är innehållet på min sida</p>";
    $page["footer"] = "<hr><p>Min sidfot</p>";
    foreach($page as $thing){
      echo($thing);
    }

    //Uppg4
    include('uppg4.php');

    $prod = multiply(6, 6);
    $diff = sub(6, 6);
    $sum = sum(6, 6);
    $kvot = divide(6, 6);

    echo("Multiplikation " . $prod . " Subtraktion " . $diff . " Addition " . $sum . " Divistion " . $kvot);
    ?>
    
    <form action="uppg5.php" method="post"> 
      <fieldset>
         <legend>Konto</legend>
         <label>Förnamn</label>
         <input type="text" name="firstname"> <br>
         <label>Efternamn</label>
         <input type="text" name="lastname"> <br>
         <label>Användarnamn</label>
         <input type="text" name="username"> <br>
         <label>Lösenord</label>
         <input type="password" name="password"> <br>
         <input type="submit" value="Skicka">
      </fieldset>
    </form>

   
</body>
</html>