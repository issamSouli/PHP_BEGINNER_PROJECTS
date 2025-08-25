<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Checker</title>
</head>
<body>

    
    <form action="" method="POST">
        <h2>Age Checker!</h2>
        <label>Enter Your Age</label>
        <input type="number" name="age" min="1" max="120" required>
        <button type="submit">Submit</button>
    </form>

    <?php
        $ageSubmitted = "";
        
        if(isset($_POST['age'])){
            $ageSubmitted = trim($_POST['age']);

            if(empty($ageSubmitted)) {
                $message = "Please Enter Your Age";
            }elseif($ageSubmitted < 1 || $ageSubmitted > 120){
                $message = "You Have To Enter A valid Age Between 1 and 120";
            }elseif($ageSubmitted < 18) {
                $message = "MINOR";
            }else{
                $message = "ADULT"; 
            }
            echo "<p>$message</p>";
        }


    ?>
</body>
</html>