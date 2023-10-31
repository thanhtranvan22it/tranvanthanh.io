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
    if(!isset($_SESSION['name']))
    {
        $_SESSION['name'] = "hoainam";
        $_SESSION['age'] = "19";
    }
    ?>
    <?php 
    echo "Tên bạn là: ". $_SESSION['name']."<br/>";
    echo "Số tuổi của bạn: ".$_SESSION['age']."<br/>";
    ?>
    <a href="Bai10_text_session.php" >Click here!</a>
</body>
</html>