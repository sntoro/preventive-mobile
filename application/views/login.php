<!-- Container-fluid starts -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <!-- Authentication card start -->
            <?php echo form_open('Login_c/tryLogin', 'class="md-float-material form-material"'); ?>

            <div class="text-center">
                <img src="<?php echo base_url('assets/images/aisin-logo.svg') ?>" alt="logo.png">
            </div>
            <div class="auth-box card">
                <div class="card-block">
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-center">Sign In</h3>
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <input type="text" name="usercode" class="form-control" required="" placeholder="Your NPK">
                        <span class="form-bar"></span>
                    </div>
                    <div class="form-group form-primary">
                        <input type="password" name="password" class="form-control" required="" placeholder="Password">
                        <span class="form-bar"></span>
                    </div>
                    <div class="row m-t-25 text-left">
                        <div class="col-12">
                            <div class="forgot-phone text-right f-right">
                                <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <!-- end of form -->
        </div>
        <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
</div>
<!-- end of container-fluid -->