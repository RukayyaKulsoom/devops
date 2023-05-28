<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/page1.css">
    <script type="text/javascript"  src="./js/main.js"></script>

    <title>PAGE1</title>

</head>
<style>
    .card{
         box-shadow: 0px 0px 10px 0px #a7a7a7;
    }
</style>
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
                    <input class="form-control me-2 "  id="myInput" type="search" placeholder="Search the web" aria-label="Search">
                    <i class="fa fa-search"
                        style="font-size:28px;color:rgb(0, 0, 0); position:relative;left:-60px ;top: 5px"></i>


                </form>


                <li class="nav-item navbuttons">
                    <a class="nav-link" href="/signup">Signup</a>
                </li>

                <li class="nav-item navbuttons">
                    <a class="nav-link" href="{{ URL::asset('signin') }}">Login</a>
                </li>
                <li class="nav-item navbuttons">
                    <a class="nav-link" href="feedback">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="navbar2">
        <nav class="container-fluid navbar navbar-expand-lg navbar-light"
            style=" width:100% ;padding: 0px 0px 1px 0px ;">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav2" style="position:absolute;left: 30%;top:5px">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ URL::asset('https://edition.cnn.com/europe/live-news/russia-ukraine-war-news-06-21-22/index.html') }}">Ukraine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::asset('https://www.aljazeera.com/where/syria/') }}">Syria</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::asset('https://www.aljazeera.com/where/palestine/') }}">Palestine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::asset('https://www.aljazeera.com/where/iraq/') }}">Iraq</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::asset('https://www.greaterkashmir.com/') }}">Kashmir</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::asset('https://www.aljazeera.com/where/afghanistan/') }}">Afghanistan</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::asset('https://www.aljazeera.com/where/libya/') }}">Libya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::asset('https://www.aljazeera.com/where/libya/') }}">Myanmur</a>
                    </li>
                
                
                    </li>
                 
                </ul>   
           
            </div>
        </nav>
</div>

