<?php
require_once './admin/config.php';
// logo file name html
$result_html = mysqli_query($con, "select * from tbl_logo where id = 1 ");
$row_html = mysqli_fetch_assoc($result_html);
    

// end logo file name html
// home
$result_home = mysqli_query($con, "select * from tbl_home where id = 1 ");
$row_home = mysqli_fetch_assoc($result_home);
// end home
//  title
$result_title = mysqli_query($con, "select * from tbl_title where id = 1 ");
$row_title = mysqli_fetch_assoc($result_title);
    

//  end title

// about us
$result_aboutus = mysqli_query($con, "select * from tbl_aboutus where id = 1 ");
$row_aboutus = mysqli_fetch_assoc($result_aboutus);
// about us image coding    
$result_aboutus_image = mysqli_query($con, "select * from tbl_aboutus_image");

// end about us
//
// servece
$result_service = mysqli_query($con, "select * from tbl_service where id = 1 ");
$row_service = mysqli_fetch_assoc($result_service);

$result_icons = mysqli_query($con, "select * from tbl_service_icon");
$row_icons = mysqli_fetch_assoc($result_icons);

// end service
//
// portfolio
$result_portfolio = mysqli_query($con, "select * from tbl_portfolio where id = 1 ");
$row_portfolio = mysqli_fetch_assoc($result_portfolio);
// about us image coding    
$result_portfolio_image = mysqli_query($con, "select * from tbl_portfolio_image");

