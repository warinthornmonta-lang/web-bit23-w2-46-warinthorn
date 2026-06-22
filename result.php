<!DOCTYPE html>
<html lang="th">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ผลลัพธ์เมตร</title>


<style>


*{

    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI","Comic Sans MS",sans-serif;

}



body{

    background:linear-gradient(135deg,#d9c2ff,#f0e6ff);

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

}



/* กล่องหลัก */

.card{

    background:white;

    width:400px;

    padding:35px;

    border-radius:30px;

    text-align:center;

    border:4px solid #c084fc;

    box-shadow:0 10px 25px rgba(128,90,213,0.3);

}



/* emoji */

.emoji{

    font-size:45px;

    margin-bottom:10px;

}



/* หัวข้อ */

h2{

    color:#7e22ce;

    margin-bottom:25px;

}



/* กล่องผลลัพธ์ */

.result{

    background:#f5edff;

    padding:18px;

    margin:15px 0;

    border-radius:18px;

    color:#5b21b6;

    font-size:20px;

    font-weight:bold;

    border:2px solid #e9d5ff;

}



/* ปุ่มกลับ */

a{

    display:inline-block;

    margin-top:20px;

    text-decoration:none;

    background:#a855f7;

    color:white;

    padding:12px 30px;

    border-radius:25px;

    font-size:18px;

    transition:.3s;

}



a:hover{

    background:#9333ea;

    transform:scale(1.08);

}



</style>


</head>



<body>


<div class="card">


<div class="emoji">💜</div>


<h2>ผลการคำนวณ</h2>



<?php


$p_name = $_POST["p_name"];


$total = $p_name * 1000;


?>


<div class="result">

🚗 กิโลเมตร : 

<?php echo $p_name; ?>

กิโลเมตร

</div>



<div class="result">

📏 เมตร :

<?php echo $total; ?>

เมตร

</div>



<a href="index.php">

⬅ กลับหน้าแรก

</a>



</div>



</body>

</html>