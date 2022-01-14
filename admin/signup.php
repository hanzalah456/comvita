<?php include 'partials/header.php'; ?>
<section class="content-wrapper1">
    <div class="mainContainer">
        <section class="header">
            <p>SHOPPING CART / <span>LOGIN</span> </p>
        </section>
        <section class="main-info">
            <div class="container-1">
                <h2>MARKETING HEADER TO ENCOURAGE EVERYONE TO SIGNUP</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nulla lorem, auctor a mi at,
                    fringilla lobortis orci. Etiam ut auctor urna. Aliquam id sodales urna. Pellentesque tempor
                    lacus et enim ornare faucibus. Aliquam condimentum ornare volutpat.</p>
            </div>
            <div class="container-login">
                <div class="main-signup">
                    <div class="signup-form">
                        <h1> SIGNUP </h1>
                        <form name="formAdd" id="formAdd" method="post" action="act_signup.php">
                            <div class="form-container">
                                <input name="first_name" id="first_name" type="text" class="text-fields-two" placeholder="First Name" required>
                                <input name="last_name" id="last_name" type="text" class="text-fields-two" placeholder="Last Name" required>
                                <input name="email" id="email" type="email" class="text-fields-three" placeholder="Email">
                            </div>
                            <div class="form-container-one">
                                
                                <input type="text" name="mobile" id="mobile"  value="" maxlength="12" class="text-fields-three" 
                                placeholder="Mobile" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 ? null : event.charCode >= 48 && event.charCode <= 57)">
                            </div>
                            <div class="form-container-two">
                                <input name="password" id="password" type="password" class="text-fields-four" placeholder="Password">
                                <input name="confirm" id="confirm" type="password" class="text-fields-four" placeholder="Confirm">
                            </div>
                            <div class="form-container-three">
                                <ul>
                                    <li>
                                        <input type="checkbox" class="check">
                                        <p>Check here to notify you our latest discount offers</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkbox1">
                                <input type="checkbox" class="check">
                                <p>By clicking "Create Account" below, I
                                    acknowledge that I have read and agree to the Terms of Use and Privacy Policy.
                                </p>
                            </div>
                            <button id="submit" type="submit" class="button button2">CREATE ACCOUNT</button>
                            <div class="icon-container">
                                <div class="icon-one">
                                    <div class="img-new">
                                        <img src="assets/images/google-icon.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>GOOGLE</p>
                                    </div>
                                </div>
                                <div class="icon-two">
                                    <div class="img-new">
                                        <img src="assets/images/facebook-icon.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>FACEBOOK</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h4>Already have an account?</h4>
                        <a href="login.php"><button class="button button2">LOGIN</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<?php include 'partials/footer.php'; ?>