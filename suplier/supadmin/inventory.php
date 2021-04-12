
    <?php
session_start();
include("./includes/db.php");


include "sidenav.php";
include "topheader.php";

?>
      <!-- End Navbar -->
       <div class="row" style="margin-top: 10vh;">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Total Laptops</p>
                    <h3 class="card-title">
                        <?php 
                       $sql_qry="SELECT SUM(qty) AS count FROM products where product_cat=1";

$duration = $con->query($sql_qry);
while($record = $duration->fetch_array()){
    $total = $record['count'];
}

echo "".$total." Items Left";

                          ?>

                    </h3>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Total Smartphones</p>
                    <h3 class="card-title">
                         <?php 
                       $sql_qry="SELECT SUM(qty) AS count FROM products where product_cat=2";

$duration = $con->query($sql_qry);
while($record = $duration->fetch_array()){
    $total = $record['count'];
}

echo "".$total." Items Left";

                          ?>

                    </h3>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Total Cameras</p>
                    <h3 class="card-title">
                       <?php 
                       $sql_qry="SELECT SUM(qty) AS count FROM products where product_cat=3";

$duration = $con->query($sql_qry);
while($record = $duration->fetch_array()){
    $total = $record['count'];
}

echo "".$total." Items Left";

                          ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Total Accessories</p>
                    <h3 class="card-title"> <?php 
                       $sql_qry="SELECT SUM(qty) AS count FROM products where product_cat=4";

$duration = $con->query($sql_qry);
while($record = $duration->fetch_array()){
    $total = $record['count'];
}

echo "".$total." Items Left";

                          ?></h3>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Others</p>
                    <h3 class="card-title"> <?php 
                       $sql_qry="SELECT SUM(qty) AS count FROM products where product_cat=5";

$duration = $con->query($sql_qry);
while($record = $duration->fetch_array()){
    $total = $record['count'];
}

echo "".$total." Items Left";

                          ?></h3>
                </div>

            </div>
        </div>
              

   <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Products List</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                      <tr>

                       <th>product_image</th>
                       <th>product_brand</th>
                       <th>product_title</th>
                         <th>Qantity left</th>
                        <th>
  
                    <tbody>
                      <?php 

                        $result=mysqli_query($con,"select product_image,product_brand, product_title,qty from products")or die ("query 1 incorrect.....");

                        while(list($image,$product_brand,$product_name,$qty)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td><img src='../../product_images/$image' style='width:50px; height:50px; border:groove #000'></td>
                                  <td>$product_brand</td>

                                  <td>$product_name</td>
                                  <td>$qty</td>
                       </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                 <?php 
//counting paging

                $paging=mysqli_query($con,"select  product_image,product_brand, product_title,qty from products");
                $count=mysqli_num_rows($paging);

                $a=$count/10;
                $a=ceil($a);
                
                for($b=1; $b<=$a;$b++)
                {
                ?> 
                <li class="page-item"><a class="page-link" href="inventory.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li>
                <?php 
}
?>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            
           

          </div>
          
          
        </div>
      </div>



    </div>

     
      <?php
include "footer.php";
?>