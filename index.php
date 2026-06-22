<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>คำนวณระยะทาง</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI", "Comic Sans MS", sans-serif;
}


body{

    background: linear-gradient(135deg,#ffd6e7,#fff0f7);

    min-height:100vh;

    display:flex;

    flex-direction:column;

    justify-content:center;

    align-items:center;

}


/* หัวข้อ */
.title{

    color:#ff4f9a;

    font-size:26px;

    margin-bottom:25px;

    text-align:center;

    font-weight:bold;

}



/* กล่องฟอร์ม */

.container{

    background:white;

    width:380px;

    padding:35px;

    border-radius:30px;

    text-align:center;

    box-shadow:0 10px 25px rgba(255,105,180,0.3);

    border:4px solid #ffc1da;

}



.heart{

    font-size:40px;

    margin-bottom:10px;

}



/* หัวข้อในฟอร์ม */

h2{

    color:#ff69b4;

    margin-bottom:25px;

}



/* label */

label{

    display:block;

    color:#ff4f9a;

    font-size:20px;

    font-weight:bold;

    margin-bottom:12px;

}



/* ช่องกรอก */

input[type="number"]{

    width:100%;

    padding:12px;

    border-radius:15px;

    border:2px solid #ffb6d5;

    font-size:18px;

    text-align:center;

    outline:none;

    margin-bottom:25px;

}



input[type="number"]:focus{

    border-color:#ff69b4;

}



/* ปุ่ม */

input[type="submit"]{

    background:#ff69b4;

    color:white;

    border:none;

    padding:12px 35px;

    border-radius:25px;

    font-size:18px;

    cursor:pointer;

    transition:.3s;

}



input[type="submit"]:hover{

    background:#ff4f9a;

    transform:scale(1.08);

}


</style>

</head>


<body>


<div class="title">

งานที่ 2 วรินทร BIT.2/3 เลขที่ 46

</div>



<div class="container">


<div class="heart">💗</div>


<h2>คำนวณกิโลเมตร</h2>



<form action="result.php" method="post">


<label>กรอกจำนวนกิโลเมตร</label>


<input 
type="number" 
name="p_km"
placeholder="ใส่จำนวนกิโลเมตร"
required>


<br>


<input type="submit" value="คำนวณ">


</form>


</div>



</body>
</html>