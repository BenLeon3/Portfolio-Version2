<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
	<title>Ben's Portfolio</title>
	<!-- Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <link href"assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<Body class="contact-background">
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper black">
            <!-- <a href="#!" class="brand-logo">Logo</a> -->
            <ul class="right hide-on-med-and-down">
                <li><a href="https://www.linkedin.com/in/benjamin-leon-373696162/" class="linked"><img class="linked-in-logo" src="assets/images/linkedin.png" style="height: 50px; width:47px;"></a></li>
                <li><a href="https://www.instagram.com/b3n_zilla/"class="insta"><img class="instagram-logo" src="assets/images/instagram-logo.png" style="height: 70px; width:70px;"></a></li>
                <li><a href="https://twitter.com/StillaMania"class="twitter"><img class="twitter-logo" src="assets/images/twitter-logo.png" style="height: 56px; width:56px;"></a></li>
                <li><a href="https://github.com/BenLeon3" class="git"><img class="git-hub-logo" src="assets/images/git-logo.png" style="height: 47px; width:47px;"></a></li>
            </ul>
        </div>
    </nav>
</div>

<!-- Materialize SideNav -->
<div class="side-nav-button">
    <ul id="slide-out" class="sidenav black">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="assets/images/Code1.jpg" style="height:220px; width:300px;">
                </div>
                <a href="index.html"><img class="circle" src="assets/images/BLR.jpg" style="height: 130px; width:100px;"></a>
                <a href="contact.html"><span class="white-text name" style="margin-top: 5px;">Benjamin Leon</span></a>
                <a href="contact.html"><span class="white-text email">benleon3@gmail.com</span></a>
            </div>
        </li>
        <li><a href="index.html" class="sideLinks orange-text" style="font-size: 20px;"><i class="material-icons sideIcons orange-text">home</i>Home</a></li>
        <li><a href="aboutme.html" class="sideLinks green-text" style="font-size: 20px;"><i class="material-icons sideIcons green-text">face</i>About</a></li>
        <li><a href="portfolio.html" class="sideLinks blue-text" style="font-size: 20px;"><i class="material-icons sideIcons blue-text">code</i>Portfolio</a></li>
        <li><a href="#!" class="sideLinks purple-text" style="font-size: 20px;"><i class="material-icons sideIcons purple-text">camera</i>Photography</a></li>
        <li><a href="contact.html" class="sideLinks red-text" style="font-size: 20px;"><i class="material-icons sideIcons red-text">mail</i>Contact</a></li>
    </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons menu">menu</i></a>
</div>

<div class="container about-me" style="margin-top: 30px;">
        <div class="row">
            <div class="col s12 m12">
                <div class="card white">
                    <div class="card-content black-text">
                        <span class="card-title">Contact</span>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input placeholder="Your Name" id="name" name="name" type="text" class="validate">
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        <input placeholder="JohnDoe@email.com" id="email" name="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">textsms</i>
                                        <input placeholder="Comment" id="comments" name="comments" type="text" class="validate">
                                        <label for="comment">Comment</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s2">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-action">
                        <a class="green-text" href="index.html">Home</a>
                        <a class="blue-text" href="portfolio.html">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
     </div>   

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- JavaScript -->
<script type="text/javascript" src="assets/Javascript/materialize.min.js"></script>
<script type="text/javascript" src="assets/Javascript/app.js"></script>
    
</Body>
</html>