<?php 
	/**
	* 
	*/
	class SendMail 
	{
		private static $to;
		private static $subject;
		private static $from;
		private static $headers;

		//Content-type header
		

		function __construct($recipient)
		{
			self::$to = $recipient;
			self::$subject = 'Account Information';
			self::$from = 'Orion Inc.';

			self::$headers  = 'MIME-Version: 1.0'. "\r\n";
			self::$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			self::$headers .= 'From: '.self::$from."\r\n".
							  'Reply-To: '.self::$from."\r\n".
							  'X-Mailer: PHP/'. phpversion();
		}

		public static function sendPassword($name,$username, $password)
		{
			$first_name = explode(" ", $name)[0];
			$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
						<html xmlns="http://www.w3.org/1999/xhtml">
							<head>
								<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
								<meta name="viewport" content="width=device-width"/>
								<title>Orion Inc. Blog</title>
								<style type="text/css">
									/*////// RESET STYLES //////*/
									body{height:100% !important; margin:0; padding:0; width:100% !important;}
									table{border-collapse:separate;}
									img, a img{border:0; outline:none; text-decoration:none;}
									h1, h2, h3, h4, h5, h6{margin:0; padding:0;}
									p{margin: 1em 0;}

									/*////// CLIENT-SPECIFIC STYLES //////*/
									.ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
									.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;}
									table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;}
									#outlook a{padding:0;}
									img{-ms-interpolation-mode: bicubic;}
									body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
										
									/*////// GENERAL STYLES //////*/
									img{ max-width: 100%; height: auto; }

									/*////// TABLET STYLES //////*/
									@media only screen and (max-width: 620px) {
									.shrink_font{
										font-size: 62px;
									}
									/*////// GENERAL STYLES //////*/
										#foxeslab-email .table1 { width: 90% !important;}
										#foxeslab-email .table1-2 { width: 98% !important; margin-left: 1%; margin-right: 1%;}
										#foxeslab-email .table1-3 { width: 98% !important; margin-left: 1%; margin-right: 1%;}
										#foxeslab-email .table1-4 { width: 98% !important; margin-left: 1%; margin-right: 1%;}
										#foxeslab-email .table1-5 { width: 90% !important; margin-left: 5%; margin-right: 5%;}

										#foxeslab-email .tablet_no_float { clear: both; width: 100% !important; margin: 0 auto !important; text-align: center !important; }
										#foxeslab-email .tablet_wise_float { clear: both; float: none !important; width: auto !important; margin: 0 auto !important; text-align: center !important; }

										#foxeslab-email .tablet_hide { display: none !important; }

										#foxeslab-email .image1 { width: 98% !important; }
										#foxeslab-email .image1-290 { width: 100% !important; max-width: 290px !important; }

										.center_content{ text-align: center !important; }
										.center_image{ margin: 0 auto !important; }
										.center_button{ width: 50% !important;margin-left: 25% !important;max-width: 250px !important; }
										.centerize{margin: 0 auto !important;}
									}

								
									/*////// MOBILE STYLES //////*/
									@media only screen and (max-width: 480px){
										.shrink_font{
											font-size: 48px;
										}
										.safe_color{
											color: #6a1b9a !important;
										}
										/*////// CLIENT-SPECIFIC STYLES //////*/
										body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
										table[class="flexibleContainer"]{ width: 100% !important; }/* to prevent Yahoo Mail from rendering media query styles on desktop */

										/*////// GENERAL STYLES //////*/
										img[class="flexibleImage"]{height:auto !important; width:100% !important;}

										#foxeslab-email .table1 { width: 98% !important; }
										#foxeslab-email .no_float { clear: both; width: 100% !important; margin: 0 auto !important; text-align: center !important; }
										#foxeslab-email .wise_float {	clear: both;	float: none !important;	width: auto !important;	margin: 0 auto !important;	text-align: center !important;	}

										#foxeslab-email .mobile_hide { display: none !important; }
										.auto_height{height: auto !important;}
									}
								</style>
							</head>
							<body style="padding: 0;margin: 0;" id="foxeslab-email">
								<table class="table_full editable-bg-color bg_color_ffffff editable-bg-image" bgcolor="#ffffff" width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0" style="background-image: url(#); background-repeat: no-repeat; background-position: center left; background-size: 100% 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" background="#">
									<!-- padding-top -->
									<tr><td height="100"></td></tr>

									<!-- body -->
									<tr>
										<td>
											<table class="table1" width="600" align="center" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td bgcolor="#fcfcfc" style="padding: 40px 0;border: 1px solid #f2f2f2;border-radius: 5px;">
														<!-- body-container -->
														<table class="table1" width="480" align="center" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td class="editable-img" align="center">
																	<a href="#">
																		<img editable="true" class="centerize" mc:edit="image101" src="../../../assets/img/logo-dark.png" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="image" />
																	</a>
																</td>
															</tr>
															<!-- email heading -->

															<!-- email details -->
															<tr>
																<td align="center" mc:edit="text102" class="text_color_c6c6c6" style="line-height: 1.8;color: #c6c6c6; font-size: 14px; font-weight: 400; font-family: \'Open Sans\', Helvetica, sans-serif; mso-line-height-rule: exactly;">
																	<div class="editable-text">
																		<span class="text_container">Hi '.$first_name.', Your account has been created successfully. Your Username and Password are below.</span>
																	</div>
																</td>
															</tr><!-- END email details -->
															<tr>
																<td>
																	<!-- column-1 -->
																	<table class="table1-3" align="left" border="0" cellpadding="0" cellspacing="0">
																		<tbody><tr>
																			<td class="editable-img" align="center">
																				<a href="#">
																					<img editable="true" mc:edit="image105" src="../../../assets/img/circle-icon-user.png" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="image">
																				</a>
																			</td>
																		</tr>
																	</tbody></table><!-- ENd column-1 -->
																	
																	<!-- vertical gutter -->
																	<table class="table1-3" width="20" align="left" border="0" cellpadding="0" cellspacing="0">
																		<tbody><tr><td height="1"></td></tr>
																	</tbody></table>

																	<!-- column-2 -->
																	<table class="table1-3" align="left" border="0" cellpadding="0" cellspacing="0">
																		<!-- margin-top -->
																		<tbody><tr><td height="20"></td></tr>

																		<tr>
																			<td align="left" mc:edit="text103" class="text_color_c6c6c6 center_content" style="line-height: 1;color: #c6c6c6;font-style: italic; font-size: 14px; font-weight: 400; font-family: \'Open Sans\', Helvetica, sans-serif; mso-line-height-rule: exactly;">
																				<div class="editable-text">
																					<span class="text_container">Username</span>
																				</div>
																			</td>
																		</tr>

																		<!-- horizontal gap -->
																		<tr><td height="10"></td></tr>

																		<tr>
																			<td align="left" mc:edit="text104" class="text_color_93c054 center_content" style="line-height: 1;color: #93c054; font-size: 14px;font-style: italic;font-weight: 400; font-family: \'Open Sans\', Helvetica, sans-serif; mso-line-height-rule: exactly;">
																				<div class="editable-text">
																					<span class="text_container">'.$username.'</span>
																				</div>
																			</td>
																		</tr>
																		<!-- margin-bottom -->
																		<tr><td height="20"></td></tr>
																	</tbody></table><!-- END column-2 -->

																	<!-- column-3 -->
																	<table class="table1-3" align="right" border="0" cellpadding="0" cellspacing="0">
																		<!-- margin-top -->
																		<tbody><tr><td height="20"></td></tr>

																		<tr>
																			<td>
																				<table class="button_bg_color_93c054" bgcolor="#93c054" width="150" height="45" align="center" border="0" cellpadding="0" cellspacing="0" style="border-radius:5px; border-collapse: separate">
																					<tbody><tr>
																						<td mc:edit="text105" align="center" valign="middle" style="font-size: 14px; font-weight: 400; font-family: \'Open Sans\', Helvetica, sans-serif; mso-line-height-rule: exactly;">
																							<div class="editable-text">
																								<span class="text_container">
																									<a href="javascript:void(0)" class="text_color_ffffff" style="text-decoration: none; color: #ffffff;">'.$password.'</a>
																								</span>
																							</div>
																						</td>
																					</tr>
																				</tbody></table>
																			</td>
																		</tr>

																		<!-- margin-bottom -->
																		<tr><td height="20"></td></tr>
																	</tbody></table><!-- END column-3 -->
																</td>
															</tr>
														</table><!-- END body-container -->
													</td>
												</tr>
											</table>
										</td>
									</tr><!-- END body -->

									<!-- padding-bottom -->
									<tr><td height="100"></td></tr>
								</table>
							</body>
						</html>';
			mail(self::$to, self::$subject, $message, self::$headers);
		}
	}
?>