<div class="container-fluid cards">
            <div class="row">
            
                @foreach($news as $new)
                <div class="col-lg-3 col-12 mt-5" id = "card">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem; border-radius:20px 20px 20px 20px ">
                       
                            <img src="{{$new->picture}}"  class="card-img-top" alt="img1"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">{{$new->title}}</h5>
                            <p class="card-text">{{$new->text}}</p>

                        </div>

                    </div>
                 
                </div>
               @endforeach  

                <div class="col-lg-3 col-12 mt-5" id = "card">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem; border-radius:20px 20px 20px 20px ">
                        <img src="{{ asset('img/img1.jpg') }}"  class="card-img-top" alt="img1"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Polish president addresses Ukrainian parliament</h5>
                            <p class="card-text">The leaders of Poland and Ukraine embraced in the chamber earlier
                                today.Andrzej Duda said "worrying voices" were suggesting Ukraine should give in to
                                Russia's President Putin, according to comments quoted by the Reuters news agency.</p>

                        </div>

                    </div>
                </div>


                <div class="col-lg-3 col-12 mt-5">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img2.jpg') }}" class="card-img-top" alt="./ukraineimages/img2.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">'Extremely difficult' situation in the east - Zelensky</h5>
                            <p class="card-text">SBoth military and economic factors could prove decisive.Both sides are
                                landing heavy blows with artillery - but ultimately the Ukrainians are outgunned despite
                                weapons donations from Western countries.</p>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img3.jpg') }}"  class="card-img-top" alt="./ukraineimages/img3.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Russia deploys Terminator tanks - UK</h5>
                            <p class="card-text">Terminators pictured during a Russian military parade in 2020.Russia is
                                believed to have deployed the only operational company of its BMP-T Terminator tank
                                support vehicles in this part of the prized Donbas region</p>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img4.jpg') }}"  class="card-img-top" alt="./ukraineimages/img4.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Russia attacks Severodonetsk from four directions - governor</h5>
                            <p class="card-text">The eastern city has been under Russian shelling.Russia has attempted
                                to break into the city of Severodonetsk from four separate directions, says Serhiy
                                Haidai, the governor of Ukraine's easternmost Luhansk region.</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img5.jpg') }}"  class="card-img-top" alt="./ukraineimages/img5.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Talks may only happen when one side loses the fighting.</h5>
                            <p class="card-text">The Russians have won Mariupol - but the Ukrainians have made gains
                                elsewhere.I think it’s worth putting into context those comments from Ukraine that Kyiv
                                won't agree to a ceasefire deal that involves giving up territory.</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img6.jpg') }}"  class="card-img-top" alt="./ukraineimages/img6.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Ukraine refuses to give up land in any peace deal</h5>
                            <p class="card-text">The Ukrainian government says it won't agree a ceasefire deal with
                                Russia.Presidential adviser Mykhaylo Podolyak said Kyiv would not follow calls in the
                                West for an urgent ceasefire that involved Russian forces remaining in territory they
                                occupy in the south and east of the country.</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img7.jpg') }}"  class="card-img-top" alt="./ukraineimages/img7.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Ukraine reports fresh Russian attacks across east.Ukraine's armed
                                forces have given their usual evening update, as Russia continues its efforts to capture
                                the remainder of the eastern Luhansk region. Here are some of the key takeaways.</h5>
                            <p class="card-text">A university building in Bakhmut, Donetsk region, is said to have been
                                shelled.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img8.jpg') }}"  class="card-img-top" alt="./ukraineimages/img8.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Russia should be banned from football as long as the war continues -
                                Shevchenko.Speaking to the BBC, the former Chelsea, AC Milan and Dynamo Kyiv striker
                                pleaded for donations.

                                “This war is cruel. It’s atrocious. It’s a genocide.” he said.</h5>
                            <p class="card-text">Ukraine football legend Andriy Shevchenko has become the first
                                ambassador of a charity created by Volodymyr Zelensky to support the country at war..
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img9.jpg') }}"  class="card-img-top" alt="./ukraineimages/img9.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Zelensky says only 'diplomacy' can end Ukraine war</h5>
                            <p class="card-text">The war in Ukraine can only be resolved through diplomacy, Ukrainian
                                President Volodymyr Zelensky has said - despite a current deadlock in negotiations
                                between the two sides.

                                Speaking on Ukrainian television, he suggested his country could be victorious on the
                                battlefield - but that things could only come to a conclusive halt "at the negotiating
                                table".</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img10.jpg') }}"  class="card-img-top" alt="./ukraineimages/img10.jpg" style="
                            border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Diplomacy looks likeliest path for Ukraine.Right now, the most likely
                                outcome in Ukraine looks to be a return to diplomacy - something President Zelensky
                                hinted at in his interview earlier.</h5>
                            <p class="card-text">President Zelensky earlier said only diplomacy could fully end the
                                war.The alternatives are a change of heart in Russia, or even a change of leadership
                                there – which seem far less likely.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img11.jpg') }}"  class="card-img-top" alt="./ukraineimages/img11.jpg "
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">What's been happening in Ukraine?</h5>
                            <p class="card-text">President Zelensky says the war in Ukraine can only be resolved through
                                diplomacy.Speaking on Ukrainian television, he suggested his country could be victorious
                                on the battlefield - but that things could only come to a conclusive halt "at the
                                negotiating table".</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 mt-3">
                    <div class="card text-dark  bg-light mb-3 h-100"
                        style="width: 23rem;border-radius:20px 20px 20px 20px">
                        <img src="{{ asset('img/img12.jpg') }}"  class="card-img-top" alt="./ukraineimages/img2.jpg"
                            style="border-radius:20px 20px 20px 20px">
                        <div class="card-body">
                            <h5 class="card-title">Mariupol capture frees Russian troops for fighting elsewhere
                            </h5>
                            <p class="card-text">Russian troops patrol Mariupol earlier this week.Russian forces are
                                intensifying their battle to capture more territory in the eastern Donbas region, where
                                they've been heavily bombarding Ukrainian positions.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br> 


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





</body>

</html>