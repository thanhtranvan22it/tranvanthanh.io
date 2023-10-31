<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ass3</title>
</head>
<body>
    <?php 
    session_start();
    unset($_SESSION['name']);
    ?>
    <?php 
    echo "Chào bạn ".$_SESSION['name'].", bạn có tuổi là: ".$_SESSION['age'];
    ?>
</body>
</html>