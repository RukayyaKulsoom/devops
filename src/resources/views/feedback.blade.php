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
  
    <script type="text/javascript"  src="./js/validatefeedback.js"></script>
    <title>Feedback</title>
    <style>
        .body {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        span{
            font-weight: bold;
        }
        #submitBtn{
            margin-top: 30px;
        }
        #deletefb{
            margin-left: 75%;
             margin-top: -145px;
        }
   
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
        <li class="nav-item navbuttons">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#donationModal1">Delete Feedback?</a>
        </li>

    </ul>
</div>
</nav>


        <div class="container  p-5 mt-5 mb-4 "
        style="background-color: white;border-radius: 25px; box-shadow: 0px 0px 10px 0px #a7a7a7; height: 500px;">
        <h1 class="text-center mb-lg-5"style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">SEND FEEDBACK</h1>
       <form  method="post" action="/feedback" id="form">
        @csrf
            <div class="form-floating mb-3">
                <div class="mb-3 row">
                    <label for="inputFirstName" class="col-md-2 col-form-label">Your Name</label>
                   
                <input type="text" class="form-control" name="fname" id="name" placeholder="your name" onkeyup="NameValidate()" required >
                    </div>
               <span id="name" > </span>
            </div>
            <div class="form-floating mb-3">
            <div class="mb-3 row">
            <label for="email" class="col-md-2 col-form-label">Your Email</label>
                    <input type="email" class="form-control " id="email" name="emailf" placeholder="email" required>
              
                   <span id="emailid" > </span>
            </div>
                </div>

            <div class="form-floating mb-3">
                <div class="mb-3 row"> 
                <label for="message" class="col-md-2 col-form-label" style="margin-top: 30px;">Your Feedback</label>
               
                <input type="text" class="form-control" name="gfeedback" style="height: 100px; border-radius: 10px;" id="feedback" placeholder="Your feedback"  required>
                </div>
               <span id="message" > </span>
               <center><button type="submit" href="#" id="submitbutton" class="btn btn-primary" style="margin-top: 80px; background-color: black; border-color: black ">Submit Feedback</button></div></center>
              
              
        </div>

      </form>

           
                <div class="modal" id="donationModal1">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
                        <div class="modal-content" style="height: 70%;">
                            <div class="modal-header">
                        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <!-- a form with required input fields credit card number, amount and an optional donation message -->
                            
                                <form method="post" class="donationForm" action="/delete"  id="donationform1">
                            
                                @csrf
                                <center><h5 style="color: black;" id="auth-msg"> Delete Feedback
                            </h5></center>
                                
                            
                                    <div class=" mt-5">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="text" id="email"  class="form-control" placeholder="Enter your email" name="emailform1" style="width: 448px;"required >
                                    </div>
                                    
                                
                                    @csrf
                                    <center><button type="submit" id="submitBtn" class="btn btn-primary" style="background-color: black; border-color: black ">Delete</center>
                                </form>
    
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            
                        </div>
                        </div>
                    </div>
                </div>
           
        
            </div>
        </div>
</div>



        <Footer class="footer">
            <div class="container " id="footer">
                <div class="row ">
                    <div class="col-lg-12 col-12  text-lg-center">
                        <center>
        
                            <img class="logo" src="{{ asset('img/logo (3).svg') }}"  alt="logo" style="width: 250px; height: 80px;">
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
    </footer>
      
    </body>
    
</html>
    <script type="text/javascript"  src="js/validatefeedback.js"></script>