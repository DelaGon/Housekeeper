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

            <a href="profileHK.php" onclick="w3_close()" class="w3-bar-item w3-button">Profile</a>
        <a href="employee.php" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
        <a href="workhistory.php" onclick="w3_close()" class="w3-bar-item w3-button">work history</a>
        <a href="history.php" onclick="w3_close()" class="w3-bar-item w3-button"></a>
        <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button"></a>
        
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
            <h4 class="w3-center">work history</h4>



            <hr>
            <div class="container mt-5">
                <div class="d-flex justify-content-center row">
               
                    <form class="d-flex">
                        <input class="" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>

                        <label for="inputTime" class="">
                            Time
                        </label>
                        <input type="time" class="" style="border-radius: 5px">
                    </form>
                    
                    <div class="col-md-10">
                    <br>
                    <div class="card card-5">
                            <div class="card-body">

                        <div class="rounded">
                            <div class="table-responsive table-borderless">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="toggle-btn">
                                                    <div class="inner-circle"></div>
                                                </div>
                                            </th>



                            </div>
                        </div>
                        <th>Order #</th>
                        <th>Company name</th>
                        <th>status</th>
                        <th>Total</th>
                        <th>Created</th>
                        <th></th>
                        <th></th>
                        </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr class="cell-1">
                                <td class="text-center">
                                    <div class="toggle-btn">
                                        <div class="inner-circle"></div>
                                    </div>
                                </td>
                                <td>#SO-13487</td>
                                <!--ไอดี ออร์เดอร์!-->
                                <td>Gasper Antunes</td>
                                <!--ชื่อบริการ!-->
                                <td><span class="badge badge-success">Fullfilled</span></td>
                                <!--สถานะ!-->
                                <td>$2674.00</td>
                                <!--ราคา!-->
                                <td>Today</td>
                                <!--วัน!-->
                                <td></td>
                                <td><a href="Bill.php" button type="button" class="btn btn-LightGray">&vellip;</a></td>
                                </td>
                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                            </tr>
                            <tr class="cell-1">
                                <td class="text-center">
                                    <div class="toggle-btn">
                                        <div class="inner-circle"></div>
                                    </div>
                                </td>
                                <td>#SO-13453</td>
                                <td>Aartsen van</td>
                                <td><span class="badge badge-info">Confirmed</span></td>
                                <td>$3454.00</td>
                                <td>Yesterday</td>
                                <td></td>
                                <td><a href="Bill.php" button type="button" class="btn btn-LightGray">&vellip;</a></td>
                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                            </tr>
                            <tr class="cell-1">
                                <td class="text-center">
                                    <div class="toggle-btn">
                                        <div class="inner-circle"></div>
                                    </div>
                                </td>
                                <td>#SO-13498</td>
                                <td>Trashes Habard</td>
                                <td><span class="badge badge-LightGray">Partially shipped</span></td>
                                <td>$6274.00</td>
                                <td>May 12,2020</td>
                                <td></td>
                                <td><a href="Bill.php" button type="button" class="btn btn-LightGray">&vellip;</a></td>
                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                            </tr>
                            <tr class="cell-1">
                                <td class="text-center">
                                    <div class="toggle-btn">
                                        <div class="inner-circle"></div>
                                    </div>
                                </td>
                                <td>#SO-16499</td>
                                <td>Samban Hubart</td>
                                <td><span class="badge badge-success">Fullfilled</span></td>
                                <td>$6375.00</td>
                                <td>May 11,2020</td>
                                <td></td>
                                <td><a href="Bill.php" button type="button" class="btn btn-LightGray">&vellip;</a></td>
                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <input type="button" onclick="history.back()" value="ย้อนกลับ">
                </div>
                
            </div>
        </div>
    </div>



    <br>

    
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