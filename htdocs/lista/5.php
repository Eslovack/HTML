<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">

    <label for="inputa">A: </label>
    <input id="inputa" name="a" type="number">

    <label for="inputb">B:</label>
    <input id="inputb" name="b" type="number">

    <input type="submit" value="Somna">
</form>
    <?php


            $a=$_REQUEST["a"];
            $b=$_REQUEST["b"];
    ?>
        
        <p><?php echo rand ($a,$b);      ?>  </p>

</body>
</html>