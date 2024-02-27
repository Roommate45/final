<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>4</title>
</head>
<body>
    <style>  
     body, html {
    height: auto;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('bg00.jpg');
    background-size: cover;
     }
  .center-left {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .text-left {
    text-align: left;
    font-size: 25px;
  }


  
  .frame {
    border: 2px solid rgba(214, 214, 214, 0.055); /* ปรับสีและขนาดขอบตามต้องการ */
    padding: 20px; /* ปรับระยะห่างภายในกรอบตามต้องการ */
    background-color: rgba(223, 219, 219, 0.705); /* สีพื้นหลังของกรอบ */
    max-width: 1500px; /* ความกว้างสูงสุดของกรอบ */
    border-radius: 2%; 
  }
  .frame-image {
    display: block;
    margin: 0 auto 20px auto; /* จัดให้รูปอยู่กลางและมีระยะห่างด้านล่าง */
    align-items: center;

  }

</style>       


<html>
 <head>
  <meta charset="UTF-8">
  <title>แบบทดสอบ</title>
 </head>
 <body>
    <div class="frame">
    <img src="h2.png"width="1500" height="210" alt="คำอธิบายรูป" class="frame-image">
    



</body>
</html>
<body>
<div class="center-left">
    <div class="text-left"> 

<h1>วิชาการใช้เทคโนโลยีดิจิทัลเพื่อการศึกษา</h1> 
<?php

$score=0;

//ประมวลข้อ1
echo "ข้อ 1 น้ำหวานจะเคยช่วยเหลือเพื่อนและให้คำปรึกษาเพื่อนตลอดในยามที่เพื่อนมีปัญหาน้ำหวานมีความรับผิดชอบในด้านใด<br>";
echo $_POST["book1"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book1"]=="ความรับผิดชอบต่อครอบครัวและเพื่อน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ2
echo "ข้อ 2 อีเมลคืออะไร<br>";
echo $_POST["book2"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book2"]=="ส่งข้อความ แนบไฟล์ ภาพ ภาพเคลื่อนไหว")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ3
echo "ข้อ 3 บล็อกย่อมาจากอะไร<br>";
echo $_POST["book3"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book3"]=="ถูกทั้ง ก. และ ข.")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ4
echo "ข้อ 4 ผลของเทคโนโลยีสารสนเทศ ข้อใดมีผลต่อตัวนักเรียน<br>";
echo $_POST["book4"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book4"]=="ข้อ ก. และ ข. ถูกต้อง")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ5
echo "ข้อ 5 ข้อใดคือ การบริการไปรษณีย์อิเล็กทรอนิกส์<br>";
echo $_POST["book5"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book5"]=="อีเมล")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ6
echo "ข้อ 6 จากผลการสำรวจการใช้งานข้อมูลอินเทอร์เน็ตมีการใช้งานจากกสถานที่ใดมากที่สุด<br>";
echo $_POST["book6"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book6"]=="ที่บ้าน/ที่พักอาศัย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ7
echo "ข้อ 7 เราสามารถดาวน์โหลดแอพพลิเคชั่นต่าง ๆ บนระบบปฏิบัติการ Android ได้จากที่ใด<br>";
echo $_POST["book7"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book7"]=="Google Play Store")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ8
echo "ข้อ 8 ข้อใดหมายถึงเทคโนโลยีสื่อประสม<br>";
echo $_POST["book8"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book8"]=="การนำเสนอข้อมูลหลายรูปแบบพร้อมกัน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ9
echo "ข้อ 9 ไวรัสคอมพิวเตอร์ส่งผลกระทบอย่างไรต่อสังคม<br>";
echo $_POST["book9"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book9"]=="เกิดความเสียหายแก่ข้อมูล")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ10
echo "ข้อ 10 การศึกษาทางไกลผ่านดาวเทียมใช้ประโยชน์จากเทคโนโลยีสารสนเทศใดมากที่สุด<br>";
echo $_POST["book10"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book10"]=="การสื่อสารและเครือข่าย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

echo "<font color=blue><center>คะแนนรวม : </font>"."<font color=blue>$score</font>"."</center><br>";
?>

<img src="เฉลย2.png"width="500" height="auto" alt="คำอธิบายรูป" class="frame-image">

<head>
    <style>
    .btn-group {
    text-align: center; /* จัดให้ปุ่มอยู่ตรงกลาง */
  }

  .btn-group button {
    margin: 5px; /* ระยะห่างระหว่างปุ่ม */
    width: 170;
    padding: 10px 20px; /* ขนาดของปุ่ม */
    font-size: 16px; /* ขนาดตัวอักษร */
    border: none; /* ไม่มีเส้นขอบ */
    cursor: pointer;
    border:3px solid #fdfdfd;
    background-color: #6b27c4; /* สีพื้นหลัง */
    color: white; /* สีตัวอักษร */
    border-radius: 5px; /* กำหนดขอบมน */
    transition: background-color 0.3s; /* เพื่อทำให้มีการเปลี่ยนสีเบาะแส */
  }

  .btn-group button:hover {
    background-color: #8759dd; /* เมื่อโฮเวอร์เป็นสีนี้ */
  }
    </style>
    
</head>
<body>
        <div class="btn-group">
            <button onclick="window.location.href='index1.html'">กลับ</button>
            <button onclick="window.location.href='ตอนที่3.html'">บทที่3</button>
        </div>
    </div>
</html>
</form>

 </body>
</html>