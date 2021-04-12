
    <?php
session_start();
include("includes/db.php");
$user_id=$_REQUEST['product_id'];
$result=mysqli_query($con,"select product_id,product_cat,product_title, product_price,product_discount from products where product_id='$user_id'")or die ("query 1 incorrect.......");

list($product_id,$product_cat,$product_title,$product_price,$product_discount)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{

$product_id=$_POST['product_id'];
$product_cat=$_POST['product_cat'];
$product_title=$_POST['product_title'];
$product_price=$_POST['product_price'];
$product_discount=$_POST['product_discount'];

mysqli_query($con,"UPDATE products set product_id='$product_id', product_cat='$product_cat', product_title='$product_title',product_price='$product_price', product_discount='$product_discount' where product_id='$user_id'")or die("Query 2 is inncorrect..........");

header("location: productlist.php");
mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit User</h5>


              </div>
              <form action="edituser.php?id=$user_id" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                
                     <div class="col-md-12 ">
                      <div class="form-group">
                        <label>product_id</label>
                        <input type="text" id="last_name" name="product_id" class="form-control" value="<?php echo $product_id; ?>" >
                      </div>
                    </div>
                      <div class="col-md-12 ">
                      <div class="form-group">
                        <label>product_catagories</label>
                        <input type="text" id="product_cat" name="product_cat" class="form-control" value="<?php echo $product_cat; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>product_name</label>
                        <input type="text" id="product_title" name="product_title" class="form-control" value="<?php echo $product_title; ?>" >
                      </div>
                    </div>
                      <div class="col-md-12 ">
                      <div class="form-group">
                        <label>product_price</label>
                        <input type="text" id="product_price" name="product_price" class="form-control" value="<?php echo $product_price; ?>" >
                      </div>
                    </div>
                     <div class="col-md-12 ">
                      <div class="form-group">
                        <label>product_Discount</label>
                        <input type="text" id="product_discount" name="product_discount" class="form-control" value="<?php echo $product_discount; ?>" >
                      </div>
                    </div>
                   
                  
                  
                  
                
              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>
      <?php
include "footer.php";
?>
      <!-- End Navbar -->
