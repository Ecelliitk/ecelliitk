<?php

$name = $_GET['entry_421389354']; // required
	$email = $_GET['entry_1262475799']; // required
	$contact = $_GET['entry_1414961846']; // required
	$college = $_GET['entry_1702262569']; // required
	$collegeId = $_GET['entry_980771933']; // required
       $email_tor = $_GET['entry_1262475799'];     
     $email_subjectr = "New Registration";
     $email_from = "iitk.ecell@gmail.com";    
    
    
    
   
        
          
        $body  = '
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Really Simple HTML Email Template</title>
<style type="text/css">
/* ------------------------------------- 
		GLOBAL 
------------------------------------- */
* { 
	margin:0;
	padding:0;
	font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; 
	font-size: 100%;
	line-height: 1.6;
}
img { 
	max-width: 100%; 
}
body {
	-webkit-font-smoothing:antialiased; 
	-webkit-text-size-adjust:none; 
	width: 100%!important; 
	height: 100%;
}
/* ------------------------------------- 
		ELEMENTS 
------------------------------------- */
a { 
	color: #348eda;
}
.btn-primary, .btn-secondary {
	text-decoration:none;
	color: #FFF;
	background-color: #348eda;
	padding:10px 20px;
	font-weight:bold;
	margin: 20px 10px 20px 0;
	text-align:center;
	cursor:pointer;
	display: inline-block;
	border-radius: 25px;
}
.btn-secondary{
	background: #aaa;
}
.last { 
	margin-bottom: 0;
}
.first{
	margin-top: 0;
}
/* ------------------------------------- 
		BODY 
------------------------------------- */
table.body-wrap { 
	width: 100%;
	padding: 20px;
}
table.body-wrap .container{
	border: 1px solid #f0f0f0;
}
/* ------------------------------------- 
		FOOTER 
------------------------------------- */
table.footer-wrap { 
	width: 100%;	
	clear:both!important;
}
.footer-wrap .container p {
	font-size:12px;
	color:#666;
	
}
table.footer-wrap a{
	color: #999;
}
/* ------------------------------------- 
		TYPOGRAPHY 
------------------------------------- */
h1,h2,h3{
	font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
	margin: 40px 0 10px;
	line-height: 1.2;
	font-weight:200; 
}
h1 {
	font-size: 36px;
}
h2 {
	font-size: 28px;
}
h3 {
	font-size: 22px;
}
p, ul { 
	margin-bottom: 10px; 
	font-weight: normal; 
	font-size:14px;
}
ul li {
	margin-left:5px;
	list-style-position: inside;
}
/* --------------------------------------------------- 
		RESPONSIVENESS
		Nuke it from orbit. Its the only way to be sure. 
------------------------------------------------------ */
/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
	display:block!important;
	max-width:600px!important;
	margin:0 auto!important; /* makes it centered */
	clear:both!important;
}
/* This should also be a block element, so that it will fill 100% of the .container */
.content {
	padding:20px;
	max-width:600px;
	margin:0 auto;
	display:block; 
}
/* Lets make sure tables in the content area are 100% wide */
.content table { 
	width: 100%; 
}
</style>
</head>
 
<body bgcolor="#f6f6f6">
<!-- body -->
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">
			<!-- content -->
			<div class="content">
			<table>
				<tr>
					<td>
						<p>Hi <br>
						 Congratulations!! You have been successfully registered for E-Summit’15. 
						</p>
						<p>You have completed online registration for the Summit. Now, you can register for the events you wish to participate in. We shall be releasing our Competitions and Workshops shortly.
</p><p>You shall witness some very successful entrepreneurs sharing their stories of success and failure. Workshops shall be the interactive sessions helping you understand the tactics of business and entrepreneurship.
 And finally the competitions will be a test of your potential to make an impactful presence in the entrepreneurial world.</p><p>The annual flagship event of IIT Kanpur was effectuated with the intention to foster entrepreneurial initiatives aiming to provide a common platform to all those passionate about entrepreneurship. Sharing of experiences, discussion of ideas and opportunities will be a profuse learning experience for the active leaders in the savant community who can then disperse these ideas further.
</p><p>Stay tuned for further details about the competitions and the associated prizes.</p><p>Regards,<br>
Team E-Cell,<br>
IIT Kanpur<br>
</p>
												
					</td>
				</tr>
			</table>
			</div>
			<!-- /content -->
									
		</td>
		<td></td>
	</tr>
</table>
<!-- /body -->

</body>
</html>';
     $headers3 = 'From: <iitk.ecell@gmail.com>' . "\r\n";  

     $headers3 .= 'Reply-To: '. $email_from. "\r\n";
    $headers3 .= "MIME-Version: 1.0\r\n";
     $headers3 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  
    $headersr = 'From: '.$email_from."\r\n".
     'Reply-To: '.$email_from."\r\n" .
     'X-Mailer: PHP/' . phpversion();
     echo $email_tor;

     $data32  = mail($email_tor, $email_subjectr, $body , $headers3);
     echo $data32;


?>