<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- <?php
        // echo("Hello World");
        // echo("<hr>");
        // echo("<h1> Cesar's Site</h1>");
        // echo("<hr>");
        // echo("<p> This is a test paragraph tag </p>");
        // $characterName = "John";
        // $characterAge = 35;
        // //this is a string
        // // $phrase = "To be or not to be";
        // // this is an integer/whole number
        // $age = 30;
        // // //this is a float
        // // $gpa = 3.589;
        // // //boolean either true and false
        // // $isMale = true;
        // // //null or no value
        // // $null = null;
        // $phrase = "Giraffe Academy";
        // // $phrase[0] = "B";

        // // echo str_replace("Giraffe", "Panda", $phrase);
        // // echo "There once was a man named $characterName <br>";
        // // echo "He was $characterAge years old <br>";
        // // echo "He really liked the name $characterName <br>";
        // // echo "But didn't like being $characterAge <br>";
        // echo "<hr>";
        // echo str_replace("Giraffe", "Panda", $phrase), "<br>";
        // echo substr($phrase, 8, 3), "<br>";
        // echo "$phrase <br>";
        // echo strtolower($phrase), "<br>";
        // echo strtoupper($phrase), "<br>";
        // echo strlen($phrase), "<br>";
        // echo $phrase[0];

     ?> -->
      <!-- //getting user input
     <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
     </form>

     Your name is: <?php echo $_GET["name"] ?>
     Your age is <?php echo $_GET["age"] ?> -->

     <!-- Building a basic calculator -->

     <!-- <form action="site.php" method="get">
        Num1:<input type="number" name="num1">
        <br>
        Num2:<input type="number" name="num2">
        <input type="submit">
     </form>

     Answer: <?php echo $_GET["num1"] + $_GET["num2"]?> -->

     <!-- Building a Mad Libs Game -->

     <!-- <form action="site.php" method="get">
         Color: <input type="text" name="color"> <br>
         Plural Noun: <input type="text" name="pluralNoun"> <br>
         Celebrity: <input type="text" name="celebrity"> <br>

         <input type="submit">
     </form>
     <br></br>

     <?php 
     $color = $_GET["color"];
     $pluralNoun = $_GET["pluralNoun"];
     $celebrity = $_GET["celebrity"];

      echo "Roses are $color <br>";
      echo "$pluralNoun are blue <br>";
      echo "I love $celebrity <br>";
     ?> -->

     <!-- URL Parameters -->

      <!-- <form action="site.php" method="get">

      Name: <input type="text" name="name"> <br>
            <input type="submit">
     </form>

     <?php

         echo $_GET["age"];
     
     ?> 

     POST vs. GET

     <form action="site.php" method="get">
      Password: <input type="password" name="password"> <br>
      <input type="submit">
     </form>
     <br></br>

     <?php
      echo $_GET["password"];
     ?> 

      <form action="site.php" method="post">
         Password: <input type="password" name="password"> <br>
         <input type="submit">
      </form>
      <br></br>

      <?php
         echo $_POST["password"];
      ?> -->

      <!-- Arrays -->

      <!-- <?php 

      //    $friends = array("Kevin", "Karen", "Oscar", "Jim");
      //    // The below adds an element to the array since there is no element at the designated index
      //    $friends[4] = "Dwight";

      //    echo count($friends);
      
      // ?> 

      // <form action="site.php" method="post">
      //    Apples: <input type ="checkbox" name="fruits[]" value="apples"><br>
      //    Oranges: <input type ="checkbox" name="fruits[]" value="oranges"><br>
      //    Pears: <input type ="checkbox" name="fruits[]" value="pears"><br>
      //    <input type="submit">

      // </form>

      // <?php 
      //    $fruits = $_POST["fruits"];
      //    echo $fruits[1];

      
      // ?> -->

      <!-- Associative Arrays -->

      <form action="site.php" method="post">
         <input type="text" name="student">
         <input type="submit">
      </form>

      <?php 

         $grades = array("Jim" => "A+", "Pam"=>"B-", "Oscar"=>"C+");
         // // echo $grades["Jim"];
         // echo $grades["Jim"] ="F <br>";
         // echo count($grades);
         echo $grades[$_POST["student"]];

      
      ?>


</body>
</html>