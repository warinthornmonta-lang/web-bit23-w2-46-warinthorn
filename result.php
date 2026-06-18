<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> *{ margin: 0; padding: 0; box-sizing: border-box; font-family: "Comic Sans MS", "Segoe UI", sans-serif; } body{ background: linear-gradient(135deg, #d9c2ff, #f0e6ff); min-height: 100vh; display: flex; justify-content: center; align-items: center; } .card{ background: white; width: 400px; padding: 30px; border-radius: 25px; text-align: center; border: 4px solid #c084fc; box-shadow: 0 8px 20px rgba(128, 90, 213, 0.25); } h2{ color: #7e22ce; margin-bottom: 20px; } .result{ background: #f5edff; margin: 15px 0; padding: 15px; border-radius: 15px; font-size: 20px; color: #5b21b6; font-weight: bold; } a{ display: inline-block; margin-top: 20px; text-decoration: none; background: #a855f7; color: white; padding: 12px 25px; border-radius: 20px; transition: 0.3s; } a:hover{ background: #9333ea; transform: scale(1.05); } .emoji{ font-size: 30px; margin-bottom: 10px; } </style>
</head>
<body>
    <?php

    $p_name = $_POST["p_name"];
    

    echo "กิโลเมตร : " . $p_name . "<br>";
    

    $total =  $p_name *  1000;
    echo "เมตร : " .  $total . "<br>";
    ?>

    <a href="index.php">กลับหน้าแรก </a>

</body>
</html>