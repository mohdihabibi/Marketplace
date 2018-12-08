<?php


//program for market place
//Read the json encoded top 5 products from member websites
//json_decode and process
// $link = mysqli_connect("localhost:3306", "softwby8", "Meh2Fere@1", "softwby8_newdb");

// if($link === false){
//   die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// // $query = "SELECT * FROM product_rating";
// // $result = mysqli_query($link, $query);

// $row = mysqli_fetch_row($result);

// foreach ($products as $product) {
//   $query = "SELECT * FROM product_rating where product_name ='". $product->name. "'";
//   $result = mysqli_query($link, $query);
//   if(mysqli_num_rows($result) > 0){
//     $row = mysqli_fetch_row($result);
//     $row[1]+= $product->

//     $sql = "INSERT INTO web_site_users ( fullname,  email , username , password) 
//      values('$name', '$email', '$username' , '$password' )";

//    if (mysqli_query($link, $sql)) 
//    {
//        $error_msg=  "New record created successfully";
//             header("location: ./signin.php");
//    } else 
//    {
//        $error_msg=  "Error: " . $sql . "<br>" . mysqli_error($conn);
//    }
//   }
// }  

// $url= "http://localhost/top5.php";
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
// curl_setopt($ch, CURLOPT_URL, $url);
// $data = curl_exec($ch);
// curl_close($ch);
// $data_array = json_decode($data, true);
// $product = $data_array;

// $url= "http://localhost/top5.php";
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
// curl_setopt($ch, CURLOPT_URL, $url);
// $data = curl_exec($ch);
    
// curl_close($ch);
// $data_array = json_decode($data, true);
// $product = array_merge($data_array, $product);

// $url= "http://localhost/top5.php";
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
// curl_setopt($ch, CURLOPT_URL, $url);
// $data = curl_exec($ch);
    
// curl_close($ch);
// $data_array = json_decode($data, true);
// $product = array_merge($data_array, $product);

// $url= "http://localhost/top5.php";
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
// curl_setopt($ch, CURLOPT_URL, $url);
// $data = curl_exec($ch);
    
// curl_close($ch);
// $data_array = json_decode($data, true);
// $product = array_merge($data_array, $product);

