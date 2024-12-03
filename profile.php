<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="H.css"> -->
    <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif
    }

    .w3-third img {
        margin-bottom: -6px;
        opacity: 0.8;
        cursor: pointer
    }

    .w3-third img:hover {
        opacity: 1
    }
    </style>
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-DarkViolet w3-collapse w3-top w3-center"
        style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
        <h3 class="w3-padding-64 w3-center"><b>Here<br>Housekeeper</b></h3>



        <a href="javascript:void(0)" onclick="w3_close()"
            class="w3-bar-item w3-button w3-padding w3-hide-large">บริการ</a>

       
        <button type="button" class="btn btn-secondary">Log-in </button>
        <button type="button" class="btn btn-dark">log-out</button>
        <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button">Profile</a>
        <a href="H.php" onclick="w3_close()" class="w3-bar-item w3-button">Pack</a>
        <a href="order.php" onclick="w3_close()" class="w3-bar-item w3-button">บริการ</a>
        <a href="history.php" onclick="w3_close()" class="w3-bar-item w3-button">order history</a>
        <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
        
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
        <span class="w3-left w3-padding">SOME NAME</span>
        <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px"><br>
        <div class="w3-container">
            <h4 class="w3-center">My Profile</h4>

            <p class="w3-center"><img src="/w3images/____.png" class="w3-circle" style="height:106px;width:106px"
                    alt="Avatar"></p>
            <!--ทำINPUTใส่รูปให้ด้วย ไม่ต้องมีก็ได้มั้ง!-->

            <hr>
<div class="row justify-content-center align-items-center h-100"> 
      <div class="col-12 col-lg-9 col-xl-7">
        <!-- <div class="card shadow-2-strong card-registration" style="border-radius: 15px;"> -->
          <div class="card-body p-4 p-md-5">
            <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> ชื่อ:</p>
            <!-- !ชื่อ เปลี่ยนชื่อได้ตลอดก็น่าจะดีนะ แต่ทำไม่เป็นอะ ! -->
            <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> ที่อยู่:</p><!-- !ที่อยู่! -->
            <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> เบอร์:</p><!-- !เบอร์! -->
            <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> วันเดือนปีเกิด:</p>
            <!-- !วันเดือนปีเกิด! -->
            <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Email:</p><!-- !ที่อยู่! -->
            <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Password:</p><!-- !ที่อยู่! -->
            <button type="button" class="btn btn-link">เปลี่ยนรหัส</button><!-- !ทำตัวเปลี่ยนรหัสด้วย! -->
            <br>

            <input type="button" onclick="history.back()" value="ย้อนกลับ">
        </div>
    </div>


    </div>




    </div>

    <script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }
    </script>


</body>

</html>