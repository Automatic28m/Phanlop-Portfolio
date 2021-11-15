<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATC-ITS</title>
    <link href = "css/style.css" rel = "stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;500;800&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <?php include('navbar.php'); ?>

    <container class="intro">
        <div class = "content" >
            <h1>เลือกการฝึกงานที่ใช่</h1>
            <p>เว็บไซต์นี้จะช่วยในการตัดสินใจเลือกสถานประกอบการที่เหมาะกับนักศึกษา จากนักศึกษาที่เคยฝึกประสบการณ์จริงจึงมีความเข้าใจนักศึกษาฝึกงานเป็นอย่างดี พร้อมทั้งให้ข้อมูลต่างๆตั้งแต่ก่อนออกฝึกงาน ระหว่างฝึกงาน ไปจนถึงจบฝึกงาน เพราะทุกประสบการณ์ที่ได้รับจากการฝึกงานล้วนมีความสำคัญ</p>
            <button onclick="location.href='#its_process'" class = "intro_btn">เรียนรู้ก่อนเริ่มฝึกงาน</button>
            <button class = "intro_btn">ค้นหาสถานประกอบการ</button>
        </div>
        <div class="img">
            <img src = "img/img.jpg">
        </div>
        <div class = "content" >
            <h1>จากรุ่นพี่สู่รุ่นน้อง</h1>
            <p>นำสถานประกอบการที่นักศึกษารุ่นพี่เคยฝึกงานมาก่อน มาแนะนำต่อนักศึกษารุ่นน้อง</p>
        </div>
        <div class="img">
            <img src = "img/img2.jpg">
        </div>
    </container>
    <div class="section-news">
        <div class="news-grid"">
            <div class="news" style="background-image: url(img/manatthedesk.jpg);">
                <h1>ข่าวสารประชาสัมพันธ์</h1>
                <p>กดหนดการนิเทศนักศึกษาก่อนออกฝึกงาน</p>
                <button href="#" class = "btn">เรียนรู้เพิ่มเติม</button>
            </div>
        </div>
    </div>
    <!--ขั้นตอนการยื่นคำร้องขอออกฝึกงาน-->
    <div class="section-instruction" id="instruction">
        <div class="instruction-grid">
            <div class="instruction" style="background-image: url(img/meetingroom.jpg)"> 
                <h1>เรียนรู้แนวทางปฏิบัติ<br>ก่อนเลือกสถานที่ฝึกงาน</h1>
                <p>เรียนรู้ขั้นตอน และรับฟังคำแนะนำจากวิดีโอที่เรามีให้</p>
                <button href="#" class = "btn">เรียนรู้เพิ่มเติม</button>
            </div>
        </div>
    </div>
    <!--เลือกสายงาน-->
    <container class="dep" >
        <div>
            <h2>ค้นหาตามสายงาน</h2>
            <p>เลือกแสดงสถานที่ที่สอดคล้องกับสายอาชีพของคุณ</p>
        </div>
        <div class="department">
            <a href="#">
                <img src="img/code.jpg">
                <h1>เทคโนโลยีสารสนเทศ</h1>
            </a>
            <a href="#">
                <img src="img/circuit_board.jpg">
                <h1 href="#">เทคนิคคอมพิวเตอร์</h1>
            </a>
        </div>
    </container>
    <!--สำรวจพื้นที่ใกล้เคียง-->
    <container class="explore">
        <div class="header">
            <h2>
                สำรวจพื้นที่ใกล้เคียง
            </h2>
            <p>
                เลือกแสดงสถานที่ตามอำเภอต่างๆ
            </p>
        </div>
        <div class="sub_province">
            <a href="sattahip.html">
                <img src="img/sattahip.jpg">
                <p>อำเภอ สัตหีบ</p>
            </a>
            <a href="#">
                <img src="img/pattaya.jpg">
                <p>เมือง พัทยา</p>
            </a>
            <a href="#">
                <img src="img/banglamung.jpg">
                <p>อำเภอ บางละมุง</p>
            </a>
            <a href="#">
                <img src="img/laem_chabange.jpg">
                <p>เมือง ศรีราชา</p>
            </a>
            <a href="#">
                <img src="img/sattahip.jpg">
                <p>เมือง ชลบุรี</p>
            </a>
            <a href="#">
                <img src="img/sattahip.jpg">
                <p>อำเภอ บ้านฉาง</p>
            </a>
            <a href="#">
                <img src="img/sattahip.jpg">
                <p>อำเภอ ห้วยโป่ง</p>
            </a>
            <a href="#">
                <img src="img/sattahip.jpg">
                <p>อำเภอ มาบตาพุด</p>
            </a>
            <a href="#">
                <img src="img/sattahip.jpg">
                <p>อำเภอ มาบข่า</p>
            </a>
            <a href="#">
                <img src="img/sattahip.jpg">
                <p>อำเภอ เนินพระ</p>
            </a>
            
        </div>
    </container>
    <?php 
        include('footer-news.php');
        include('footer.php');
        include('backtotop.html');
    ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>