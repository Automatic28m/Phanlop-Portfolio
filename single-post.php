<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATC-ITS</title>
    <link href = "css/single-post.css" rel = "stylesheet">
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
    <container>
        <div class="main">
            <div class="graphic">
                <div class="img">
                    <img src="img/computerfixing.jpg">
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.6082853433227!2d100.8943568150064!3d12.673669191051891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31028c0748c583db%3A0x8898217079e35d83!2zYWR2aWNlIOC4quC4seC4leC4q-C4teC4mg!5e0!3m2!1sen!2sth!4v1636035675605!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="name">
                <h2>ประดิษฐ์รับซ่อมคอม</h2>
            </div>
            <h3 class="description">รับซ่อมคอมพิวเตอร์ ปริ้นเตอร์ อุปกรณ์ไอที ด้วยช่างมืออาชีพ ราคาถูก</h3>
            <hr class="rounded">
            <div class="content">
                <div class="left-content">
                    <p class="hours">เวลาทำการ 8.00 น. - 20.00 น.</p>
                    <p class="address">ที่ตั้ง MVFW+FJ7 ตำบล สัตหีบ อำเภอสัตหีบ ชลบุรี 20180</p>
                    <p class="contact">ช่องทางการติดต่อ โทร +6633082349</p>
                    <p><a href="https://www.facebook.com/advicesattahip/" class="online-contact">Facebook.com</a></p>
                    <hr class="rounded">
                    <p class="most-student">รับนักศึกษาฝึกงานสูงสุด 3 คน</p>
                    <p class="level">ระดับชั้น ปวช.</p>
                    <p class="system">ระบบ ปกติ</p>
                    <p class="dep">แผนก เทคโนโลยีคอมพิวเตอร์</p>
                </div>
                <div class="right-content">
                    <div class="student">
                        <p>รายชื่อนักศึกษาที่เคยฝึกงาน</p>
                        <p>นายพัลลภ บุญเหลือ ปีการศึกษา 2564</p>
                        <p>นายมาร์ติน กองสังข์ ปีการศึกษา 2564</p>
                        <hr class="rounded">
                        <p>คำแนะนำจากรุ่นพี่</p>
                        <p>หากตั้งใจฝึกงานจะได้รับโบนัสเป็นพิเศษ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="minor">
            <div class="sub-province">
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">พัทยา</button></a>
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">บางละมุง</button></a>
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">ศรีราชา</button></a>
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">ชลบุรี</button></a>
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">บ้านฉาง</button></a>
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">ห้วยโป่ง</button></a>
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">มาบตาพุด</button></a>
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">มาบข่า</button></a>
                <button class="btn-sp" onclick="location.href='index.html'" type="btn" class="btn-sp">เนินพระ</button></a>
            </div>
        </div>
    </container>

    <?php
        include('footer-news.php');
        include('footer.php');
        include('backtotop.html');
    ?>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>