<?php

include "db.php";
include "header.php";

?>

   
    <p><br /></p>
    <p><br /></p>
    <p><br /></p>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h1>Thankyou </h1>
                        <hr />
                        <p>Hello <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Your payment process is
                            successfully completed <br />
                            you can continue your Shopping <br /></p>
                        <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>
