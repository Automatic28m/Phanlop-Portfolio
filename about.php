<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATC-ITS About Us</title>
    <link href = "css/about.css" rel = "stylesheet">
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
    <?php include ('navbar.php'); ?>
    <div class="section-header">
        <div class="grid">
            <div class="header">
                <h1>
                    เราคือใคร?
                </h1>
            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci tenetur quos dicta delectus, iure sunt sapiente quisquam, voluptas, doloremque et suscipit officia ullam nihil? Sed ea animi aut ullam quisquam, necessitatibus omnis incidunt. Doloremque, adipisci officiis error minima rem laborum dolor ipsa maiores nobis sed, maxime natus provident, odit accusamus.</p>
            </div>
        </div>
    </div>
    <div class="section-founder">
        <header>
            <h2>
                ผู้ก่อตั้ง
            </h2>
        </header>
        <div class="founder-grid">
            <div class="founder">
                <img src="img/phanlop.jpg" alt="">
                <h2>พัลลภ บุญเหลือ</h2>
                <p>founder and Chief Executive Officer</p>
            </div>
            <div class="founder">
                <img src="img/martin.jpg" alt="">
                <h2>มาร์ติน กองสังข์</h2>
                <p>มือขวา CEO</p>
            </div>
        </div>
    </div>
    <div class="section-cause">
        <div class="grid">
            <div class="header">
                <h1>
                    ที่มาของโปรเจคนี้
                </h1>
            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci tenetur quos dicta delectus, iure sunt sapiente quisquam, voluptas, doloremque et suscipit officia ullam nihil? Sed ea animi aut ullam quisquam, necessitatibus omnis incidunt. Doloremque, adipisci officiis error minima rem laborum dolor ipsa maiores nobis sed, maxime natus provident, odit accusamus.</p>
            </div>
        </div>
    </div>
    <div class="section-record">
        <div class="record-grid">
            <div class="record">
                <h2>เว็บไซต์เรามีที่ฝึกงานทั้งหมด</h2>
                <div class="number">
                    <h1>285</h1>&nbsp;&nbsp;<h1>แห่ง</h1>
                </div>
                <p>สถานที่ฝึกงานทั้งหมดในจังหวัดชลบุรีและระยอง</p>
            </div>
            <div class="record-img">
                <img src="img/office1.jpg" alt="office">
            </div>
        </div>
    </div>

    <?php 
        include('footer-news.php');
        include('footer.php');
        include('backtotop.html');
    ?>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>