<?php

include "header.php";

?>
<div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Register</h2>
                            </div><?php
                            if(!empty($_GET['msg'])){
                                $succ = $_GET['msg'];
                                if($succ=='success'){ ?>
                                <h5 style="color:green">Registerd Success Fully</h5>
                                <?php }
                                    else {
                                        ?>
                                        <h5 style="color:red">Registration Fail</h5>
                                    <?php
                                    }
                                    }
                                    ?>
                            <form action="rigistersave.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="fn" id="first_name" value="" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="ln" id="last_name" value="" placeholder="Last Name" required>
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="ph" id="phone_number" placeholder="Phone No" >
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="password" class="form-control" name="pwd" id="pass_word" placeholder="Password" >
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" name="addr" id="street_address" placeholder="Address" value="">
                                    </div>                                   
                                    
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="city" id="city" placeholder="City" value="">
                                    </div>
                                    <div class="cart-title">
                                        <h5 style="color:green;display:block;">Existing User <a  style="color:blue" href="login.php">Login Here</a></h5>
                                    </div>                 
                                </div>
                                <div>
                                <input id="submitbtn" type="submit" value="Register">
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