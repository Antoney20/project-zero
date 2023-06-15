
    
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/bootstrap-slider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/layerslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/color.css') }}" id="color-change">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/fonts/flaticon/flaticon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Assets/css/style.css') }}">

<title>Spyder</title>
</head>
<body>



<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-success mr-1"></i>
								 @if(auth()->check())
								 <a href="{{ route('logout') }}">Logout</a>&nbsp;&nbsp;
                                 <li class="nav-item text-white" >Welcome: {{ Auth::user()->name }}</li>
                                 @else 
								<a href="{{ route('login') }}">Login</a>&nbsp;&nbsp;
								
								| </li>
								<li><i class="fas fa-user-plus text-success mr-1"></i><a href="{{ route('register') }}"> Register</li>
								</ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/restatelg.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="#">Properties</a> </li>
                                        
                                        <li class="nav-item"> <a class="nav-link" href="agent.php">Agent</a> </li>

										
                                        @auth
                                        
                                        <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                            <ul class="dropdown-menu">
                                             <li class="nav-item"> <a class="nav-link" href="profile.php">Profile</a> </li>
                                            <!-- <li class="nav-item"> <a class="nav-link" href="request.php">Property Request</a> </li> -->
                                           <li class="nav-item"> <a class="nav-link" href="feature.php">Your Property</a> </li>
                                           <li class="nav-item">
                                           <a class="nav-link" href="{{ route('logout') }}"
                                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                             </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                               @csrf
                                             </form>
                                             </li>
                                               </ul>
                                             </li>
                                         @else
   
                                       @endauth

                                    </ul>
                                    
									
									<a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="submitproperty">Add listings</a> 
                                    
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>