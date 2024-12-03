<!-- หน้าบริการ 
    ชื่อบริการ  แม่บ้านpart time full time Big cleaning พ้นฆ่าเชื้อ  แม่บ้านสำนักงาน 
    ชื่อบริการ เวลาเริ่ม  วันที่เริ่ม ราคา  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>บริการ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="Payment.css">
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
            <h4 class="w3-center"></h4>
            <hr>
            <div class="container mt-3 mb-3">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div class="d-flex flex-row align-items-center">
            <h4 class="text-uppercase mt-1">Payment</h4> <span class="ml-2"> CHECK OUT</span>
        </div> <a href="order.php" class="cancel com-color">Cancel and return to website</a>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5 class="mb-0 text-BLACK"> ราคา</h5>
            <h5 class="mb-3">บริการ</h5>
            <div class="about">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row mt-1">
                        <h6></h6>
                        <h6 class="text-success font-weight-bold ml-1"></h6>
                    </div>
                    <div class="d-flex flex-row align-items-center com-color"> <i class="fa fa-plus-circle"></i> <span class="ml-1"></span> </div>
                </div>
                <p></p>
                <div class="p-2 d-flex justify-content-between bg-pay align-items-center"> <span></span> <span></span> </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row mt-1">
                        <h6></h6>
                        <h6 class="text-success font-weight-bold ml-1"></h6>
                    </div>
                    <div class="d-flex flex-row align-items-center com-color"> <i class="fa fa-plus-circle"></i> <span class="ml-1"></span> </div>
                </div>
                <p></p>
                <div class="d-flex flex-column"> <label class="radio"> <input type="radio" name="gender" value="MALE" checked>
                        <div class="d-flex justify-content-between"> <span>VISA</span> <span>**** 5645</span> </div>
                    </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE">
                        <div class="d-flex justify-content-between"> <span>MASTER CARD</span> <span>**** 5069</span> </div>
                    </label> </div>
                <div class="buttons"> <button class="btn btn-success btn-block">Proceed to payment</button> </div>
            </div>
        </div>
        <div class="col-md-2"> </div>
        <div class="col-md-4">
            <div class="bg-pay p-3"> <span class="font-weight-bold">Order Recap</span>
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500">บริการ</span> <span>$ราคา</span> </div>
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500">จำนวนชั่วโมง</span> <span>ชั่วโมง</span> </div>
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500">VAT</span> <span>+ $0.0</span> </div>
                <hr>
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Total </span> <span class="text-BLACK">ราคา</span> </div>
            </div>
        </div>
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