<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>







		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>MyGilmore</title>
	  	<link href="styles.css" rel="stylesheet" type="text/css" />
	  
	</head>
	<body>




		<div id="container">
			<div id="main">

								<a href="contribute.php"><img src="images/donate.gif" alt="Donate" style="float: right; margin-right: -17px; margin-top: -15px;" /></a>
				<div id="header">
					<a href="index.php"><img src="images/logo.gif" alt="Gilmore For President - Gilmore '08" /></a>
				</div>
				<div id="menu">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td width="13%"><div class="menu_item"><a href="about.php"><img src="images/menu_about.gif" alt="About Jim" /></a></div></td>
							<td width="13%"><div class="menu_item"><a href="issues.php"><img src="images/menu_issues.gif" alt="The Issues" /></a></div></td>
                            <td width="13%"><div class="menu_item"><a href="mygilmore.php"><img src="images/menu_mygilmore.gif" alt="MyGilmore" /></a></div></td>
							<td width="13%"><div class="menu_item"><a href="contribute.php"><img src="images/menu_donate.gif" alt="Donate" /></a></div></td>
                            <td width="15%"><div class="menu_item"><a href="press.php"><img src="images/menu_press.gif" alt="Press Center" /></a></div></td>
							<td width="16%"><div class="menu_item"><a href="view.php?mode=events"><img src="images/menu_events.gif" alt="Events Calendar" /></a></div></td>
							<td width="15%"><div class="menu_item"><a href="blog/index.php"><img src="images/menu_blog.gif" alt="Official Blog" /></a></div></td>
						</tr>
					</table>
				</div>
				<div id="content">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr valign="top">
							<td width="422">
								
                                										
								<div class="section_left_top" style="margin-top: 0;">&nbsp;</div>
									<div class="section_left">
										<div class="section_header">
											<img src="images/stars.gif" alt="* * * *" class="stars" />
											<img src="images/t_my_gilmore_login.gif" alt="Login To MyGilmore" />
										</div>
										<div class="directions">
											Login here if you already have an account. If you don't just use the form
											below to signup.
										</div>
										<form style="margin: 10px 0 0 0;" action="mygilmore.php" method="post">
											<div style="float: left; width: 42%;">
												<div class="label">Email</div>
												<div>
													<span class="styled">
														<input type="text" class="styled" name="email" id="email" tabindex="1" />
													</span>
												</div>
											</div>
											
											<div style="float: left; width: 42%;">
												<div class="label">Password</div>
												<div>
													<span class="styled">
														<input type="password" class="styled" name="password" id="password" tabindex="2" value="" />
													</span>
												</div>
											</div>
											
											<div style="width: 10%; float: left;">
												<div class="label">&nbsp;</div>
												<div>
													<span class="styled">
														<input type="submit" value="Login" tabindex="3" />
													</span>
												</div>
											</div>
											<div class="clear"></div>
																					</form>
									</div>
									<div class="section_left_bottom">
										<div class="text">
                                        	<!--
											<img src="images/arrow.gif" alt="^" />
											<a href="press.php">Forget your username/password?</a>
                                            -->
										</div>
									</div>
									
									
									<script type="text/javascript">
										function check() {
											var first_name	= document.getElementById('first_name').value;
											var last_name	= document.getElementById('last_name').value;
											var zip			= document.getElementById('zip').value;
											var email		= document.getElementById('email2').value;
											var password	= document.getElementById('password2').value;
											var conf		= document.getElementById('confirm').value;
											var site		= document.getElementById('site').value;
											
											if(first_name.length == 0 || last_name.length == 0 ||
													zip.length == 0 || email.length == 0 || password.length == 0 ||
													conf.length == 0 || site.length == 0) {
												alert('You must fill in all form fields!');
												return false;	
											}
											
											if(password.length < 6) {
												alert('Your password must be at least 6 characters long!');
												return false;
											}
											
											if(password != conf) {
												alert('Your password does not match your confirmation password!');
												return false;
											}
											
											document.getElementById('signup_form').submit();
										}
									</script>
									
									<div class="section_left_top">&nbsp;</div>
									<div class="section_left">
										<div class="section_header">
											<img src="images/stars.gif" alt="* * * *" class="stars" />
											<img src="images/t_my_gilmore_join.gif" alt="Join MyGilmore" />
										</div>
										<div class="directions">
											Join MyGilmore by filling out the form below. All fields are required.
										</div>
										<form id="signup_form" style="margin: 10px 0 0 0;" action="mygilmore.php" method="post">
											<div style="float: left; width: 50%;">
												<div class="label">First Name</div>
												<div>
													<span class="styled">
														<input type="text" class="styled" name="first_name" id="first_name" tabindex="4" />
													</span>
												</div>
											</div>
											
											<div style="float: left; width: 50%;">
												<div class="label">Last Name</div>
												<div>
													<span class="styled">
														<input type="text" class="styled" name="last_name" id="last_name" tabindex="5" />
													</span>
												</div>
											</div>
											
											<div class="clear"></div>
											
											<div style="float: left; width: 50%;">
												<div class="label">Zip Code</div>
												<div>
													<span class="styled">
														<input type="text" class="styled" name="zip" id="zip" tabindex="6" />
													</span>
												</div>
											</div>
											
											<div style="float: left; width: 50%;">
												<div class="label">Email Address</div>
												<div>
													<span class="styled">
														<input type="text" class="styled" name="email2" id="email2" tabindex="7" />
													</span>
												</div>
											</div>
											
											<div class="clear"></div>
											
											<div style="float: left; width: 50%;">
												<div class="label">Password</div>
												<div>
													<span class="styled">
														<input type="password" class="styled" name="password2" id="password2" tabindex="8" />
													</span>
												</div>
											</div>
											
											<div style="float: left; width: 50%;">
												<div class="label">Password Confirmation</div>
												<div>
													<span class="styled">
														<input type="password" class="styled" name="confirm" id="confirm" tabindex="9" />
													</span>
												</div>
											</div>
											
											<div class="clear"></div>
                                            
                                            <div style="float: left; width: 50%;">
												<div class="label"></div>
												<div style="padding-top:22px; margin-left:-5px;">
													<span class="label">
														www.gilmoreforpresident.com/mygilmoresite/
													</span>
												</div>
											</div>
                                            
                                            <div style="float: left; width: 50%;">
												<div class="label">Your MyGilmore Web Address</div>
												<div>
													<span class="styled">
														<input type="text" class="styled" name="site" id="site" tabindex="10" />
													</span>
												</div>
											</div>
											
											<div class="clear"></div>                                               
											<div style="text-align: center;" class="label">
												Publicize this web site address to your friends and family!
                                            </div>
											<div style="text-align: center;">
												<input type="button" onclick="check(); return false;" value="Join Now!" tabindex="11" style="margin-top: 7px; margin-left: auto; margin-right: auto;" />
											</div>
											
																					</form>
									</div>
									<div class="section_left_bottom2">&nbsp;</div>
								</td>
                                
								<td>&nbsp;</td>
								
                                <td width="363" align="center">
									<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="363" height="132">
										<param name="movie" value="flash/mygilmore.swf" />
										<param name="quality" value="high" />
										<embed src="flash/mygilmore.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="363" height="132"></embed>
									</object>
                                    
                                    <div style="padding-top:25px">
                                    	<a href="view.php?mode=news&amp;id=173">
                                    		<img src="images/wii.gif" alt="Win A Nintendo Wii" style="margin-left:5px" />
                                    	</a>
                                    </div>
								</td>
                                
							</tr>
						</table>
						
										<a href="contribute.php" style="float:left"><img src="images/donate.png" alt="Donate" /></a>
					<a href="volunteer.php" style="float:right"><img src="images/volunteer.png" alt="Volunteer" /></a>
                   	
                    <div id="footer">
						<div style="margin-bottom: 3px;">
							<a href="about.php">About Jim</a> |
							<a href="issues.php">The Issues</a> |
							<a href="mygilmore.php"><span style="color: #8e0606;">My</span>Gilmore</a> |
							<a href="press.php">Press Center</a> |
							<a href="view.php?mode=events">Events Calendar</a> |
							<a href="blog/index.php">Official Blog</a> |
                            <a href="contribute.php">Contribute</a> |
                            <a href="contact.php">Contact Us</a>
						</div>
						<div style="font-size: 0.8em;">Paid for by Jim Gilmore for President, Inc. <br /> &copy;2007 Gilmore For President, Inc. All Rights Reserved</div>
                    </div>
				</div>
			</div>
		</div>
	</body>
</html>





