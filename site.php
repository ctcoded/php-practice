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
   //   $color = $_GET["color"];
   //   $pluralNoun = $_GET["pluralNoun"];
   //   $celebrity = $_GET["celebrity"];

   //    echo "Roses are $color <br>";
   //    echo "$pluralNoun are blue <br>";
   //    echo "I love $celebrity <br>";
     ?> -->

     <!-- URL Parameters -->

      <!-- <form action="site.php" method="get">

      Name: <input type="text" name="name"> <br>
            <input type="submit">
     </form>

     <?php

         // echo $_GET["age"];
     
     ?> 

     POST vs. GET

     <form action="site.php" method="get">
      Password: <input type="password" name="password"> <br>
      <input type="submit">
     </form>
     <br></br>

     <?php
      // echo $_GET["password"];
     ?> 

      <form action="site.php" method="post">
         Password: <input type="password" name="password"> <br>
         <input type="submit">
      </form>
      <br></br>

      <?php
         // echo $_POST["password"];
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
      <!-- php's version of objects -->

      <!-- <form action="site.php" method="post">
         <input type="text" name="student">
         <input type="submit">
      </form>

      <?php 

         // $grades = array("Jim" => "A+", "Pam"=>"B-", "Oscar"=>"C+");
         // // // echo $grades["Jim"];
         // // echo $grades["Jim"] ="F <br>";
         // // echo count($grades);
         // echo $grades[$_POST["student"]];

      
      ?> -->

      <!-- Functions -->

      <!-- <?php

         // function sayHi($name){
         //    echo "Hello $name <br>";
         // }

         // sayHi("Mike");
         // sayHi("Dave");
         // sayHi("Tom");


      ?> -->

      <!-- Return Statements -->
<!-- 
      <?php

         // function cube($num){
         //    return $num * $num * $num;
         // }

         // $cubeResult = cube(4);

         // echo $cubeResult
      
      ?> -->

      <!-- If Statements -->
<!-- 
      <?php

         // $isMale = false;
         // $isTall = true;
         // if ($isMale && $isTall){
         //    echo "You are a tall male";
         // } elseif ($isMale && !$isTall) {
         //    echo "You are male but not tall";
         // } elseif (!$isMale && $isTall) {
         //    echo "You are not male but are tall";
         // } else {
         //    echo "You are not male";
         // }

      ?> -->

      <!-- If Statements cont. -->

      <?php

      // function getMax($num1, $num2){
      //    if ($num1 > $num2){
      //       echo $num1;
      //    } elseif($num1 == $num2) {
      //       echo "These numbers are equal to eachother";
      //    } else{
      //       echo $num2;
      //    }
      // }
      
      // echo getMax(90, 3)
      
      // ?>

      <!-- Building a better calculator -->

      <!-- <form action="site.php" method="post">
         First Num:<input type="number" name="num1"><br>
         OP: <input type="text" name="op"><br>
         Second Num:<input type="number" name="num2"><br>
         <input type="submit">
      </form>

      <?php
      
         // $num1 = $_POST["num1"];
         // $num2 = $_POST["num2"];
         // $op = $_POST["op"];

         // if($op == "+"){
         //    echo $num1 + $num2;
         // } elseif($op == "-") {
         //    echo $num1 - $num2;
         // } elseif($op == "*") {
         //    echo $num1 * $num2;
         // } elseif($op == "/") {
         //    echo $num1 / $num2;
         // } else {
         //    echo "Invalid operator";
         // }


      ?> -->

      <!-- Switch Statements -->

      <!-- <form action="site.php" method="post">
         What was your grade?
         <input type="text" name="grade">
         <input type="submit">
      </form>

      <?php
         // $grade = $_POST["grade"];
         // switch($grade){
         //    case "A":
         //       echo "You did amazing!";
         //       break;
         //    case "B":
         //       echo "You did pretty good";
         //       break;
         //    case "C":
         //       echo "you did okay";
         //    case
         // }
      
      ?> -->

      <!-- While Loops -->

      <!-- <?php
      
            // $index = 6;

            // do{
            //    echo "$index <br>";
            //    $index++;
            // }while($index <= 5)
            
            // while($index <= 5){
            //    echo "$index <br>";
            //    $index++;
            // }

      ?> -->

      <!-- For Loops -->

      <!-- <?php
      
               // // $index =1;
               // // while($index <= 5){
               // //    echo "$index <br>";
               // //    $index++;
               // // }
               // $luckyNumbers = array( 4, 8, 14, 16, 23, 42);
            
               // for($i = 0; $i < count($luckyNumbers); $i++){
               //    echo "$luckyNumbers[$i] <br>";
               // }
      
      ?> -->

      <!-- Including HTML -->

      <!-- <?php include "header.html"?>
      <p>Hello World</p>
      <?php include "footer.html"?> -->

   
      <!-- Include: PHP -->
<!-- 
      <?php 
      // $title = "My first post";
      // $author = "Mike";
      // $wordCount = 450;
      //    include "article-header.php"
      ?> -->

      <!-- Classes & Objects -->

      <!-- <?php
      //   class Book{
      //    var $title;
      //    var $author;
      //    var $pages;
      //   }

      //   $book1 = new Book;
      //   $book1 ->title = "Harry Potter";
      //   $book1 ->author = "JK Rowling";
      //   $book1->pages=400;

      //   $book2 = new Book;
      //   $book2 ->title = "Lord of the Rigns";
      //   $book2 ->author = "JRR Tolkein";
      //   $book2->pages=700;

      //   echo $book1->author;
      //   echo $book2->title;
      
      ?> -->

      <!-- Constructors -->

      <!-- <?php
      //   class Book{
      //    var $title;
      //    var $author;
      //    var $pages;

      //    function __construct($aTitle, $aAuthor, $aPages){
      //       $this->title = $aTitle;
      //       $this->author = $aAuthor;
      //       $this->pages = $aPages;

      //    }
      //   }

      //   $book1 = new Book("Harry Potter", "JK Rowling", 400 );

      //   $book2 = new Book("Lord of the Rigns", "Lord of the Rigns", 700 );

      //   echo $book1->title;
      //   echo $book2->title;


      //   echo $book1->author;
      //   echo $book2->title;
      
      ?> -->

      <!-- Object Functions -->

      <!-- <?php
      //   class Student {
      //    var $name;
      //    var $major;
      //    var $gpa;

      //    function __construct($name, $major, $gpa){
      //       $this->name = $name;
      //       $this->major = $major;
      //       $this->gpa - $gpa;
      //    }

      //    function hasHonors(){
      //       if($this->gpa >= 3.5){
      //          return "true";
      //       }
      //       return "false";
      //    }
      //   }

      //   $student1 = new Student("Jim", "Business", 3.8);
      //   $student2 = new Student("Pam", "Art", 3.6);

      //   echo $student1->hasHonors();
      //?>

      <?php
         class Movie{
            public $title;
            private $rating;

            function __construct($title, $rating){
               $this->title = $title;
               $this->rating = $rating;
            }

            function getRating() {
               return $this->rating;
            }
         }

         $avengers = new Movie("Avengers", "PG-13");

         echo $avengers->getRating;

      ?>

   //?>










</body>
</html>