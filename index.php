<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> *{ margin: 0; padding: 0; box-sizing: border-box; font-family: "Comic Sans MS", "Segoe UI", sans-serif; } body{ background: linear-gradient(135deg, #ffd6e7, #ffeaf4); min-height: 100vh; display: flex; justify-content: center; align-items: center; } .container{ background: white; padding: 35px; width: 400px; border-radius: 25px; text-align: center; box-shadow: 0 8px 20px rgba(255, 105, 180, 0.25); border: 4px solid #ffc1da; } h1{ color: #ff4f9a; font-size: 24px; margin-bottom: 25px; } label{ display: block; margin-bottom: 10px; color: #ff69b4; font-size: 20px; font-weight: bold; } input[type="number"]{ width: 100%; padding: 12px; border: 2px solid #ffb6d5; border-radius: 15px; font-size: 18px; text-align: center; outline: none; margin-bottom: 20px; } input[type="number"]:focus{ border-color: #ff69b4; } input[type="submit"]{ background: #ff69b4; color: white; border: none; padding: 12px 30px; border-radius: 20px; font-size: 18px; cursor: pointer; transition: 0.3s; } input[type="submit"]:hover{ background: #ff4f9a; transform: scale(1.05); } .heart{ font-size: 30px; margin-bottom: 10px; } </style>
</head>
<body>
    
    <h1>งานที่ 2 วรินทร  BIT.2/3 เลขที่ 46 </h1>

    <!-- ราคาสินค้า = 20 -->
     <!-- จำนวนที่ซื้อ = 3 -->
    <!-- ราคาที่ต้องจ่าย = ราคาสินค้า * จำนวนที่ซื้อ -->
    <!-- output.     = input.   * input2 -->
    <!-- 60.         = 20.      * 3 -->


    <form action="result.php" method="post">
        <label for="">กิโลเมตร</label>
        <input type="number" name="p_name"> <br>

       

        <input type="submit" value="คำนวณ">
</form> 
</body>
</html>