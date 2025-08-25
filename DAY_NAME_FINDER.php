<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label> Choose a date : </label>
        <input type="date" name="date" required>
        <button type="submit">Find Day</button>
    </form>

    <?php
        
       if(isset($_POST['date'])){
            $chosenName = $_POST['date'];

            $dayName = date('l', strtotime($chosenName));

            echo "<p>the day of this date ($chosenName) was $dayName</p>";
       }

    ?>

</body>
</html>