<?php
include "common/set_cookie.php";
include "header.php";
include "common/db.php";
$select_category = "SELECT * From categories";

$cat_result=mysql_query($select_category);

?>

 <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Post Add</h2>
                            </div>
                            <?php
                            if(!empty($_GET['msg'])){
                                $succ = $_GET['msg'];
                                if($succ=='success'){ ?>
                                        <h5 style="color:green">Your Ad Posted Successfully</h5>
                                    <?php
                                    }
                                    }
                                    ?>
                            <form action="post_save.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                                                       
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" required name="Product_Tittle" id="Product_Tittle" placeholder="Product Tittle" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                   
                                        <select class="w-100" required id="country" name="Product_category">                                        
                                        <option value="">Product category</option>
                                         <?php while($cat_res=mysql_fetch_assoc($cat_result)){ ?>   
                                        <option value="<?php echo $cat_res['rec_id']; ?>"><?php echo $cat_res['category_name']; ?></option> 
                                        <?php } ?>                                       
                                    </select>
                                    </div>
                                     <div class="col-12 mb-3">
                                        <input type="text" required class="form-control mb-3" id="Product_price" name="Product_price" placeholder="Product price" value="">
                                    </div> 
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" id="Product_Description" name="Product_Description" placeholder="Product Description" value="">
                                    </div>                                   
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone No" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="city" name="loaction" placeholder="location" value="">
                                    </div>
                                    <div class="col-12 mb-0 text-primary">
                                        <label>Upload Your product pic Below</label>
                                    </div> 
                                    <div class="col-12 mb-3">
                                        <input type="file" class="form-control mb-3" id="Product_Description" name="product_image" placeholder="" value="">
                                    </div>                                                                
                                </div>
                                <div class="cart-btn mt-0">
                                <input type="submit" id="submitbtn">
                            </div>          
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
</div>
        <?php
        include "footer.php";
        ?>


        
<?php


 ?>