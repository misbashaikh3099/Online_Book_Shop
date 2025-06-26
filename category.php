<?php include_once('header.php');
include('hms/include/config.php');

?>
        
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
          </div>
      </div>
      </div>
  </div>
</section> 
                      
                        <!---->
                       