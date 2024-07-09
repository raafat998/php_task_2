<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: rgba(0,0,0,0.8);
            padding: 50px;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .container{
            margin-top: 20px;

        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check if a Number is Prime</h1>
                <form action="index-3.php" method="post">
                    <div class="form-group">
                        <label for="userInput">Enter a Number</label>
                        <input type="text" class="form-control" id="userInput" name="userInput" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userInput'])) {
                    $num = $_POST['userInput'];
                    function is_prime($num) {
                        if ($num <= 1) {
                            return false;
                        }
                        for ($i = 2; $i <= sqrt($num); $i++) {
                            if ($num % $i == 0) {
                                return false;
                            }
                        }
                        return true;
                    }

                    if (is_prime($num)) {
                        echo "$num is a prime number";
                    } else {
                        echo "$num is not a prime number";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Reverse a String</h1>
                <form action="index-3.php" method="post">
                    <div class="form-group">
                        <label for="userInputQ2">Enter a String</label>
                        <input type="text" class="form-control" id="userInputQ2" name="userInputQ2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userInputQ2'])) {
                    $string = $_POST['userInputQ2'];
                    echo strrev($string);
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check if String is Lowercase</h1>
                <form action="index-3.php" method="post">
                    <div class="form-group">
                        <label for="userInputQ3">Enter a String</label>
                        <input type="text" class="form-control" id="userInputQ3" name="userInputQ3" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userInputQ3'])) {
                    $string = $_POST['userInputQ3'];
                    if ($string === strtolower($string)) {
                        echo "Your String is Ok";
                    } else {
                        echo "Your String is not all lowercase";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Swap Variables</h1>
                <form action="index-3.php" method="post">
                    <div class="form-group">
                        <label for="userInputX">Enter value for x</label>
                        <input type="text" class="form-control" id="userInputX" name="userInputX" required>
                    </div>
                    <div class="form-group">
                        <label for="userInputY">Enter value for y</label>
                        <input type="text" class="form-control" id="userInputY" name="userInputY" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userInputX']) && isset($_POST['userInputY'])) {
                    $x = $_POST['userInputX'];
                    $y = $_POST['userInputY'];
                    list($x, $y) = array($y, $x);
                    echo "x=$x, y=$y";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check if Number is Armstrong</h1>
                <form action="index-3.php" method="post">
                    <div class="form-group">
                        <label for="userInputQ6">Enter a Number</label>
                        <input type="text" class="form-control" id="userInputQ6" name="userInputQ6" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userInputQ6'])) {
                    $num = $_POST['userInputQ6'];
                    function is_armstrong($num) {
                        $sum = 0;
                        $temp = $num;
                        while ($temp != 0) {
                            $remainder = $temp % 10;
                            $sum += pow($remainder, 3);
                            $temp = (int)$temp / 10;
                        }
                        return $sum == $num;
                    }

                    if (is_armstrong($num)) {
                        echo "$num is an Armstrong number";
                    } else {
                        echo "$num is not an Armstrong number";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check if String is Palindrome</h1>
                <form action="index-3.php" method="post">
                    <div class="form-group">
                        <label for="userInputQ7">Enter a String</label>
                        <input type="text" class="form-control" id="userInputQ7" name="userInputQ7" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userInputQ7'])) {
                    $string = $_POST['userInputQ7'];
                    $reversed = strrev($string);
                    if ($string === $reversed) {
                        echo "Yes, it is a palindrome";
                    } else {
                        echo "No, it is not a palindrome";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Remove Duplicates from Array</h1>
                <form action="index-3.php" method="post">
                    <div class="form-group">
                        <label for="userInputQ8">Enter a Comma-separated List</label>
                        <input type="text" class="form-control" id="userInputQ8" name="userInputQ8" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userInputQ8'])) {
                    $input = $_POST['userInputQ8'];
                    $array = explode(",", $input);
                    $unique_array = array_unique($array);
                    echo implode(",", $unique_array);
                }
                ?>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    $output = '';
                    for ($i = 1; $i <= 10; $i++) {
                        $output .= $i;
                        if ($i < 10) {
                            $output .= '-';
                        }
                    }
                    echo $output;
                ?>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------------------->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    $total = 0;
                    for ($i = 0; $i <= 30; $i++) {
                       
                        $total += $i;
                    }
                    echo " total is  : " . htmlspecialchars($total );
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    $letters = range('A', 'E');
                    for ($i = 0; $i < 5; $i++) {

                        for ($j = 0; $j < 5 - $i - 1; $j++) {
                            echo $letters[0] . ' ';
                        }

                        for ($j = 0; $j < $i + 1; $j++) {
                            echo $letters[$i] . ' ';
                        }
                        echo '<br>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= 5 - $i; $j++) {
                            echo '1 ';
                        }
                        for ($j = 1; $j <= $i; $j++) {
                            echo $i . ' ';
                        }
                        echo '<br>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= 5; $j++) {
                            if ($i == $j) {
                                echo $i . ' ';
                            } else {
                                echo '0 ';
                            }
                        }
                        echo '<br>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    $number = 5;
                    $factorial = 1;
                    for ($i = 1; $i <= $number; $i++) {
                        $factorial *= $i;
                    }
                    echo $factorial;
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    $n = 10;
                    $a = 0;
                    $b = 1;
                    echo $a . ', ' . $b;
                    for ($i = 2; $i < $n; $i++) {
                        $c = $a + $b;
                        echo ', ' . $c;
                        $a = $b;
                        $b = $c;
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    $text = "Orange Coding Academy";
                    $count = substr_count($text, 'c');
                    echo $count;
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <table border="1" cellpadding="3px" cellspacing="0px">
                    <?php
                        for ($i = 1; $i <= 6; $i++) {
                            echo '<tr>';
                            for ($j = 1; $j <= 5; $j++) {
                                echo '<td>' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
                            }
                            echo '</tr>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    for ($i = 1; $i <= 50; $i++) {
                        if ($i % 3 == 0 && $i % 5 == 0) {
                            echo 'FizzBuzz ';
                        } elseif ($i % 3 == 0) {
                            echo 'Fizz ';
                        } elseif ($i % 5 == 0) {
                            echo 'Buzz ';
                        } else {
                            echo $i . ' ';
                        }
                        echo "<br>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <?php
                    $n = 5;
                    $num = 1;
                    for ($i = 1; $i <= $n; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo $num . ' ';
                            $num++;
                        }
                        echo '<br>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
            <?php 



$letters = range('A', 'E'); 
$maxRows = 5; 

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;A <br>";
for ($i = 2; $i <= $maxRows; $i++) {

    for ($j = $maxRows - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }

    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }
    echo "<br>";
}

for ($i = $maxRows - 1; $i > 1; $i--) {

    for ($j = $maxRows - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }

    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }
    echo "<br>";
}

?>


            </div>
        </div>
    </div>
</div>


    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>