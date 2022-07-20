<?php include("dbconn.php")?>
<?php 
    $sql = "SELECT alumniID, fName, lName, email FROM 'alumni_table'";
    $result = $dbconn->query($sql);
		if ($result->num_rows > 0) {
?>
?><!doctype html>
<html><!-- InstanceBegin template="/Templates/alumniwebsitetemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kennesaw State Newsletter Page</title>
<!-- InstanceEndEditable -->
<link href="alumni webpage.css"	rel= stylesheet type="text/css">
<!-- InstanceBeginEditable name="head" -->
<script src="js/jquery-3.6.0.min.js"></script>
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
	function news_email(){
		const email_subject = document.getElementById('subject');
		const email_content = document.getElementById('content');
		const email_footer = document.getElementById('emailfooter');
		
		emailsubject.innerHTML = email_subject.value;
		emailcontent.innerHTML = email_content.value;
		emailfoot.innerHTML = email_footer.value;
	}
	
</script>
<!-- InstanceEndEditable -->
</head>

<body>
<div class="container">
  <header>
    <div class="primary_header">
      <h1 class="title"> <img class="header_logo" src="images/ksu logo.png" width="154" height="205" alt="ksu logo"/>Kennesaw State University Alumni</h1>
    </div>
<!-- InstanceBeginEditable name="Nav Bar" -->
	 <nav class="secondary_header">
     <ul id="menu"> 
  <li>
    <a href="#">Home</a> 
    <ul> 
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
    </ul>
  </li>
  <li>
    <a href="#">News Letter</a> 
    <ul> 
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Group 3 Reports</a> 
    <ul> 
      <li><a href="#">Report 1</a></li>
      <li><a href="#">Report 2</a></li>
      <li><a href="#">Report 3</a></li>
      <li><a href="#">Report 4</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Group 4 Reports</a> 
    <ul> 
      <li><a href="#">Report 1</a></li>
      <li><a href="#">Report 2</a></li>
      <li><a href="#">Report 3</a></li>
	  <li><a href="#">Report 4</a></li>	
    </ul>
  </li>
  <li>
    <a href="#">About</a> 
    <ul> 
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
      <li><a href="#">Blank</a></li>
    </ul>
  </li>
</ul>
	</nav>
<!-- InstanceEndEditable -->
	</header>
<section>
<!-- InstanceBeginEditable name="section 1" -->
	
    <h2 class="noDisplay">Main Content</h2>
	
<!--code for entering email data-->
	<table width="90%" border="1" cellpadding="10">
  <tbody>
    <tr>
      <td colspan="2"><h2 align="center">Alumni Newsletter</h2></td>
      </tr>
    <tr>
      <td class="newsletter" width="50%">
		<form>
			<select>
				<option>Select Alumni</option>
				<option>Select All</option>
				<?php while($row1 = mysqli_fetch_array($result)):;?>
				<option><?php echo "$rowl1[1]";?></option>
				<?php endwhile;?>
			</select>
			
		<h4>Email subject: <input type="text" id="subject"></h4>	
		<h4>Email content:</h4>
		<textarea id="content" rows="12" cols="50">text here</textarea>
		<h4>Footer: <input type="text" id="emailfooter"></h4>
		<input type="button" value="Preview" onClick="news_email();"/>
		<input type="button" value="Send" onClick="?">
	</form></td>
<!--code for preview-->
      <td class="preview" width="50%">
		 <p id="emailsubject"></p>
		 <p id="emailcontent"></p>
		 <p id="emailfoot"></p>
		</td>
    </tr>
  </tbody>
</table>
	hello2

    
<!-- InstanceEndEditable -->	
  </section>
<!-- InstanceBeginEditable name="section 2" -->

<div class="row">
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/databasemanagement.png" alt="" class="thumbnail"/> </p>
      <h4>Group 1: Database Management&nbsp;</h4>
      <p>Group 1 is responsible for setting up and maintaining the database. You will enter all data provided in assignment 1, which may include some data scrubbing. Lastly, you will create the database connection string that is required to connect the database to the website so that queries can be executed for content management and reporting.&nbsp;</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/contentmanagement.png" alt="" class="thumbnail"/> </p>
      <h4>Group 2: Content Management&nbsp;</h4>
      <p>Your task is to create a series of page that can be used to maintain the alumni data in the database. There are several tables and a lot of data that needs to be capture. You need to develop pages that allow users to view enter new alumni, update alumni information, or delete if necessary. Your design must take into account the database relationships and also include validation when necessary to limit typing mistakes.&nbsp;</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/analyticsa.png" alt="" class="thumbnail"/> </p>
      <h4>Group 3: Analytics Team A&nbsp;</h4>
      <p>Your task is to create four reports that can be useful for the department chair or faculty at KSU related to our alumni. Two potential report ideas are provided below. You should come up with two other reports that are meaningful. You must coordinate with analytics team B to ensure that you all are working on unique reports. You are also responsible for designing the website template that all groups will use to create a consistent look and feel when each component is put together.&nbsp;</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/analyticsb.png" alt="" class="thumbnail"/> </p>
      <h4>Group 4: Analytics Team B&nbsp;</h4>
      <p>Your task is to create four reports that can be useful for the department chair or faculty at KSU related to our alumni. Two potential report ideas are provided below. You should come up with two other reports that are meaningful. You must coordinate with analytics team A to ensure that you all are working on unique reports&nbsp;</p>
    </div>
  </div>
  <div class="row blockDisplay">
    <div class="column_half left_half">
      <h2 class="column_title">Connect With Us Below<br>alumni@kennesaw.edu<br>470-578-9009<br>
</h2>
    </div>
    <div class="column_half right_half">
      <h2 class="column_title">Alumni House<br>
3207 Campus Loop Road
Kennesaw, GA 30144<br>
470-578-6333</h2>
    </div>
  </div>
  <div class="social">
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
  </div>
<!-- InstanceEndEditable -->	
  <footer class="secondary_header footer">
    <div class="copyright">&copy;2022 - <strong>Capstone summer 2022</strong></div>
  </footer>
</div>
</body>
<!-- InstanceEnd --></html>
