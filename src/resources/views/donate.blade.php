<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/page1.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Donate Us</title>
</head>
<body>
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
            <a class="nav-link" href="signup">Signup</a>
        </li>

        
        <li class="nav-item navbuttons">
             <a class="nav-link text-light" href="{{ url('/logout') }}">Logout</a>
        </li>
        <li class="nav-item navbuttons">
                    <a class="nav-link" href="feedback">Feedback</a>
                </li>
    </ul>
</div>
</nav>

    <div class="container ">
        <div class="card mb-3 mt-3">
            <img src="{{ asset('img/kashmiri.PNG') }}" class="card-img-top" alt="..." style="height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Donate to Kashmir</h5>
              <p class="card-text">Donate to help stop the war!!!!!</p>
              <button type="button" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donationModal1">Donate Now</button>
              
              <div class="modal" id="donationModal1">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="donationModalLabel">Donate To Kashmir</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- a form with required input fields credit card number, amount and an optional donation message -->
                          
                            <form method="post" class="donationForm" onSubmit="validateForm()" id="donationform1">
                            <h5 style="color: red;" id="auth-msg"> 
                        </h5>
                            
                            @csrf
                                <div class=" mb-3">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="text" id="email"  class="form-control" placeholder="Email Address should follow" name="emailform1" required onKeyUp="emailVal()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="credit_card_number">Credit Card Number</label>
                                    <input type="text" id="credit_card_number"  class="form-control" placeholder="Credit Card Number should follow " name="ccform1" required onKeyUp="cardVal()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="amount">Amount</label>
                                    <input type="text" id="amount" class="form-control"  placeholder="Amount" name="amountform1" required onKeyUp="amountVal()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="w-100"id="message"  name="msgform1" rows="4"></textarea>
                                </div>
                                
                                <input type="submit" id="submitBtn" class="btn btn-primary" >
                            </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal" id="donationModal2">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="donationModalLabel">Donate To Palastine</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- a form with required input fields credit card number, amount and an optional donation message -->
                          
                            <form method="post" class="donationForm" onSubmit="return validateForm()" id="donationform2">
                            <h5 style="color: red;" id="auth-msg2"> 


                            </h5>
                            
                                <div class=" mb-3">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="text" id="email1" name="emailform2" class="form-control" placeholder="Email Address should follow" required onKeyUp="emailVal1()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="credit_card_number">Credit Card Number</label>
                                    <input type="text" id="credit_card_number1" name="ccform2" class="form-control" placeholder="Credit Card Number should follow " required onKeyUp="cardVal1()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="amount">Amount</label>
                                    <input type="text" id="amount1" class="form-control" name="amountform2" placeholder="Amount" required onKeyUp="amountVal1()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="w-100"id="message" name="msgform2"  rows="4"></textarea>
                                </div>
                                <input type="submit" id="submitBtn" class="btn btn-primary">
                            </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal" id="donationModal3">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="donationModalLabel">Donate To Ukraine</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- a form with required input fields credit card number, amount and an optional donation message -->
                          
                            <form method="post" class="donationForm" onSubmit="return validateForm()" id="donationform3">
                            
                            <h5 style="color: red;" id="auth-msg3"> 

</h5>
                                <div class=" mb-3">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="text" id="email2" name="emailform3" class="form-control" placeholder="Email Address should follow " required onKeyUp="emailVal2()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="credit_card_number">Credit Card Number</label>
                                    <input type="text" id="credit_card_number2" name="ccform3" class="form-control" placeholder="Credit Card Number should follow " required onKeyUp="cardVal2()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="amount">Amount</label>
                                    <input type="text" id="amount2" class="form-control" name="amountform3" placeholder="Amount" required onKeyUp="amountVal2()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="w-100"id="message" name="msgform3"  rows="4"></textarea>
                                </div>
                                <input type="submit" id="submitBtn" class="btn btn-primary">
                            </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal" id="donationModal4">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="donationModalLabel">Donate To Africa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- a form with required input fields credit card number, amount and an optional donation message -->
                          
                            <form method="post" class="donationForm" onSubmit="return validateForm()" id="donationform4">
                                
                                <h5 style="color: red;" id="auth-msg4"> 
