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
    <img src="h3.png"width="1500" height="210" alt="คำอธิบายรูป" class="frame-image">
    
    </body>
</html>
<body>
<div class="center-left">
    <div class="text-left">
</style>          
<h1>วิชาการใช้เทคโนโลยีดิจิทัลเพื่อการศึกษา</h1> 
<?php

$score=0;

//ประมวลข้อ1
echo "ข้อ 1 ข้อใดกล่าวถึงผลกระทบจากการใช้เทคโนโลยีสารสนเทศได้ถูกต้อง  <br>";
echo $_POST["book1"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book1"]=="การใช้เทคโนโลยีสารสนเทศจะส่งผลกระทบทั้งทางด้านบวกและด้านลบ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ2
echo "ข้อ 2 เทคโนโลยีสารสนเทศช่วยเพิ่มประสิทธิภาพในการทำงานอย่างไร <br>";
echo $_POST["book2"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book2"]=="ช่วยให้ทำงานได้เร็วและถูกต้องมากขึ้น")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ3
echo "ข้อ 3 ยุทธศาสตร์ในการขับเคลื่อนนโยบายดิจิทัลเพื่อเศรษฐกิจและสังคม มีกี่ยุทธศาสตร์ <br>";
echo $_POST["book3"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book3"]=="5 ยุทธศาสตร์")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ4
echo "ข้อ 4 ข้อใดไม่ใช่ข้อดีของ เศรษฐกิจดิจิทัล  <br>";
echo $_POST["book4"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book4"]=="สินค้าบริการผิดกฎหมาย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ5
echo "ข้อ 5 ข้อใดไม่ใช้โปรแกรมที่เป็นภัยในการเข้าถึงระบบและข้อมูลคอมพิวเตอร์  <br>";
echo $_POST["book5"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book5"]=="ซอฟต์แวร์")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ6
echo "ข้อ 6 การประยุกต์ใช้เทคโนโลยีของนักเรียนคือข้อใด<br>";
echo $_POST["book6"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book6"]=="การใช้ e-learning")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ7
echo "ข้อ 7 ข้อใดคือนิยามความเป็นพลเมืองดิจิทัล<br>";
echo $_POST["book7"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book7"]=="ถูกทุกข้อ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ8
echo "ข้อ 8 แนวคิดเกี่ยวกับความเป็นพลเมืองสามารถแบ่งออกเป็นกี่แนวคิด<br>";
echo $_POST["book8"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book8"]=="3 แนวคิด")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ9
echo "ข้อ 9 การเป็นสมาชิกภายใต้กฎหมายของรัฐชาติที่ตนสังกัด จัดอยู่ในแนวคิดใด<br>";
echo $_POST["book9"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book9"]=="ความเป็นพลเมืองชาติตามขนบ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ10
echo "ข้อ 10 ผลกระทบทางบวกของเทคโนโลยีสารสนเทศข้อใดมีโอกาสเกิดขึ้นน้อยที่สุด<br>";
echo $_POST["book10"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book10"]=="มนุษย์มีคุณภาพสูงขึ้น")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

echo "<font color=blue><center>คะแนนรวม : </font>"."<font color=blue>$score</font>"."<br></center>";
?>

<img src="เฉลย3.png"width="500" height="auto" alt="คำอธิบายรูป" class="frame-image">

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
            <button onclick="window.location.href='ตอนที่4.html'">บทที่4</button>
        </div>
    </div>
</html>
</form>

 </body>
</html>