// foreach ($products as $product) {
//     print $product->product_id;
//     print " , ";
//     print $product->product_name;
//     print " , ";
//     print $product->product_description;
//     print " , ";
//     print $product->rating;
//     print "<br>";
// }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Marketplace</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#analytics">Analytics</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../logout.php">Logout</a>
            </li>           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Marketplace!</div>
          <div class="intro-heading text-uppercase">It's Nice To Have You Here</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Here are all the services we are offering here.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">E-Commerce</h4>
            <p class="text-muted">Buy anything you are looking for.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-plane fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Book Flights</h4>
            <p class="text-muted">Booking flights made easier. Specially for students!</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-hotel fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Book Hotels</h4>
            <p class="text-muted">Any travel related services. From booking flights and hotels to passport and visa services.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <a class="col-md-4 col-sm-6 portfolio-item" href = "http://www.darter.online?secret=nvDSpUI4R6iga0xfcvO7-V-s">
            <img class="img-fluid" src="img/portfolio/flight.jpg" alt="">
            <div class="portfolio-caption">
              <h4>Affordable Booking</h4>
              <p class="text-muted">Darter World Travel Company</p>
            </div>
          </a>
          <a class="col-md-4 col-sm-6 portfolio-item" href="http://nasrajan.theeram.net?secret=nvDSpUI4R6iga0xfcvO7-V-s">
            <img class="img-fluid" src="img/portfolio/gallery.jpg" alt="">
            <div class="portfolio-caption">
              <h4>Art Gallery</h4>
              <p class="text-muted">Hearty Arts</p>
            </div>
          </a>
          <a class="col-md-4 col-sm-6 portfolio-item" href = "http://www.cyphernet.online/adventure/index.php?secret=nvDSpUI4R6iga0xfcvO7-V-s">
            <img class="img-fluid" src="img/portfolio/agency.jpg" alt="">
            <div class="portfolio-caption">
              <h4>Travel Agency</h4>
              <p class="text-muted">Crossworld Holidays Tours</p>
            </div>
          </a>
          <a class="col-md-4 col-sm-6 portfolio-item" href = "http://codeweb.online/crunchiestomunchies?secret=nvDSpUI4R6iga0xfcvO7-V-s">
            <img class="img-fluid" src="img/portfolio/food.png" alt="">
            <div class="portfolio-caption">
              <h4>Grocery</h4>
              <p class="text-muted">Crunchies to Munchies</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">We are a team of enthusiast Software Engineers.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Aug 18-Sep 18</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Worked on our individual websites to create diverse services.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>October 2018</h4>
                    <h4 class="subheading">A Marketplace is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">We decided to create a marketplace to create a unified experience.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>November 2018</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Integration was completed. All services went live in this month.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2018</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Enhanced the experience for all users.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">A group of fun and tenured Software Engineers.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="../images/priyanka.png" alt="">
              <h4>Priyanka</h4>
              <p class="text-muted">Software Engineer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="../images/shalu1.png" alt="">
              <h4>Shalu Rani</h4>
              <p class="text-muted">Software Engineer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="../images/mohdi.png" alt="">
              <h4>Mohdi Habibi</h4>
              <p class="text-muted">Software Engineer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="../images/supriya.png" alt="">
              <h4>Supriya</h4>
              <p class="text-muted">Software Engineer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="../images/nasrajan.png" alt="">
              <h4>Nasrajan</h4>
              <p class="text-muted">Software Engineer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Analytics -->
    <section id="analytics">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Analytics</h2>
              <h3 class="section-subheading text-muted">Most visited products and Highest rated products.</h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-6">
              <h4 class="service-heading">Top 5 Highest Rated Products</h4>
              <p class="text-muted"></p>
            
              <?php
                $url= "http://nasrajan.theeram.net/top5.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                curl_close($ch);
                $data_array = json_decode($data, true);
                $products = $data_array;
                
                $url= "http://www.cyphernet.online/adventure/top5.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                    
                curl_close($ch);
                $data_array = json_decode($data, true);
                $products = array_merge($data_array, $products);

                $url= "http://codeweb.online/crunchiestomunchies/top5.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                    
                curl_close($ch);
                $data_array = json_decode($data, true);
                $products = array_merge($data_array, $products);

                $url= "http://www.darter.online/top5.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                    
                curl_close($ch);
                $data_array = json_decode($data, true);
                $products = array_merge($data_array, $products);
                
                // sorting the array
                $visits  = array_column($products, 'rating');
                $name = array_column($products, 'product_name');

                // Sort the data with volume descending, edition ascending
                // Add $data as the last parameter, to sort by the common key
                array_multisort($visits, SORT_DESC, $name, SORT_ASC, $products);
                $counter = 0;
                foreach ($products as $product) {
                  if ($counter == 5){
                    break;
                  }
              ?>
              
              <a href="<?php  $redirecturl = urldecode($product['product_url']);
                            echo $redirecturl;?>" >
               <img style="width:70%; height:15%;" src="<?php  $imgurl = urldecode($product['product_image']);
                            echo $imgurl;?>" alt=""/>
              </a>
             <br/>
              <?php
                  echo $product['product_name'];
                  echo " : "; 
                  echo $product['rating'];
                  echo "<br>";
                  $counter++;
                }
              ?>
            </div>
            <div class="col-md-6">
              <h4 class="service-heading">Top 5 Most Visited Products</h4>
              <p class="text-muted"></p>
              <p class="text-muted"></p>
              <?php
                $url= "http://nasrajan.theeram.net/top5_mostvisited.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                curl_close($ch);
                $data_array = json_decode($data, true);
                $products = $data_array;
                
                $url= "http://www.cyphernet.online/adventure/mostvisited.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                    
                curl_close($ch);
                $data_array = json_decode($data, true);
                $products = array_merge($data_array, $products);

                $url= "http://www.darter.online/mostvisited.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                    
                curl_close($ch);
                $data_array = json_decode($data, true);
                $products = array_merge($data_array, $products);

                $url= "http://codeweb.online/crunchiestomunchies/top5_mostvisited.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_URL, $url);
                $data = curl_exec($ch);
                    
                curl_close($ch);
                $data_array = json_decode($data, true);
                $products = array_merge($data_array, $products);
                
                // sorting the array
                $visits  = array_column($products, 'visits');
                $name = array_column($products, 'product_name');

                // Sort the data with volume descending, edition ascending
                // Add $data as the last parameter, to sort by the common key
                array_multisort($visits, SORT_DESC, $name, SORT_ASC, $products);
                $counter = 0;
                foreach ($products as $product) {
                  if ($counter == 5){
                    break;
                  }
             ?>
              <!-- Code for Product Images and Redirect Url -->
                <a href="<?php  $redirecturl = urldecode($product['product_url']);
                            echo $redirecturl;?>" >
                <img style="width:75%; height:18%;" src="<?php  $imgurl = urldecode($product['product_image']);
                            echo $imgurl;?>" alt=""/>
                </a>
                <br/>
  
              <?php
                  echo $product['product_name'];
                  echo " : "; 
                  echo $product['visits'];
                  echo "<br>";
                  $counter++;
               ?>
               <br/>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Write to us. We love your feedback.</h3>
          </div>
        </div>
           <center>
            <div class="form-group">
            <select id= "select" name="test">
            <option value="darter">Darter World</option>
            <option value="hearty">Hearty Hearts</option>
            <option value="crossworld">CrossWorld</option>
            <option value="crunchies">Crunchies to Munchies</option>
            </select>
            <p class="help-block text-danger"></p>
          </div>    
           </center>         
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
