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
    <img src="h1.png"width="1500" height="210" alt="คำอธิบายรูป" class="frame-image">
    



</body>
</html>
<body>
<div class="center-left">
    <div class="text-left">     

<h1>วิชาการใช้เทคโนโลยีดิจิทัลเพื่อการศึกษา</h1> 
    <div style="text-align:left;">
    </div>


<?php

$score=0;

//ประมวลข้อ1
echo "ข้อ 1 ข้อใดเขียนคำว่า เทคโนโลยีสารสนเทศ ได้ถูกต้อง<br>";
echo $_POST["book1"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book1"]=="Information Technology")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ2
echo "ข้อ 2 ข้อใดคือคำที่ประกอบกันแล้วมีความหมายเหมือนกับคำว่า IT<br>";
echo $_POST["book2"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book2"]=="เทคโนโลยี สารสนเทศ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ3
echo "ข้อ 3 ข้อใดเป็นความหมายของเทคโนโลยีสารสนเทศที่ถูกต้องมากที่สุด<br>";
echo $_POST["book3"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book3"]=="การนำความรู้ทางด้านวิทยาศาสตร์มาประยุกต์ใช้เพื่อสร้างหรือจัดการกับสารสนเทศอย่างเป็นระบบ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ4
echo "ข้อ 4 ใครใดคือ พลเมืองดิจิทัล<br>";
echo $_POST["book4"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book4"]=="ซีมีความสามารถในการใช้เทคโนโลยี และสื่อดิจิทัลเป็นประจำได้อย่างปลอดภัย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ5
echo "ข้อ 5 เมื่อนักเรียนได้รับข้อความต่อไปนี้ในช่องทางแชท Facebook และ Line นักเรียนคิดว่าควรปฏิบัติตนอย่างไร <br>
'เดือนนี้ เป็นเดือนพิเศษ มี 5 ศุกร์ 5 เสาร์ 5 อาทิตย์ 888 ปีจะมีครั้ง เรียกว่าถุงเงิน ตามตำราฮวงจุ้ยส่งต่อ 5 คน จะโชคดี'<br>";
echo $_POST["book5"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book5"]=="ควรปรึกษาครูหรือผู้ปกครอง")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ6
echo "ข้อ 6 พลเมืองดิจิทัลจะต้องมีความรับผิดชอบด้านใดบ้าง<br>";
echo $_POST["book6"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book6"]=="ถูกทุกข้อ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ7
echo "ข้อ 7 ต้นกล้าปิดเครื่องคอมพิวเตอร์และถอดปลั๊กเมื่อใช้งานเสร็จในห้องสมุด ต้นกล้ามีความรับผิดชอบด้านใด<br>";
echo $_POST["book7"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book7"]=="ความรับผิดชอบต่อชุมชน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ8
echo "ข้อ 8 นักเรียนได้รับประโยชน์จากเทคโนโลยีสารสนเทศด้านใดมากที่สุด<br>";
echo $_POST["book8"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book8"]=="ค้นคว้าหาความรู้ได้สะดวกยิ่งขึ้น")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ9
echo "ข้อ 9 ข้อใดไม่ใช่การประมวลผลข้อมูล<br>";
echo $_POST["book9"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book9"]=="ปูสัมภาษณ์เพื่อน ๆ เรื่องการเดินทางมาโรงเรียน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ10
echo "ข้อ 10 ข้อใดแสดงความสัมพันธ์ระหว่างข้อมูลและสารสนเทศได้ถูกต้อง<br>";
echo $_POST["book10"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book10"]=="ข้อมูล ->การประมวลผล ->สารสนเทศ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

echo "<font color=blue><center>คะแนนรวม : </font>"."<font color=blue>$score</font>"."</center><br>";
?>

<img src="เฉลย1.png"width="500" height="auto" alt="คำอธิบายรูป" class="frame-image">

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
            <button onclick="window.location.href='ตอนที่2.html'">บทที่2</button>
        </div>
    </div>
</html>
</form>

 </body>
</html>