<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIP_CALCULATOR</title>
</head>
<body>
    <h2>TIP_CALCULATOR</h2>
    <form action="" method="POST">
        <label> Bill(MAD): </label>
        <input type="number" name="bill" min="1" max="10000" required step="0.01">
        <label>Tip % :</label> 
        <input type="number" name="percentage" min="0" max="100" step ="1" required>
        <label> People : </label>
        <input type="number" name="people" min="1" max="100" required step="1">
        <button type="submit">Calculate</button>
    </form>

    <?php 
        if(isset($_POST['bill']) && isset($_POST['percentage']) && isset($_POST['people'])) {
            $bill = (float)$_POST['bill'];
            $percentage = (float)$_POST['percentage'];
            $people = (int)$_POST['people'];

            if($bill < 0 || $percentage < 0 || $people < 0){
                echo "Please Enter a positive value";
                return;
            }

            $totalTip = $bill * ($percentage / 100);

            $tipPerPerson = ($bill * ($percentage / 100)) / $people;


            echo "<p>Your Total Tip Is : $totalTip MAD</p>"; 
            echo "<p>The Tip  For Everyone is $tipPerPerson</p>";
        }
    ?>
</body>
</html>