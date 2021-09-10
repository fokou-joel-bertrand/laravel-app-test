<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}"><img src="images/logo.png" height="30" width="41"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('') }}"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}"><span class="fa fa-info fa-lg"></span> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/contact') }}"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-8">
                    <h1>Ristorante con Fusion</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="images/logo.png" class="image-fluid">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              Biyem-Assi<br>
		              <i class="fa fa-phone"></i>: +237 6234 5678<br>
		              <i class="fa fa-fax"></i>: +237 6765 4321<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
            </div>
            <div class="col-12 col-sm-6 offset-sm-1">
                <h5>Map of our Location</h5>
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
                <div class="btn-group" role="group">
                    <a class="btn btn-primary" role="button" href="tel:+237673470023"><i class="fa fa-phone"></i> Call</a>
                    <a class="btn btn-info" role="button"><i class="fa fa-skype fa-lg"> Skype</i></a>
                    <a class="btn btn-success" role="button" href="mailto:joelfokou99@gmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
                <form class="">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 form-label">First Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 form-label">Contact Tel.</label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" placeholder="Area Code" id="areacode" name="areacode">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" placeholder="Tel. Number" id="telnum name=" name="telnum">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailid" class="col-md-2 form-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" placeholder="Email" id="emailid" name="emailid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="approve" name="approve" value="">
                                <label for="approve" class="form-check-label">
                                    <strong>May We Contact You ?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedback" class="col-md-2 form-label">Your Feedback</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="12" id="feedback" name="feedback"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Send Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-12 col-md">
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
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2021 Ristorante Con Fusion</p>
                </div>
           </div>
        </div>
    </footer> 

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>