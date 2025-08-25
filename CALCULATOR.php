<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
</head>
<body>
    <form action="" method="POST">
        <h2>CALCULATOR</h2>
        <input type="number" name="num1" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">Calcul</button>
    </form>

    <?php
        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])){
            $num1= $_POST['num1'];
            $num2= $_POST['num2'];
            $operation= $_POST['operation'];

            if($operation === "add") {
                $result = $num1 + $num2;
                echo"The Result is : " . $result;
            }elseif($operation === "sub") {
                $result = $num1 - $num2;
                echo"The Result is : " . $result;
            }elseif($operation === "mul") {
                $result = $num1 * $num2;
                echo"The Result is : " . $result;
            }elseif($operation === "div"){
                if($num2 == 0){
                    echo "We Cant Devide an number by zero";
                }else{
                    $result = $num1 / $num2;
                    echo"The Result Is : " . $result;
                }
            }

        }
    ?>
</body>
</html>