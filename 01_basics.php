<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website

        <?php 
            echo "<br>";
            echo "Hello World";
            echo "<br>";

            $variable1 = 652;
            $variable2 = 3;
            echo "<br>";

            echo $variable1;
            echo "<br>";

            echo $variable2;

            echo "<br>";

            echo $variable1 + $variable2;


            // Calculator
            echo "<br>";
            echo "The value of varible1 + variable2 is ";
            echo $variable1 + $variable2;
            echo "<br>";
            echo "The value of varible1 - variable2 is ";
            echo $variable1 - $variable2;
            echo "<br>";
            echo "The value of varible1 * variable2 is ";
            echo $variable1 * $variable2;
            echo "<br>";
            echo "The value of varible1 / variable2 is ";
            echo $variable1 / $variable2;
            echo "<br>";


            echo "Value of 1==4 is ";
            echo var_dump(1==4);


            // Increment/Decrement Operators 
                // echo $variable1++;
                // echo $variable1--;
                // echo ++$variable1;
                echo --$variable1;
                echo "<br>";
                echo $variable1;


            echo "<br>Data types <br>";
                $var = "This is a string";
                echo var_dump($var);
                echo "<br>";

                $var = 67;
                echo var_dump($var);
                echo "<br>";

                $var = 67.1;
                echo var_dump($var);
                echo "<br>";

                $var = true;
                echo var_dump($var);
                echo "<br>";
                echo PI3;

            
        
        ?>
    </div>
</body>
</html>