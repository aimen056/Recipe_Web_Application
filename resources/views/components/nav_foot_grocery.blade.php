

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('pro.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('home.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('app.css') }}">
        <link rel="stylesheet" href="{{ asset('grcry.css') }}" type="text/css">

    </head>
<body>
    <div class="container-fluid bg-white gx-0 fixed-top">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="nav-logo" href="/">
                <img src="./images/logo.png" width="200" height="80">
            </a>
            <div class="collapse navbar-collapse nav-menu" id="navbarSupportedContent">
               
                <ul class="navbar-nav mr-auto">
                    <!--<li class="nav-item dropdown">
                    <div class="menu-item">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" 
                        role="button" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Features</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">                           
                             <a class="dropdown-item" href="/recipe">Recipes</a>
                             <a class="dropdown-item" href="/grocery">Grocery list</a>
                            <a class="dropdown-item" href="#">Measurements</a>
                            
                            <a class="dropdown-item" href="#">Community</a>


                        </div>
                    </div>
                    </li>-->
                    <div class="menu-item"><li class="nav-item">
                        <a class="nav-link" href="/recipe">Recipes</a>
                    </li></div>
                    <div class="menu-item"><li class="nav-item">
                        <a class="nav-link" href="/grocery">Grocery list</a>

                    </li></div>
                    <div class="menu-item"><li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li></div>
                    
                    
                    
                </ul>
            </div>
        <div class="nav-group">
            <ul>
            <a class="btn btn-primary w-button" href="{{ route('login') }}" role="button" style="background-color: #0b3953;width: 7vw;">Login</a>
            <a class="btn btn-primary w-button" href="{{ route('register') }}" role="button" style="background-color: #0b3953;width: 7vw;">Register</a>
            </ul>
        </div>
        
    </nav>
    <section class="nav-wave" >
        <div class="wave0">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
			</div>
        </section>
    </div>
   
    {{$slot}}


       <footer class="Footer">
        <div class="container">
            <div class="row parent">
                <div class="col-md-4 col-sm-12 div1">
                    <div>
                        <img src="./images/footerlogo.png" alt="logo" id="footer-logo" class="img-fluid">
                        <p id="brand-ln">The Dishcovery App is brought to you by Dishcovery Co.</p>
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true" style="font-size: 28px; color: #bfc4ce;"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 28px; color: #bfc4ce;"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 28px; color: #bfc4ce;"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 div2"> 
                    <h6>Features</h6>
                    <div class="feature">
                        <a href="/login">Get Started</a><br>
                        <a href="/recipe">Explore Recipes</a><br>
                        <a href="#">Measurement</a><br>
                        <a href="#">Plan, Shop, Cook</a><br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 div3">
                    <h6>More</h6>
                    <div class="feature">
                        <a href="#">FAQ</a><br>
                        <a href="#">About Us</a><br>
                        <a href="/contact">Contact Us</a><br>
                    </div>
                </div>
            </div>
            <div class="row copyright-row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <p><i class="fa fa-copyright" aria-hidden="true">2023 Dishcovery Co.</i></p>
                    <div class="private-policies">
                        <a href="#">Cookies</a>
                        <a href="#">Terms</a>
                        <a href="#">Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>