<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvenOrOdd</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Even or Odd Number Checker</h2>
        <label>Check if it's Even Or Odd :</label>
        <input type="number" name="num" required step="1">
        <button>Check</button>
    </form>

    <?php
        if(isset($_POST['num'])){
            $num = (int) $_POST['num'];
            if($num % 2 == 0){
                echo "<p>$num is even</p>";
            }else{
                echo "<p>$num is odd</p>";
            }
        }
    ?>
</body>
</html>