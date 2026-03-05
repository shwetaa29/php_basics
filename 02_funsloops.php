<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<style>

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    .container{
        max-width: 80%;
        margin: auto;
        padding: 34px;
        background-color: grey;
    }
</style>

    
<body>

    <div class="container">
        <h1>Lets learn about PHP</h1>
   <p>Your party status is here</p>
    
    <?php


    $age=34;
    if($age>=18){
        echo "You can go to party";
    }
    else{
        echo "You cannot go to party";
    }

    echo "<br>";



    $languages= array("Python","C","CPP");
    // echo $languages[0];
    echo "<br>";

    $a=0;
    while($a <=10){
    echo "<br>The value of a is ";
    echo $a;
    $a++;
    }

    //while loop
    $a=0;
    while($a < count($languages)){
    echo "<br>The value of languages is ";
    echo $languages[$a];
    $a++;
    }


     // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    
    //for each loop
    foreach($languages as $value){
        echo "The value is ";
        echo $value;
        echo "<br>";
    }




    //functions
    function print5(){
        echo "5";
    }

    print5();

    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }
    print_number(60);
    print_number(145);
    print_number(250);



    //strings
    $str= "This is anything";
    echo $str;
    $l=strlen($str);
    echo "<br>The length of string is ".$l;

    echo("<br> Num of words is ".str_word_count($str));

?>

    </div>
    
</body>
</html>