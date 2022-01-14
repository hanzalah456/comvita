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
				<div class="left">
					<h2>LOGIN</h2>
					<form id="formLogin" id="formLogin" method="post" action="act_login.php">
						<input name="email" id="email" type="text" class="text-fields" placeholder="Enter your email">
						<input name="password" id="email" type="password" class="text-fields-one" placeholder="Password" img src="assets/images/eye-icon.png">
						<p>Forgot Password?</p>
						<button>LOGIN</button>
						<div class="icon-container">
							<div class="icon-three">
								<div class="img-new">
									<img src="assets/images/google-icon.png" alt="">
								</div>
								<div class="text">
									<h6>GOOGLE</h6>
								</div>
							</div>
							<div class="icon-four">
								<div class="img-new">
									<img src="assets/images/facebook-icon.png" alt="">
								</div>
								<div class="text">
									<h6>FACEBOOK</h6>
								</div>
							</div>
						</div>
					</form>
					<h3>Don't have an account?</h3>
					<a href="signup.php"><button>SIGNUP</button></a>

				</div>

				<div class="right">
					<div class="right-info">
						<h2>CHECKOUT AS GUEST</h2>
						<p>You can earn rewards on your every purchase by creating account</p>
						<button>CHECKOUT AS GUEST</button>
					</div>
				</div>

			</div>
		</section>
	</div>

	<!-- <div class="contaniner-one"> -->
	<!-- 	
            <div class="bannerone">
               <h2>MARKETING HEADER TO ENCOURAGE EVERYONE TO SIGNUP</h2>
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nulla lorem, auctor a mi at, fringilla lobortis orci. Etiam ut auctor urna. Aliquam id sodales urna. Pellentesque tempor lacus et enim ornare faucibus. Aliquam condimentum ornare volutpat.</p>
            </div>
        </div>
        </div> -->

</section>
<?php include 'partials/footer.php'; ?>