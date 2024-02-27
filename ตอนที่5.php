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
    <img src="h5.png"width="1500" height="210" alt="คำอธิบายรูป" class="frame-image">
    



</body>
</html>
<body>
<div class="center-left">
    <div class="text-left">
<h1>วิชาการใช้เทคโนโลยีดิจิทัลเพื่อการศึกษา</h1> 
<?php

$score=0;

//ประมวลข้อ1
echo "ข้อ 1 บุคลากรสารสนเทศทางการศึกษากลุ่มใดควรมีความรู้เข้าใจระบบสารสนเทศปฏิบัติการสำนักงาน Office Information System(OIS) มากที่สุด<br>";
echo $_POST["book1"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book1"]=="ครู หรือเจ้าหน้าที่")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ2
echo "ข้อ 2 บทบาทของครูต่อนโยบายด้านเทคโนโลยีสารสนเทศและการสื่อสารเพื่อการศึกษา<br>";
echo $_POST["book2"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book2"]=="พัฒนาบุคลากร")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ3
echo "ข้อ 3 ทำไมต้องนำนวัตกรรมการศึกษามาใช้แทนวิธีการเดิม<br>";
echo $_POST["book3"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book3"]=="เพื่อให้มีประสิทธิภาพมากขึ้น")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ4
echo "ข้อ 4 ผลกระทบทางด้านลบจากการใช้เทคโนโลยีสารสนเทศที่มีต่อสังคมส่งผลเสียอย่างมากในด้านใด<br>";
echo $_POST["book4"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book4"]=="ค่านิยมและวัฒนธรรม")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ5
echo "ข้อ 5 ข้อใดกล่าวถึงการใช้เทคโนโลยีสารสนเทศเพื่อการสื่อสารและเครือข่ายได้ถูกต้อง<br>";
echo $_POST["book5"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book5"]=="เป็นการส่งข้อมูลจากที่หนึ่งไปยังที่หนึ่ง")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ6
echo "ข้อ 6 เทคโนโลยีสารสนเทศส่งผลให้เกิดความเสมอภาคในสังคม    <br>";
echo $_POST["book6"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book6"]=="ช่วยกระจายโอกาส")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ7
echo "ข้อ 7 ระบบอินเทอร์เน็ตพัฒนามาจากหน่วยงานใด <br>";
echo $_POST["book7"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book7"]=="การทหาร")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ8
echo "ข้อ 8 ข้อใดไม่ใช่ระบบปฏิบัติการบนสมาร์ทโฟน<br>";
echo $_POST["book8"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book8"]=="Windows")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ9
echo "ข้อ 9 การสมัคร gmail ใหม่ ต้องคลิกที่ปุ่มใด<br>";
echo $_POST["book9"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book9"]=="สร้างบัญชี")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ10
echo "ข้อ 10 ข้อใดคือผลกระทบทางด้านลบที่เกิดจากการใช้เทคโนโลยีสารสนเทศด้านการเรียนการสอน   <br>";
echo $_POST["book10"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book10"]=="เครื่องมือที่ใช้ต้องมีความทันสมัย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

echo "<font color=blue><center>คะแนนรวม : </font>"."<font color=blue>$score</font>"."<br></center>";
?>
<img src="เฉลย5.png"width="500" height="auto" alt="คำอธิบายรูป" class="frame-image">

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
        </div>
    </div>
</html>
</form>

 </body>
</html>