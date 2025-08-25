<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h3>BMI_CALCULATOR.</h3>
        <div>
            <label>Your Weight in kg :</label>
            <input type="number" name="weight" placeholder ="Weight : " required>
        </div><br>

        <div>
            <label>Your Height in m :</label>
            <input type="number" name="height" placeholder ="height : " required step=0.01>
        </div><br>
        <button type="submit">Result</button>
    </form>

    <?php
        if(isset($_POST['weight']) && isset($_POST['height'])){

            $weight = (float) $_POST['weight'];
            $height = (float) $_POST['height'];

            if($height <= 0 ){
                echo "<p>Please Enter a Height Bigger Than 0.</p>";
                return;
            }else{
                $operation = $weight / ($height * $height);
            }
            

            if($operation < 18.5) {
                echo "<p>You Are Underweight</p>";
            }elseif($operation > 18.5 && $operation < 24.9 ){
                echo "<p>You Have An Normal Weight.</p>";
            }elseif($operation > 25 && $operation <29.99){
                echo "<p>You Are Overweight</p>";
            }elseif($operation >= 30) {
                echo "<p>You Are Obese</p>";
            }
        }
    ?>
</body>
</html>