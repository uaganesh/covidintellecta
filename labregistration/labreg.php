<!DOCTYPE html>
<html>

<?//php include_once '../header/header.php'?>
	<head>
		<meta charset="utf-8">
		<title>Lab Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/stylelab.css">
	</head>
	<div id="bodycontent">
	<body  >

		<div class="wrapper">
            <form action="../includes/labregistrationscript.php" method="POST" id="wizard">
        		<!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <h3>Basic details</h3>
                	<div class="form-row">
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" name="labname" class="form-controller" placeholder="Registered Name of Lab" required>
                        </div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-smartphone-android"></i>
                            <input type="text" name="officecontact" class="form-controller" placeholder="Office Phone Number" required>
                        </div>
                	</div>
                    <div class="form-row">
                        <div class="form-holder">
                            <i class="zmdi zmdi-email"></i>
                            <input type="email" name="officeemail" class="form-controller" placeholder="Official email address" required>
                        </div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account-box-o"></i>
                            <input type="text" name="userid" class="form-controller" placeholder="Enter a User ID" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <i class="zmdi zmdi-map"></i>
                            <input type="text" name="state" class="form-controller" value="Kerala" readonly >
                        </div>
                        <div class="form-group">
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin"></i>
																<select id="pet-select" class="form-controller" name="idcard" required>
			<option value="">District</option>
			<option value="Kasargode">Kasargode</option>
			<option value="Kannur">Kannur</option>
			<option value="Kozhikode">Kozhikode</option>
			<option value="Wayanade">Wayanad</option>
			<option value="Malappuram">Malappuram</option>
			<option value="Thrissur">Thrissur</option>
			<option value="Palakkad">Palakkad</option>
			<option value="Eranakulam">Eranakulam</option>
			<option value="Alappuzha">Alappuzha</option>
			<option value="Idukki">Idukki</option>
			<option value="Kottayam">Kottayam</option>
			<option value="Pattanamtitta">Pattanamtitta</option>
			<option value="Kollam">Kollam</option>
			<option value="Trivandrum">Trivandrum</option>

	</select>
                            </div>
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin-drop"></i>
                                <input type="text" name="pincode" class="form-controller" max="6" min="0" placeholder="Pincode" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
											<div class="form-holder password">
													<i class="zmdi zmdi-eye"></i>
													<input type="text" class="form-controller" name="proregno" placeholder="Provisional Registration Number" required>
											</div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-smartphone-android"></i>
                            <input type="date" class="form-controller" name="dateofreg" placeholder="Date of Registration" required>
                        </div>

                    </div>
                </section>

				<!-- SECTION 2 -->
                <h4></h4>
                <section>
                	<h3>Password change</h3>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="password" class="form-controller" name="password" placeholder="Create a new password" required>
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="password" class="form-controller" name="confirmpassword" placeholder="Confirm Password" required>
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="file"  class="form-controller" >
														<label for="files">Upload Provisional Certificate as PDF</label>
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>

                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
									<h3>OWNER INFOMRATION</h3>
									<div class="form-row">
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" class="form-controller" name="ownername" placeholder="Full Name of the Owner" required>
                        </div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-smartphone-android"></i>
                            <input type="text" class="form-controller" name="personalphone" placeholder="Personal Phone Number" required>
                        </div>
                	</div>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="text" class="form-controller" name="address" placeholder="Enter Permanent Address of the Owner" required>
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>

										<div class="form-row">
													<div class="form-holder">
															<i class="zmdi zmdi-account"></i>
															<select id="pet-select" class="form-controller" name="idcard">
    <option value="">Choose ID Card</option>
    <option value="Adhaar Card">Adhaar Card</option>
    <option value="Pan Card">Pan Card</option>
    <option value="Driving License">Driving License</option>
    <option value="Passport">Passport</option>

</select>
													</div>
												</div>

                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="file"  class="form-controller" placeholder="New Password">
														<label for="files">Upload Government ID Proof</label>
                            <i class="zmdi zmdi-lock-open"></i>
                        </div>
                    </div>

                </section>

                <!-- SECTION 4 -->
                <h4></h4>
                <section>
                    <h3>FINAL CONFIRMAION</h3>
                    <div >
                        <table cellspacing="0" >
                            <tr >
                                <th>The information submitted should be genuine.Kindly check the details thoroughly and submit the application.If the application is approved the username and password will be same as submitted on application. Status of the application will be informed through official email address</th>
                                <td data-title="">

                                </td>
                            </tr>

                        </table>
                    </div>
                                       <button type="submit" style="display:none;"></button>
                </section>
            </form>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

		<script src="js/main.js"></script>

<!-- Template created and distributed by Colorlib -->
</div>
</body>
</html>
