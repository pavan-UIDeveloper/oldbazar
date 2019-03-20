<?php

if(!empty($_COOKIE['user'])){
    header('location:myaccount.php');
}

include "header.php";
?>

<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Login</h2>
                            </div>
                            <?php
                            if(!empty($_GET['msg'])){
                                $succ = $_GET['msg'];
                                if($succ=='fail'){ ?>
                                        <h5 style="color:red">Login Fail</h5>
                                    <?php
                                    }
                                    }
                                    ?>
                            <form action="logincheck.php" method="post">
                                <div class="row">
                                                                        
                                    <div class="col-12 mb-3">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="password" name="pwd" class="form-control" id="password" placeholder="password" >
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span>Don't have a Account <a href="register.php"><u>click here to Register</u></a></span>
                                    </div>                                                                      
                                </div>
                                <div>
                                <input type="submit" id="submitbtn" value='Login'>
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