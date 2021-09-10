<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target='#Navbar'>
            <span class="navbar-toggler-icon"></span>
            </button>
 
            <a class="navbar-brand mr-auto" href="{{ url('') }}"><img src="images/logo.png" height="30" width="41">  </a>
         <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="{{ url('') }}"><span class="fa fa-home fa-lg"> Home</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}"><span class="fa fa-info fa-lg"> About</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"> <span class="fa fa-list fa-lg"></span> Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('contact')}}"><span class="fa fa-address-card fa-lg"> Contact</span></a></li>
            </ul>
            <span class="navbar-text">
                <a href="" id="login">
                    <span class="fa fa-sign-in fa-lg"></span> Login
                </a>
            </span>
         </div>
        </div>
 </nav>
 
  <div id="reservationTableModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
          <div class="modal-content">
              <div class="modal-header background-modal-header">
                  <h4 class="modal-title text-white">Reserve a Table</h4>
                  <button class="close" id="tableReservationDismiss" type="button">
                      &times;
                  </button>
              </div>
              <div class="modal-body">
                 <div class="row p-3">
                     <div class="col-12 align-self-center">
                           <form>
                                   <div class="form-group row p-1">
                                       <label for="numguest" class="form-label col-2">Number of Guests</label>
                                       <div class="col-1">
                                           <div class="form-check">
                                               <input type="radio" id="check1" class="form-check-input" name="check1" value="check1">
                                               <label for="check1" class="form-check-label">1</label>
                                           </div>
                                       </div>
                                       <div class="col-1">
                                           <div class="form-check">
                                               <input type="radio" id="check1" class="form-check-input" name="check1" value="check1">
                                               <label for="check1" class="form-check-label">2</label>
                                           </div>
                                       </div>
                                       <div class="col-1">
                                           <div class="form-check">
                                               <input type="radio" id="check1" class="form-check-input" name="check1" value="check1">
                                               <label for="check1" class="form-check-label">3</label>
                                           </div>
                                       </div>
                                       <div class="col-1">
                                           <div class="form-check">
                                               <input type="radio" id="check1" class="form-check-input" name="check1" value="check1">
                                               <label for="check1" class="form-check-label">4</label>
                                           </div>
                                       </div>
                                       <div class="col-1">
                                           <div class="form-check">
                                               <input type="radio" id="check1" class="form-check-input" name="check1" value="check1">
                                               <label for="check1" class="form-check-label">5</label>
                                           </div>
                                       </div>
                                       <div class="col-1">
                                           <div class="form-check">
                                               <input type="radio" id="check1" class="form-check-input" name="check1" value="check1">
                                               <label for="check1" class="form-check-label">6</label>
                                           </div>
                                       </div>
                                   </div>
 
                                   <div class="form-group row p-1">
                                       <label for="smoking" class="form-label col-2">Section</label>
                                       <div class="col-4">
                                          <div class="btn-group btn-group-toggle" data-toggle="button">
                                              <label class="btn btn-success">
                                                  <input type="radio" name="options1" id="non-smoking" autocomplete="off" checked> Non-Smoking
                                              </label>
                                              <label class="btn btn-danger">
                                                  <input type="radio" name="options1" id="smoking" autocomplete="off"> Smoking
                                              </label>
                                          </div>
                                       </div>
                                   </div>
 
                                   <div class="form-group row p-1">
                                       <label for="dateandtime" class="form-label col-2">Date and Time</label>
                                       <div class="col-4">
                                           <input type="date" class="form-control" id="date" name="date" value="date" placeholder="Date">
                                       </div>
                                       <div class="col-4">
                                       <input type="time" class="form-control" id="time" name="time" value="time" placeholder="Time"> 
                                       </div>
                                   </div>
                                   <div class="form-group row p-1 pt-2">
                                       <div class="col-12 offset-2">
                                           <button class="btn btn-secondary" id="tableReservationCancelButton">Cancel</button>
                                           <button type="submit" class="btn btn-primary">Reserve</button>
                                       </div>
                                   </div>
                           </form>
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
 
     <div id="loginModal" class="modal fade" role="dialog">
         <div class="modal-dialog modal-lg" role="content">
             <div class="modal-content">
                 <div class="modal-header background-modal-header">
                     <h4 class="modal-title">Login</h4>
                     <button class="close" type="button" id="login-times-dismiss">
                         &times;
                     </button>
                 </div>
                 <div class="modal-body">
                     <form>
                         <div class="form-row">
                             <div class="form-group col-sm-4">
                                     <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                     <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                             </div>
                             <div class="form-group col-sm-4">
                                 <label class="sr-only" for="exampleInputPassword3">Password</label>
                                 <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                             </div>
                             <div class="col-sm-auto">
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox">
                                     <label class="form-check-label"> Remember me
                                     </label>
                                 </div>
                             </div>
                         </div>
                         <div class="form-row">
                             <button type="button" class="btn btn-secondary btn-sm ml-auto" id="dismiss-modal-login">Cancel</button>
                             <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>        
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 
     <header class="jumbotron">
         <div class="container">
             <div class="row row-header">
                 <div class="col-12 col-sm-6">
                     <h1>Ristorante con Fusion</h1>
                     <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                 </div>
                 <div class="col-12 col-sm">
                     <div class="row">
                         <div class="col-6 align-self-center">
                             <img src="images/logo.png" class="image-fluid">
                         </div>
                         <div class="col align-self-center">
                             <a role="button" href="" 
                             class="btn btn-block nav-link btn-warning"
                             id="reserveTableButton">
                             Reserve Table</a>    
                         </div>
                   </div>
                 </div>
             </div>
         </div>
     </header>
 
     <div class="container">
 
         <div class="row row-content">
             <div class="col">
                 <div id="mycarousel" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner" role="listbox">
                         <div class="carousel-item active">
                             <img src="images/uthappizza.png" class="d-block img-fluid" alt="uthappizza">
                             <div class="carousel-caption d-none d-md-block">
                                 <h2>Uthappizza <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$9.99</span></h2>
                                 <p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>                
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="images/buffet.png" class="d-block img-fluid" alt="buffet">
                             <div class="carousel-caption d-none d-md-block">
                                 <h2>Weekend Grand Buffet <span class="badge badge-danger">NEW</span></h2>
                                 <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>                
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="images/alberto.png" class="d-block img-fluid" alt="alberto">
                             <div class="carousel-caption d-none d-md-block">
                                 <h2>Alberto Somayya</h2>
                                 <h4>Executive Chef</h4>
                                 <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>                    
                             </div>
                         </div>
                     </div>
                     <ol class="carousel-indicators">
                         <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#mycarousel" data-slide-to="1"></li>
                         <li data-target="#mycarousel" data-slide-to="2"></li>
                     </ol>
                     <a role="button" href="#mycarousel" class="carousel-control-prev" data-slide="prev">
                         <span class="carousel-control-prev-icon"></span>
                     </a>
                     <a role="button" href="#mycarousel" class="carousel-control-next" data-slide="next">
                         <span class="carousel-control-next-icon"></span>
                     </a>
                         <button class="btn btn-danger btn-sm" id="carouselButton">
                             <span class="fa fa-pause"></span>
                         </button>
                 </div>
             </div>
         </div>
         
         <div class="row row-content align-items-center">
             <div class="col-12 col-sm-4 order-sm-last col-sm-3">
                 <h3>Our Lipsmacking Culinary Creations</h3>
             </div>
             <div class="col col-sm order-sm-first col-md">
               <div class="media">
                    <img src="images/uthappizza.png" class="d-flex mr-3 img-thumbnail align-self-center" alt="uthappizza">
                 <div class="media-body">
                     <h2 class="mt-0">Uthappizza <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$9.99</span></h2>
                     <p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                 </div>
               </div>
             </div>
         </div>
 
 
         <div class="row row-content align-items-center">
             <div class="col-12 col-sm-4 col-sm-3">
                 <h3>This Month's Promotions</h3>
             </div>
             <div class="col col-sm col-md">
                <div class="media">
                     <img src="images/buffet.png" class="d-flex order-sm-last mr-3 img-thumbnail align-self-center" alt="buffet">
                 <div class="media-body">
                     <h2 class="mt-0">Weekend Grand Buffet <span class="badge badge-danger">NEW</span></h2>
                     <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                 </div>
               </div>
             </div>
         </div>
 
         <div class="row row-content align-items-center">
             <div class="col-12 col-sm-4 order-sm-last col-sm-3">
                 <h3>Meet our Culinary Specialists</h3>
             </div>
             <div class="col col-sm order-sm-first col-md">
                 <div class="media">
                     <img src="images/alberto.png" class="d-flex mr-3 img-thumbnail align-self-center" alt="alberto">
                     <div class="media-body">
                         <h2 class="mt-0">Alberto Somayya</h2>
                         <h4>Executive Chef</h4>
                         <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>        
                     </div>
                 </div>
             </div>
         </div>
     </div>
 
     <footer class="footer">
         <div class="container">
             <div class="row">             
                 <div class="col-4 offset-1 col-sm-2">
                     <h5>Links</h5>
                     <ul class="list-unstyled">
                         <li><a href="{{ url('') }}">Home</a></li>
                         <li><a href="{{ url('/about') }}">About</a></li>
                         <li><a href="#">Menu</a></li>
                         <li><a href="{{ url('/contact') }}">Contact</a></li>
                     </ul>
                 </div>
                 <div class="col-7 col-sm-5">
                     <h5>Our Address</h5>
                     <address>
                       121, Buea, Molyko<br>
                       Douala, logpon<br>
                       Buea, Molyko<br>
                       <i class="fa fa-phone fa-lg"></i> +237 673470023<br>
                       <i class="fa fa-fax fa-lg"></i> +237 690898806<br>
                       <i class="fa fa-envelope fa-lg"></i> <a href="mailto:confusion@food.net">confusion@food.net</a>
                    </address>
                 </div>
                 <div class="col-12 col-sm-4 align-self-center">
                     <div class="text-center">
                         <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                         <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                         <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                         <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                         <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                         <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                     </div>
                 </div>
            </div>
            <div class="row justify-content-center">             
                 <div class="col-auto">
                     <p>© Copyright 2021   Ristorante Con Fusion</p>
                 </div>
            </div>
         </div>
     </footer>
 

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>