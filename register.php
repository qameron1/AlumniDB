<!doctype html>
<html>
	<?php
session_start();
include 'dbconn.php';
include 'function.php'
	?><head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Kennesaw State Alumni Page</title>
<!-- TemplateEndEditable -->
<link href="../alumni webpage.css"	rel= stylesheet type="text/css">
<!-- TemplateBeginEditable name="head" -->
<script src="../js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#menu li').hover(
        function () {
            //show submenu
            $('ul', this).show();
        }, function () {
            //hide submenu
            $('ul', this).hide();
        });
    });
</script>
<!-- TemplateEndEditable -->
</head>

<body>
<div class="container">
  <header>
    <div class="primary_header">
      <h1 class="title"> Kennesaw State University Alumni</h1>
    </div>
<!-- TemplateBeginEditable name="Nav Bar" -->
	 <nav class="secondary_header">
     
  <footer class="secondary_header footer">
	  
    <div class="copyright"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                   		  <tbody><tr>
                         			<td colspan="2" align="left">	
	<table summary="Error Messages" width="100%" border="0" cellspacing="0" cellpadding="2">
	</table>
 

</td>
											  
				</tr>


                                   		
                                             <tr>
					<h1><strong>User Registry</strong></h1>
						
							    
				</tr>
											  
				<tr>
					<td width="25%"></td>
					<br></br>
	
				</tr>
				<tr>
					<td class="accounttext">E-mail Address:<font color="red">*</font></td>
					<td class="carttext"><input name="LEMAIL" size="24" maxlength="50" value=""></td>
				</tr>
				<tr>
					<td class="accounttext">Confirm e-mail address:<font color="red">*</font></td>
					<td class="carttext"><input name="LVEMAIL" size="24" maxlength="50" value="">
					</td>
				</tr>
				<tr>
					<td width="25%"></td>
					<br></br>
				</tr>
				<tr>
					<td class="accounttext">Choose a Password:<font color="red">*&nbsp;</font></td>
					<td class="carttext"><input type="password" name="APASSWORD" size="20" maxlength="20" value="">
					</td>
				</tr>
				<tr>
					<td class="accounttext">Confirm Password:<font color="red">*&nbsp;</font></td>
					<td class="carttext"><input type="password" name="AVPASSWORD" size="20" maxlength="20" value=""></td>
				</tr>
                                    	 <tr>
                         			<td colspan="2"><img height="10" alt="" src="/images/jb/spacer.gif" width="12" border="0"></td>
				</tr>

<tr><td colspan="2">
           <table width="100%" cellspacing="0" cellpadding="0" border="0">
             <tbody><tr><td width="100%"><img src="/images/jb/spacer.gif" width="1" height="5" alt="" border="0"></td></tr>
<button name="submit" value="submit" type="submit">Creat Account</button>
				</tbody></table>&copy;2022 - <strong>Capstone summer 2022</strong></div>
  </footer>
</body>
</html>
