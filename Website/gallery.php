<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Astronomy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/my-and-other-gallery.css">
        <link rel="stylesheet" type="text/css" href="css/gallery.css">
        <link rel="stylesheet" type="text/css" href="css/form.css">
    </head>
    <body>
            <nav class="nav" id="nav">
                <div class="hint">
                    <span>&#8249;</span>
                </div>

                <div class="nav-trigger"><p class="ghost">HOME</p></div>

                <a class="sitenav" href="index.html">
                    <div class="el home sitenav">
                        <p class="menu">Home</p>
                    </div>
                </a>

                <div class="el planets sitenav">
                    <label for="dropmenu" class="pl">
                        <span class="menu">Planets</span>
                    </label>
                </div>
                <input class="cb" type="checkbox" id="dropmenu">
                    <div  class="planetmenu">
                        <ul>
                            <li><a href="planets/mercury.html">Mercury</a></li>
                            <li><a href="planets/venus.html">Venus</a></li>
                            <li><a href="planets/earth.html">Earth</a></li>
                            <li><a href="planets/mars.html">Mars</a></li>
                            <li><a href="planets/jupiter.html">Jupiter</a></li>
                            <li><a href="planets/saturn.html">Saturn</a></li>
                            <li><a href="planets/uranus.html">Uranus</a></li>
                            <li><a href="planets/neptune.html">Neptune</a></li>
                        </ul>
                    </div>

                <a href="gallery.html">
                    <div class="el gallery active sitenavpl sitenavpl">
                        <p class="menu">Gallery</p>
                    </div>
                </a>
                

                <a class="sitenav" href="form.html">
                    <div class="el trip">
                        <p class="menu">Trip to Mars</p>
                    </div>
                </a>
            </nav>
            <?php include 'login.php'; ?>
            <header id="gallery-header">Photos</header>

            <div id="login">
                <label for="loginFormTrigger"><span class="lButton">Log in</span></label>
                <label for="registerFormTrigger"><span class="lButton">Register</span></label>
            </div>

            <input type="checkbox" id="loginFormTrigger" class="trigger"/>
            <label for="loginFormTrigger"><span class="formExit"></span></label>
            <div class="logForm">
                <h1>LOG IN</h1>
                <form id="loginForm" action="gallery copy.php" method="post">
                    <label for="loginName"><strong>Login:</strong></label>
                    <input type="text" id="loginName" name="username"/><br>
                    <label for="password"><strong>Password</strong></label>
                    <input type="password" id="password" name="password"/><br>
                    <button type="submit">Log In</button>
                </form>
                <div class="exit-x">
                    <label for="loginFormTrigger">
                        <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                            <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                        </svg>
                    </label>
                </div>
            </div>

            <input type="checkbox" id="registerFormTrigger" class="trigger"/>
            <label for="registerFormTrigger"><span class="formExit"></span></label>
            <div class="logForm">
                <h1>REGISTER</h1>
                <form id="registerForm" action="gallery copy.php" method="post">
                    <label for="mail"><strong>Email:</strong></label>
                    <input type="email" id="mail" name="email"/><br>
                    <label for="loginName"><strong>Login:</strong></label>
                    <input type="text" id="loginName" name="username"/><br>
                    <label for="password1"><strong>Password:</strong></label>
                    <input type="password" id="password1" name="password1"/><br>
                    <label for="password2"><strong>Repeat password:</strong></label>
                    <input type="password" id="password2" name="password2"/><br>
                    <button type="submit">Register</button>
                </form>
                <div class="exit-x">
                    <label for="registerFormTrigger">
                        <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                            <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                        </svg>
                    </label>
                </div>
            </div>


            <div id="my-gallery-description">
                <div id="desc-trigger">
                    <span>?</span>
                    <svg width="70" height="70">
                        <circle cx="35" cy="35" r="35" fill="rgba(41, 41, 41, 0.616)"/>
                    </svg>
                </div>
                <h1>About</h1>
                <p>All of my photos are taken with my phone (Galaxy A52s 5G), through my telescope (Celestron PowerSeeker 50AZ), small hand-held 13x magnification telescope, three pairs of sunglasses (solar eclipse) or without any additional equipment.</p>
            </div>

            <div id="gallery-wrapper">
                <div id="bck"></div>
                <div id="fill-grid"></div>
                <figure class="gallery-image"><label for="img1"><img src="mygallery/miniatures/moon1.jpeg" alt="Moon 1"></label></figure>
                <figure class="gallery-image"><label for="img2"><img src="mygallery/miniatures/planet-parade.png" alt="Planet parade"></label></figure>
                <figure class="gallery-image"><label for="img3"><img src="mygallery/miniatures/moon3.jpeg" alt="Moon 3"></label></figure>

                <figure class="gallery-image"><label for="img4"><img src="mygallery/miniatures/amsterdam-sky1.jpeg" alt="Amsterdam sky 1"></label></figure>
                <figure class="gallery-image"><label for="img5"><img src="mygallery/miniatures/amsterdam-sky2.jpeg" alt="Amsterdam sky 2"></label></figure>
                <figure class="gallery-image"><label for="img6"><img src="mygallery/miniatures/jupiter.jpeg" alt="Jupiter"></label></figure>

                <figure class="gallery-image"><label for="img7"><img src="mygallery/miniatures/sun-eclipse.png" alt="Sun eclipse"></label></figure>
                <figure class="gallery-image"><label for="img8"><img src="mygallery/miniatures/andorra-sky1.jpeg" alt="Andorra sky 1"></label></figure>
                <figure class="gallery-image"><label for="img9"><img src="mygallery/miniatures/andorra-sky2.jpeg" alt="Andorra sky 2"></label></figure>

                <figure class="gallery-image"><label for="img10"><img src="mygallery/miniatures/moon2.jpeg" alt="Moon 2"></label></figure>
                <figure class="gallery-image"><label for="img11"><img src="mygallery/miniatures/naklo-sky1.jpeg" alt="Nakło sky 1"></label></figure>
                <figure class="gallery-image"><label for="img12"><img src="mygallery/miniatures/naklo-sky2.jpeg" alt="Nakło sky 2"></label></figure>

                <figure class="gallery-image"><label for="img13"><img src="mygallery/miniatures/gorce-sky1.jpeg" alt="Gorce sky 1"></label></figure>
                <figure class="gallery-image"><label for="img14"><img src="mygallery/miniatures/gorce-sky2.jpeg" alt="Gorce sky 1"></label></figure>
            </div>
            
            <form id="photos">
                <input type="radio" id="img1" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img14" class="previous"><span>&#8249;</span></label>
                    <label for="img2" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/moon1.jpeg" alt="Moon 1">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img2" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img1" class="previous"><span>&#8249;</span></label>
                    <label for="img3" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/planet-parade.png" alt="Planet parade">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img3" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>                        
                    <label for="img2" class="previous"><span>&#8249;</span></label>
                    <label for="img4" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/moon3.jpg" alt="Moon 3">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>      
                    </figure>
                </div>

                <input type="radio" id="img4" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img3" class="previous"><span>&#8249;</span></label>
                    <label for="img5" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/amsterdam-sky1.jpg" alt="Amsterdam sky 1">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img5" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img4" class="previous"><span>&#8249;</span></label>
                    <label for="img6" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/amsterdam-sky2.jpg" alt="Amsterdam sky 2">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img6" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img5" class="previous"><span>&#8249;</span></label>
                    <label for="img7" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/jupiter.jpeg" alt="Jupiter">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img7" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img6" class="previous"><span>&#8249;</span></label>
                    <label for="img8" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/sun-eclipse.png" alt="Sun eclipse">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img8" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img7" class="previous"><span>&#8249;</span></label>
                    <label for="img9" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/andorra-sky1.jpg" alt="Andorra sky 1">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img9" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img8" class="previous"><span>&#8249;</span></label>
                    <label for="img10" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/andorra-sky2.jpg" alt="">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img10" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img9" class="previous"><span>&#8249;</span></label>
                    <label for="img11" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/moon2.jpg" alt="">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img11" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img10" class="previous"><span>&#8249;</span></label>
                    <label for="img12" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/naklo-sky1.jpg" alt="">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img12" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img11" class="previous"><span>&#8249;</span></label>
                    <label for="img13" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/naklo-sky2.jpg" alt="">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img13" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img12" class="previous"><span>&#8249;</span></label>
                    <label for="img14" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/gorce-sky1.jpg" alt="">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <input type="radio" id="img14" name="picture">
                <div class="zoom">
                    <label for="reset"><span class="exit"></span></label>
                    <label for="img13" class="previous"><span>&#8249;</span></label>
                    <label for="img1" class="next"><span>&#8250;</span></label>
                    <figure class="zoomedimg">
                        <img src="mygallery/gorce-sky2.jpg" alt="">
                        <figcaption class="exit-x">
                            <label for="reset">
                                <svg width="3vw" height="3vw" viewBox="-200 -200 900 900">
                                    <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256"/>
                                </svg>
                            </label>
                        </figcaption>
                    </figure>
                </div>

                <button type="reset" form="photos" id="reset"></button>

            </form>
    </body>
</html>