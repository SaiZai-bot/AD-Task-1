<!-- Declarations
Conditional
Looping -->


<?php
    $Addition = [
        ["2 + 3", 2 + 3],
        ["5 + 10",  5 + 10],
        ["4 + 7", 4 + 7]
    ];
    $Subtraction = [
        ["5 - 2", 5 - 2],
        ["6 - 5", 6 - 5],
        ["4 - 2", 4 -2]
    ];
    $Multiplication = [
        ["5 x 2", 5 * 2],
        ["9 x 3", 9 * 3],
        ["6 x 4", 6 * 4]
    ];
    $Division = [
        ["10 / 2", 10 / 2],
        ["6 / 3", 6 / 3],
        ["16 / 4", 16 / 4]
    ];

    $Greaterthan = [
        [9,3],
        [5,6],
        [10,6]
    ];

    $Equalto = [
        [8,8],
        [5,5],
        [4,3]
    ];

    $Lessthan = [
        [2,4],
        [10,8],
        [4,6]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Lesson</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <?php
        echo "<div class='group operator'>";
        echo "<div class='container'>";
        echo "<div class='title'> ➕ Addition</div>";
        for($i = 0; $i < count($Addition); $i++){
            echo "<p>" . $Addition[$i][0] . " = " . $Addition[$i][1] . "</p>";
        }
        echo "</div>";
        
        echo "<div class='container'>";
        echo "<div class='title'> ➖ Subtraction</div>";
        for($i = 0; $i < count($Subtraction); $i++){
            echo "<p>".$Subtraction[$i][0] . " = " . $Subtraction[$i][1] . "</p>";
        }
        echo "</div>";

        echo "<div class ='container'>";
        echo "<div class  ='title'> ✖️ Multiplication</div>";
        for($i = 0; $i < count($Multiplication); $i++){
            echo "<p>".$Multiplication[$i][0] . " = " . $Multiplication[$i][1] . "</p>";
        }
        echo "</div>";

        echo "<div class ='container'>";
        echo "<div class ='title'> ➗ Division</div>";
        for($i = 0; $i < count($Division); $i++){
            echo "<p>" . $Division[$i][0] . " = " . $Division[$i][1] . "</p>";
        }
        echo "</div>";

        echo "</div>";

        echo "<div class='group comparison'>";
        echo "<div class ='container'>";
        echo "<div class ='title'> 🔼 Greater Than</div>";
        for($i = 0; $i < count($Greaterthan); $i++){
            if($Greaterthan[$i][0] > $Greaterthan[$i][1]) {
                echo "<p>". $Greaterthan[$i][0] . " is Greater than " . $Greaterthan[$i][1] . "</p>";
            }
            else {
                echo "<p>".$Greaterthan[$i][0] . " is Less than " . $Greaterthan[$i][1] . "</p>";
            }
        }
        echo "</div>";


        echo "<div class='container'>";
        echo "<div class ='title'> 🟰 Equal To </div>";
        for($i = 0; $i < count($Equalto); $i++){
            if($Equalto[$i][0] == $Equalto[$i][1]) {
                echo "<p>" . $Equalto[$i][0] . " is Equal to " . $Equalto[$i][1] . "</p>";
            }
            else {
                echo "<p>".$Equalto[$i][0] . " is not Equal to " . $Equalto[$i][1] . "</p>";
            }
        }
        echo "</div>";


        echo "<div class='container'>";
        echo "<div class = 'title'> 🔽 Less Than</div>";
        for($i = 0; $i < count($Lessthan); $i++){
            if($Lessthan[$i][0] < $Lessthan[$i][1]) {
                echo "<p>".$Lessthan[$i][0] . " is Less than " . $Lessthan[$i][1] . "</p>";
            }
            else {
                echo "<p>". $Lessthan[$i][0] . " is not Less than " . $Lessthan[$i][1] . "</p>";
            }
        }

        echo "</div>";

        echo "</div>";
    ?>
    <a href="index.php">
        <button>Go Back</button>
    </a>
</body>
</html>