// end portfolio
//
// contect
$result_footer = mysqli_query($con, "select * from tbl_footer where id = 1 ");
$row_footer = mysqli_fetch_assoc($result_footer);
// end contect
//
// share icon
$result_shareicon = mysqli_query($con, "select * from tbl_shareicon");
// end share icon

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $gettbl_contact = mysqli_query($con," INSERT INTO tbl_contact(name,email,subject,message)"
            
            . "VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')");
}
$select_query = mysqli_query($con, "SELECT * FROM `tbl_contact` ");
?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?=$row_title['title_main_title']?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?=$row_title['title_text1']?>" />
        <meta name="author" content="<?=$row_title['title_sub_title']?>" />
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="css/lightbox.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet" />
        <!--<link href="assets/css/animate.css" rel="stylesheet" />-->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Roboto+Condensed:400,300,700" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="css/default.css" rel="stylesheet" />
        <link rel="icon" href="img/<?= $row_html['image']?>" type="image/gif" sizes="16x16"> 
    </head>

    <body>
        <header>
            <!-- start top -->
            <div id="topnav" class="navbar navbar-fixed-top default">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html"><img src="img/<?= $row_html['image']?>" alt="" style="width: 159%;height: 34px;"/></a>
                        </div>
                        <div class="navigation">
                            <nav>
                                   <ul class="nav pull-right">
                                    <?php
                                    if(!empty($row_home['switch']))
                                    {
                                    ?> 
                                    <li class="current"><a href="#intro">Home</a></li>
                                   <?php } ?>
                                    
                                    <?php
                                    if(!empty($row_aboutus['switch']))
                                    {
                                    ?>
                                    <li><a href="#about">About</a></li>
                                    <?php } ?>           
                                    <?php
                                    if(!empty($row_service['switch']))
                                    {
                                    ?> 
                                    <li><a href="#services">Services</a></li>
                                    <?php }?>
                                    <?php
                                    if(!empty($row_portfolio['switch']))
                                    {
                                    ?> 
                                    <li><a href="#works">Portfolio</a></li>
                                    <?php }?>
                                    <?php
                                    if(!empty($row_footer['switch']))
                                    {
                                    ?> 
                                    <li><a href="#contact">Contact</a></li>
                                    <?php } ?>
                                   </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- section intro -->
        
         <?php
       if(!empty($row_home['switch']))
       {
       ?> 
        <section id="intro">
            <div class="slogan">
                <div class="icon">
                    <i class="icon-qrcode icon-10x"></i>
                </div>
                <h1><span><?=$row_home['main_title']?></span></h1>
                <h2><?=$row_home['sub_title']?></h2>
            </div>
        </section>
        <?php 
        
       }
       ?>
        <!-- end intro -->
        <!-- Section about -->
          <?php
       if(!empty($row_aboutus['switch']))
       {
       ?> 
        <section id="about" class="section">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="heading">
                            <h3><span><?=$row_aboutus['about_title']?></span></h3>
                        </div>
                        <div class="sub-heading">
                            <p>
                                <?=$row_aboutus['latest_title']?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <?php
                    while ($row_about =  mysqli_fetch_assoc($result_aboutus_image))
                    {
                    ?>
                    <div class="span3">
                        <a href="admin/images/<?=$row_about['image']?>" class="link-preview" data-lightbox="portfolio" data-title="Williams Ethan" title="Preview">
                            <img src="admin/images/<?=$row_about['image']?>" alt="" class="img-polaroid" /> </a>
                        <div class="roles">
                            <h5><strong><?=$row_about['name']?></strong></h5>
                        </div>
                    </div>
                    <?php 
                           }
                    ?>
                    
                    
               
                </div>
            </div>
        </section>
       <?php } ?>
  <?php
       if(!empty($row_service['switch']))
       {
       ?> 
        <section id="services" class="section parallax dark">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="heading">
                            <h3><span><?=$row_service['service_title']?></span></h3>
                        </div>
                        <div class="sub-heading">
                            <p>
                             <?=$row_service['sub_service']?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <?php
                    while ($row_icons =  mysqli_fetch_assoc($result_icons))
                    {
                    ?>
                    
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="halftop">
                                <i class="<?=$row_icons['icon1']?>" style="font-size:48px;color:red"></i>
                                <h4><strong><?=$row_icons['sub_title1']?></strong></h4>

                            </div>
                            <p>
                               <?=$row_icons['last_title1']?>
                            </p>
                            
                        </div>
                    </div>
                    <?php } ?>
                 
                    
                </div>
            </div>
       </section><?php } ?>
        <!-- end section services -->
        <!-- section works -->
        <?php
       if(!empty($row_portfolio['switch']))
       {
       ?> 
        <section id="works" class="section gray-bg">
            <div class="container">
                <div class="row">
                    
                      
                    <div class="span12">
                        <div class="heading">
                            <h3><span><?=$row_portfolio['one_title']?></span></h3>
                        </div>
                        <div class="sub-heading">
                            <p>
                                <?=$row_portfolio['two_title']?>
                            </p>
                        </div>
                    </div>
                  
                    
                </div>
                <div class="row">
                    <div class="span12">

                        <div class="clear">
                        </div>
                        <div class="row">
                            <ul class="portfolio-area da-thumbs">
                                
                                <?php
                    while ($row_portfolio =  mysqli_fetch_assoc($result_portfolio_image))
                    {
                    ?>
                                <li class="portfolio-item" data-id="id-0" data-type="web">
                                    <div class="span3">
                                        <div class="thumbnail">
                                            <div class="image-wrapp">
                                                <img src="admin/images/<?=$row_portfolio['image']?>" alt="Portfolio name" title="" />
                                                <article class="da-animate da-slideFromRight" style="display: block;">
                                                    <h5><strong><?=$row_portfolio['name']?></strong></h5>

                                                    <span><a class="zoom" data-pretty="prettyPhoto" href="admin/images/<?=$row_portfolio['image']?>">
                                                            <i class="icon-rounded icon-48 icon-zoom-in "></i>
                                                        </a></span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                  <?php
                    }
                    ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <?php } ?>
        <!-- section works -->
        <!-- section contact -->
           <?php
       if(!empty($row_footer['switch']))
       {
       ?> 
        <section id="contact" class="section">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="heading">
                            <h3><span><?=$row_footer['main_title']?></span></h3>
                        </div>
                        <div class="sub-heading">
                            <p>
                                <?=$row_footer['sub_title']?>
                               
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-container">
            </div>

            <div class="container">
                <div class="row">
                    <div class="span6">
                        <!--<h4><i class="icon-suitcase"></i><strong>Our office</strong></h4>-->
                        <!--<p>-->
                        <!--You can write a descriptive paragraph describing your best friend, including what she likes and dislikes, where she lives-->
                        <!--</p>-->
                        <!--<div class="dotted_line">-->
                        <!--</div>-->
                        <p>
                            <strong><?=$row_footer['address_title']?></strong>
                        </p>
                        
                        <p>
                            <strong><?=$row_footer['sub_address']?></strong>
                        </p>
                        <div class="dotted_line">
                        </div>
                        <h4><i class="icon-group"></i><strong><?=$row_footer['profile']?></strong></h4>
                        <div class="social-links">
                            <ul class="social-links" style="font-size: 50px;">
                                      <?php
                                      
                    while ($row_shareicon =  mysqli_fetch_assoc($result_shareicon))
                    {
                    ?>
                          
                            
                            
                                <li><a href="<?=$row_shareicon['link']?>" title="Twitter"><i class="<?=$row_shareicon['icon']?>"></i></a></li>
                                
                            
                            
                                       <?php
                    }
                    ?>
                            </ul>    
                            
                            
                        </div>
                    </div>



                    <div class="span6">
                        <!--<h4><i class="icon-envelope"></i><strong></strong></h4>-->
                        <p>

                        </p>
                        <!-- start contact form -->
                        <form action="" method="post" role="form" class="contactForm">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>

                            <ul class="contact-list">
                                <li class="form-group">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="name" class="form_input" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                <li class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input type="email" class="form_input" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </li>
                                <li class="form-group">
                                    <label>Subject <span>*</span></label>
                                    <input type="text" class="form_input" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </li>

                                <li class="form-group">
                                    <label>Your message <span>*</span></label>
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" style="width: 95%;"></textarea>
                                    <div class="validation"></div>
                                </li>
                                <li class="last">
                                    <button class="btn btn-large btn-theme" type="submit" id="send" name="submit">Send a message</button>
                                </li>
                            </ul>
                        </form>


                    </div>


                </div>
            </div>
        </section>   <?php } ?>
        <!-- end section contact -->

        <footer>
            <div class="verybottom">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="aligncenter">
                                <div class="logo" style="margin-bottom: -40px;">
                                    <a class="brand" href="index.html"><img src="img/<?= $row_html['image']?>" alt="" style="width: 159px;height: 34px;" /></a>
                                   <?=$row_footer['designed']?> <a href="https://www.bladephp.co/">bladephp.co</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
        <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>


        <script src="assets/js/jquery.min.js"></script>
        <!--<script src="assets/js/jquery.easing.js"></script>-->
        <!--<script src="assets/js/bootstrap.js"></script>-->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!--<script src="assets/js/nagging-menu.js"></script>-->
        <script src="assets/js/jquery.nav.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.quicksand.js"></script>
        <!--<script src="assets/js/portfolio/setting.js"></script>-->
        <script src="js/jquery-hover-effect.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--<script src="assets/js/animate.js"></script>-->
        <script src="js/lightbox.min.js`"></script>

        <!--<script src="contactform/contactform.js"></script>-->

        <script src="js/custom.js"></script>

    </body>

</html>
