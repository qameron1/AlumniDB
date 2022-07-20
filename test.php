<?php include("dbconn.php")?>	
<?php include("fetch_data.php")?><!doctype html>
<html>
<head></head>
<body>
	<form>
	<select name="alumniID">
   <option>Select Alumni</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['alumniID']; ?> </option>
    <?php 
    }
   ?>
</select>
	</form>
	<p>hellpo</p>
</body>
</html>