<?php include_once('header.php');
include('hms/include/config.php');


?>
<!--Section 1 started-->
<section>
  <!--slider section-->

  <div class="main-slider">
    <div class="slider">
      <div>
        <div class="slider-img">
        <img src="img/sl2.jpg">	
        <div class="slider-text">
        <div class="container" id="slide">	
          <div class="col-md-8 textside position-relative">
              <div class="content text-center">
                <h6 class="mb-0 ">Welcome to Online Bookstore</h6>
                <h1 class="mb-0 ">Thank you for choosing " The Online Bookstore" as your trusted source.Happy reading!</h1>
                <a class="more_btn " href="#">Join Us Now</a>
              </div>
            </div>   		
        </div>
          
        </div>	
        </div>	<!-- img -->
      </div><!-- slider -->
      <div>
        <div class="slider-img ">
        <img src="img/sl1.jpg">	
        <div class="slider-text">
        <div class="container" id="slide">	
          <div class="col-md-8 textside position-relative">
              <div class="content text-center">
                <h6 class="mb-0 ">Welcome to Online Bookstore</h6>
                <h1 class="mb-0 ">Thank you for choosing " The Online Bookstore" as your trusted source.Happy reading!</h1>
                <a class="more_btn" href="#">Join Us Now</a>
              </div>
            </div>
        </div>
          
        </div>	
        </div>	<!-- img -->
      </div><!-- slider -->
       <div>
        <div class="slider-img ">
        <img src="img/sl3.webp">	
        <div class="slider-text">
        <div class="container" id="slide">	
          <div class="col-md-8 textside position-relative">
              <div class="content text-center">
                <h6 class="mb-0">Welcome to Online Bookstore</h6>
                <h1 class="mb-0">Thank you for choosing " The Online Bookstore" as your trusted source.Happy reading!</h1>
                <a class="more_btn" href="#">Join Us Now</a>
              </div>
            </div>
          
        </div>
          
        </div>	
        </div>	<!-- img -->
      </div><!-- slider -->
       
       </div>
  </div><!-- main-slider -->
</section>
<!--Section 1 end-->

<!--Section 2 start-->
  <section>
    <div class="Section2">
      <!---->
      <!---->
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-ly-6 col-sm-12 col-xs-12">
            <img src="img/Aboutus.jpg" height="90%" width="100%" class="abtusimg">
          </div>
          <div class="col-md-6 col-ly-6 col-sm-12 col-xs-12">
            <h2><u>About us</u></h2>
            <p><b>Welcome to Online Bookstore</b></p>
            <p>We are passionate about connecting readers with stories that inspires,entertain,and educate.</p>
            <p><b>Our collection spans </b> various genres,including fiction,non-fiction,mystry,science fiction,fantasy and more...</p>
            <p>We also offers <b> features </b>such as fast shippinh,secure online payments,and a user-friendly browsing experience to make your book shopping enjoyable.</p>
            <p>Thank you for choosing " The Online Bookstore" as your trusted source.Happy reading!</p>
            <a href="#" class="btn"><u>Read more</u></a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--Section 2 end-->

<!--Section 3 start-->
<section>
  <div class="Section3">
      <div class="container bordered-container">
        <h2><u>Categories</u></h2>
          <div class="row">
          <?php
           
$sql=mysqli_query($con,"select * from category LIMIT 3");


while($row=mysqli_fetch_array($sql))
{ 
  //print_r($row);
?>

              <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
              <h2><?php echo $row['catname'];?></h2>
                  <div class="course">
                      <div class="course-thumb">
                          <img src="hms/images/<?php echo $row['catimg'];?>" width="350" height="265" class="img">

                      </div>
                      <div class="wc-course-details">
                          <h3><?php echo $row['catname'];?>for the beginners</h3>
                      </div>
                      <a href="product.php?edit=<?php echo $row['id']?>" class="more_btn button">Show More</a>
                  </div>
              </div>

<?php }
?>
              <!--<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
              <h2>Web designing</h2>
                  <div class="course">
                      <div class="course-thumb">
                          <img loading="lazy" width="350" height="265" src="img/p3.jpeg" class="img" alt="">
                      </div>
                      <div class="wc-course-details">
                          <h3>Web designing and training guide</h3>
                          <p>Rs.300</p>
                      </div>
                      <a href="product2.php" class="more_btn button">Show More</a>
                  </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
              <h2>C programming</h2>
                  <div class="course">
                      <div class="course-thumb">
                          <img loading="lazy" width="350" height="265" src="img/p2.jpeg" class="img" alt="">
                      </div>
                      <div class="wc-course-details">
                          <h3>'C' programming for beginners</h3>
                          <p>Rs.300</p>
                      </div>
                      <a href="product3.php" class="more_btn button">Show More</a>
                  </div>
              </div>-->

              <!--<a href="product.php" class="shwbtn"><u>show more</u></a>-->
          </div>
      </div>
      </div>
  </div>
</section>
<!--section 3 end -->

<!--section 4 startd-->
<section>
  <section>
    <div class="Section4" style="background-image: url(img/new4jpeg.jpeg); background-repeat: no-repeat; background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="big_title">
              <h2><u>Contact us</u></h2>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                  <h2>Registration form</h2>
                  <div class="form">
                    <div class=" form col-12">
                      <form>
                      <input type="text" name="name" id="name" placeholder="Name" required class="form_data"><br>
                      <input type="text" name="no" id="no" placeholder="Contact no" required class="form_data" ><br>
                      <input type="email" name="email" id="email" placeholder="E-mail" required class="form_data"><br>
                      <button type="button" class="formbtn">Submit</button>
                      </form>
                    </div>
                  </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.5711830220334!2d74.23844747437303!3d16.69832852229115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1012e0a9ee47d%3A0x5baf02df0fb69f5d!2sPlatominds%20Services%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1717485172350!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
</section>
</section>
      </section>

 <?php include_once('footer.php');?>