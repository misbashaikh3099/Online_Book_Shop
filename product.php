<?php include_once('header.php');
include('hms/include/config.php');

?>
        <section>
            <div class="Section3" style="background-image: url(img/new3.jpg); background-repeat: no-repeat; background-size: cover;">
                <div class="container bordered-container">
                  <h2><u>Categories</u></h2>
                    <div class="row" class="myrow">
                    <?php
                    $xyz=$_GET['edit'];
                    $sql1=mysqli_query($con,"select catslug from category where id='$xyz'");
                    $row1=mysqli_fetch_array($sql1);
                    //print_r($row1);
             $procat=$row1['catslug'];
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>

                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="course">
                                <div class="course-thumb">
                                <img src="hms/images/<?php echo $row['proimg'];?>" class="img" width="350" height="265"/>

                                </div>
                                <div class="wc-course-details">
                                    <h3><?php echo $row['proname'];?></h3>
                                    <p><?php echo $row['proprice'];?></p>
                                </div>
                                <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <button id="addItem" class="more_btn btn-success btn button">Add To Cart</button>
                                                                              <div class="alert-message"></div>

                                      </form>
                               
                            </div>
                        </div>
<?php } ?>
</div>
</div>
</div>
</section>   



<script>
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();

var pprice=form.find('.pprice').val();
//var $this = $(this);
var alertmsg=form.find('.alert-message');
$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
  console.log(response);
  alertmsg.html(response);

  // $this.closest('.alert-message').html(response)
  //$(this).closest('.alert-message').html(response);
 //alertmsg.html(response);
  //window.scrollto(0,0);
  load_cart_item_number();
}
});

 });

  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
 
</script>
                 <?php include_once('footer.php'); ?>


                       