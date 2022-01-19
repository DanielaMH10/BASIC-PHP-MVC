<?php include "config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php include FOLDER_TEMPLATE . 'headLogin.php' ?>
    </head>

    <body>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form id="Form" action="<?= URL_CONTROLLER ?>User-controller.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">Welcome</span>
					<!--<span class="login100-form-title p-b-48"><i class="zmdi zmdi-font"></i></span>-->

					<div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="Document" id="Document" required>
						<span class="focus-input100" data-placeholder="Document"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="btn-show-pass"><i class="zmdi zmdi-eye"></i></span>
						<input class="input100" type="password" name="Pass" id="Pass" required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" id="submit">Login</button>
						</div>
					</div>
						<!--<a class="txt2" href="#">Sign Up </a>-->
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

        <!--<form id="Form" action="<?= URL_CONTROLLER ?>User-controller.php" method="POST">
            <h1 class="exampleone">Sign-in</h1><br/>
            <div class="mb-3">
                <label class="form-label">Document <input type="number" class="form-control" id="Document" name="Document" required/></label>
            </div>
            <div class="mb-3">
                <label class="form-label">Password <input class="form-control" type="password" id="Pass" name="Pass" required/></label>
            </div>
                <button type="submit" class="btn btn-primary" name="submit" id="submit" name="submit">Submit</button>
        </form>-->
        <?php include FOLDER_TEMPLATE . 'scriptsLogin.php' ?>
    </body>
    </html>


    
