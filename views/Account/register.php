<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Registration</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Pages</a></li>
            <li class="active">Registration</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form class="reg-page" action="/account/register" method="post" enctype="multipart/form-data">
                <div class="reg-header">
                    <h2>Register a new account</h2>
                    <p>Already Signed Up? Click <a href="/account/login" class="color-green">Sign In</a> to login your account.</p>
                </div>

                <?
                if($viewModel->exists("error")){
                    ?><h3 class="color-red"><? echo $viewModel->get("error")?></h3><?
                }
                ?>

                ?>
                <label>Username <span class="color-red">*</span></label>
                <input type="text" name="Username" class="form-control margin-bottom-20">

                <label>First name<span class="color-red">*</span></label>
                <input type="text" name="Firstname" class="form-control margin-bottom-20">

                <label>Last name <span class="color-red">*</span></label>
                <input type="text" name="Lastname" class="form-control margin-bottom-20">

                <label>Email Address <span class="color-red">*</span></label>
                <input type="text" name="EMail" class="form-control margin-bottom-20">

                <label>Profile Picture <span class="color-red">*</span></label>
                <input type="file" name="Picture" class="form-control margin-bottom-20">

                <label>Birth date <span class="color-red">*</span></label>
                <input type="file" name="Birthdate" class="form-control margin-bottom-20">

                <div class="row">
                    <div class="col-sm-6">
                        <label>Password <span class="color-red">*</span></label>
                        <input type="Password"  name="Password" class="form-control margin-bottom-20">
                    </div>
                    <div class="col-sm-6">
                        <label>Confirm Password <span class="color-red">*</span></label>
                        <input type="Password" name="PasswordConfirm" class="form-control margin-bottom-20">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-6 checkbox">
                        <label>
                            <input type="checkbox" Name="CheckTerms">
                            I read <a href="/home/terms" class="color-green">Terms and Conditions</a>
                        </label>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button class="btn-u" type="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!--/container-->
<!--=== End Content Part ===-->