</h5>
                                <div class=" mb-3">
                                    <label class="form-label" for="email3">Email Address</label>
                                    <input type="text" id="email3" name="emailform4" class="form-control" placeholder="Email Address should follow " required onKeyUp="emailVal3()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="credit_card_number">Credit Card Number</label>
                                    <input type="text" id="credit_card_number3" name="ccform4" class="form-control" placeholder="Credit Card Number should follow " required onKeyUp="cardVal3()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="amount">Amount</label>
                                    <input type="text" id="amount3" class="form-control" name="amountform4" placeholder="Amount" required onKeyUp="amountVal3()">
                                </div>
                                <div class=" mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="w-100"id="message" name="msgform4"  rows="4"></textarea>
                                </div>
                                <input type="submit" id="submitBtn" class="btn btn-primary">
                            </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                      </div>
                    </div>
                  </div>
              </div>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

            </div>
          </div>
        <div class="card mb-3">
            <img src="{{ asset('img/palastine.PNG') }}" class="card-img-top .img-fluid" alt="..." style="height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Donate to Palastine</h5>
              <p class="card-text">Donate to help stop the war!!!!!</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donationModal2">Donate Now</a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

            </div>
          </div>
        <div class="card mb-3">
            <img src="{{ asset('img/ukrain.PNG') }}" class="card-img-top .img-fluid" alt="..." style="height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Donate to Ukraine</h5>
              <p class="card-text">Donate to help stop the war!!!!!</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donationModal3">Donate Now</a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

            </div>
          </div>
        <div class="card mb-3">
            <img src="{{ asset('img/afric.PNG') }}" class="card-img-top .img-fluid" alt="..." style="height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Donate to Africa</h5>
              <p class="card-text">Donate to help stop the war!!!!!</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donationModal4">Donate Now</a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

            </div>
          </div>
    </div>
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
        // validate the form for credit_card_number, amount and message on submit and keyup  with javascript by using regex pattern

        

        document.getElementById("submitBtn").onclick = function() {
            validateForm();
        }






        //ajax

        $('#donationform1').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'addDonation1',
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false,
            success:function(response){
                if (response.user == "Action Successful"){
                    alert("Added Successfully");
                        $("#auth-msg").html(response.user);
                    $("#email").val("");
                    $("#credit_card_number").val("");
                    $("#amount").val("");
                    $("#message").val("");

                    }
                    else{
                        $("#auth-msg").html(response.user);
                    }
                }
            }
            
          );})
          $('#donationform2').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'addDonation2',
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false,
            success:function(response){
                if (response.user == "Action Successful"){
                    alert("Added Successfully");
                        $("#auth-msg2").html(response.user);
                    $("#email").val("");
                    $("#credit_card_number").val("");
                    $("#amount").val("");
                    $("#message").val("");

                    }
                    else{
                        $("#auth-msg2").html(response.user);
                    }
                }
            }
            
          );})
          $('#donationform3').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'addDonation3',
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false,
            success:function(response){
                if (response.user == "Action Successful"){
                    alert("Added Successfully");
                        $("#auth-msg3").html(response.user);
                    $("#email").val("");
                    $("#credit_card_number").val("");
                    $("#amount").val("");
                    $("#message").val("");

                    }
                    else{
                        $("#auth-msg3").html(response.user);
                    }
                }
            }
            
          );})
          $('#donationform4').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'addDonation4',
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false,
            success:function(response){
                if (response.user == "Action Successful"){
                    alert("Added Successfully");
                        $("#auth-msg4").html(response.user);
                    $("#email").val("");
                    $("#credit_card_number").val("");
                    $("#amount").val("");
                    $("#message").val("");

                    }
                    else{
                        $("#auth-msg4").html(response.user);
                    }
                }
            }
            
          );})

        
      </script>
    
</body>

</html>
<script type="text/javascript"  src="js/donate.js"></script>