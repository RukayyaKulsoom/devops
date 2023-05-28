<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/page1.css">
    <script type="text/javascript"  src="./js/main.js"></script>

    <title>Login</title>
    <style>
        .body {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <div class="box">
    <nav class="container-fluid navbar navbar-expand-lg navbar-dark" style="background-color:#000000; width:100%">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav col-lg-12 col-12 navbuttons">
        <li class="home nav-item d-none d-lg-block d-xl-block vertical-center">
            <a role="menuitem" href="/" style="padding: 0;"><img class="logo" src="{{ asset('img/logo (3).svg') }}" alt="logo"
                    style="width: 224px; height: 74px;"></a>
        </li>
        <li class="nav-item navbuttons">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
     

        <li class="nav-item navbuttons">
            <a class="nav-link" href="/">&nbspUkrain War</a>
        </li>
        <li class="nav-item navbuttons">
            <a class="nav-link" href="donate">&nbspDonate</a>
        </li>

        <li class="nav-item navbuttons">
            <a class="nav-link" href="#footer">&nbspAbout Us</a>
        </li>

        <li class="nav-item navbuttons">
            <a class="nav-link" href="contactus">&nbspContact Us</a>
        </li>

        <form class="d-flex navbuttons1">
            <input class="form-control me-2 " type="search" placeholder="Search the web" aria-label="Search">
            <i class="fa fa-search"
                style="font-size:28px;color:rgb(0, 0, 0); position:relative;left:-60px ;top: 5px"></i>


        </form>


    

        <li class="nav-item navbuttons">
            <a class="nav-link" href="signin">Login</a>
        </li>

    </ul>
</div>
</nav>

        <div class="container  p-5 mt-5 mb-4"
            style="background-color: white;border-radius: 25px; width: 700px;height: 500px; box-shadow: 0px 0px 10px 0px #a7a7a7;;">
            <strong>
                <h1 class="text-center mb-lg-5"
                    style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">SIGN IN</h1>
            </strong>
            <form  name="contactForm" method="post" action="login">
            <p style="color: red;"><?php
            if (empty($error)){}
            else{echo $error; }

        ?></p>
        <form method="post" action="login">
                <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="loginusername" placeholder="Username" name="email" required>
                    <label for="loginusername">Email</label>
                </div>
                </div>
            
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="loginpassword" placeholder="password" name="passwordf" required>
                    <label for="loginpassword">Password</label>
                </div>
            </div>

            <center> 
                @csrf
                <input type="submit" id="loginBtn" class="btn btn-dark mt-5"  style="width: 30%;" >
            </center>
            </form>
        </div>

    </div>

    <!-- Footer -->

    <Footer class="footer">
        <div class="container " id="footer">
            <div class="row ">
                <div class="col-lg-12 col-12  text-lg-center">
                    <center>

                        <img class="logo" src="{{ asset('img/logo (3).svg') }}" alt="logo" style="width: 250px; height: 80px;">
                        <hr>
                    </center>

                    <br>
                    <u>
                        <h3> About US</h3>
                    </u>
                    <br>

                    <p>SC News provide latest news and update related to all the suppressed countries. It also
                        provides
                        donation platform to help the people of these countries.
                    </p>
                    </center>
                </div>
                <center>


                    <div class="col-lg-5 col-12 text-lg-center mt-3 ">
                        <u>
                            <h3>Contact Us</h3>
                        </u>
                        <br>
                        <a style="color:white;" href="www.facebook.com"><i class="fa fa-facebook-official"
                                style="font-size:24px"></i></a> &nbsp
                        <a style="color:white;" href="www.instagram.com"><i class="fa fa-instagram"
                                style="font-size:24px"></i></a>&nbsp
                        <a style="color:white;" href="www.linkedin.com"><i class="fa fa-envelope-o bg"
                                style="font-size:24px"></i></a>&nbsp&nbsp
                        <a style="color:white;" href="www.linkedin.com"> <i class="fa fa-phone bg"
                                style="font-size:24px"></i>

                            <hr>


                            <p style="font-size: 14px;">
                                copyright <span class="fa fa-copyright bg c"></span> 2022 SCNews
                            </p>


                    </div>
                </center>
            </div>
        </div>

        <script>
        </script>
</body>

</html>