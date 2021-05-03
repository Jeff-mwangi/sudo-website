<?php
session_start();

 include "include/connect.php";
 include "include/functions.php";

 $user_data=check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sudos2</title>
    <!-- fontawesome -->
    <script src="../sudo2/js/all.min.js"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../sudo2/css/bootstrap.css">
    <!-- our styles.css -->
    <link rel="stylesheet" href="../sudo2/css/styles.css">
    <!-- js -->
    <script src="../sudo2/js/script.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <nav>
                <div class="col">
                    <ul>
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#team">Our Team</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="../sudo2/login/login.html" type="submit">Join Us</a></li>
                        <!-- <div class="#login-button">
                        <li><button class="btn btn-success" type="submit">Login</button></li>
                    </div> -->
                    </ul>
                </div>
            </nav>
                <div class="welcome">
                    <h1>Welcome To <span>Sudos</span> </h1>
                    <p>We are developers who like contributing to open-source projects.</p>
                </div>
                </div>
            </div>
        </div>
    </header>
    <div id="about">
        <div class="common">
        <h1>ABOUT <span>US</span></h1>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos laboriosam deleniti eum illo maxime! Adipisci suscipit aut, corrupti culpa, necessitatibus quisquam deserunt unde dolorum dignissimos quo ut, voluptates molestiae! Asperiores.</p>

   
    <div id="team">
        <h1 class="common">OUR <span>TEAM</span></h1>
                <div class="container">
                    <div class="row">
                        <p>Lorem ipsum dolor sit am tempore aliquid dicta cum animi do vero autem ipsum repellat reprehenderit blanditiis.</p>
                            <div class="col-sm-4">
                                <div id="status">
                                <div class="image"><img src="../sudo2/img/me.jpg" alt="" srcset=""></div>
                                <h4>Geoffrey Mwangi</h4>
                                <h5>C.E.O</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicinga, voluptatum accusamus nam quas perferendis, ab obcaecati dignissimos?</p>
                                <div class="fa fa-envelope"></div>
                                <div class="fa fa-latop"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div id="status">
                                <div class="image"><img src="../sudo2/img/mungai.jpg" alt="" srcset=""></div>
                                <h4>Geoffrey Mungai</h4>
                                <h5>Phyhon Guru</h5>
                                <p>Lorem ierunt nesciunt ipsam magnam reprehende luptatum accusamus nam quas perferendis, ab obcaecati dignissimos?</p>
                                <div class="fa fa-envelope"></div>
                                <div class="fa fa-latop"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div id="status">
                                <div class="image"><img src="../sudo2/img/conctact.jpg" alt="" srcset=""></div>
                                <h4>Nancy Maina</h4>
                                <h5>Machine Learning</h5>
                                <p>Lorem ipsum dolor serit labore eligendi inventore mollitia, voluptatum accusamus nam quas perferendis, ab obcaecati dignissimos?</p>
                                <div class="fa fa-envelope"></div>
                                <div class="fa fa-latop"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div id="status">
                                <div class="image"><img src="../sudo2/img/eras.jpg" alt="" srcset=""></div>
                                <h4>Erastus Muriithi</h4>
                                <h5>Database Guru</h5>
                                <p>Lorem ipsum  ipsam magnam reprehenderit labusamus nam quas perferendis, ab obcaecati dignissimos?</p>
                                <div class="fa fa-envelope"></div>
                                <div class="fa fa-latop"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div id="status">
                                <div class="image"><img src="../sudo2/img/carol.jpg" alt="" srcset=""></div>
                                <h4>Caroline Gatwiri</h4>
                                <h5>Web Developer</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicihenderit laitia, voluptatum accusamus nam quas perferendis, ab obcaecati dignissimos?</p>
                                <div class="fa fa-envelope"></div>
                                <div class="fa fa-latop"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div id="status">
                                <div class="image"><img src="../sudo2/img/ericG.jpg" alt="" srcset=""></div>
                                <h4>Eric Gacoki</h4>
                                <h5>Android CEO</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisam magnam reprehenderusamus nam quas perferendis, ab obcaecati dignissimos?</p>
                                <div class="fa fa-envelope"></div>
                                <div class="fa fa-latop"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contacts">
                        <div class="container">
                                <div class="form-group">
                                    <div class="subscribe">
                                        <input type="email" class="form-control" name="" id="">
                                    </div>
                                
                                <button class="btn btn-success" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </div>
    </div>
</body>
</html> 
