<html>
<head>
<style>
body{
	background-image: url("./images/l.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<font color='white'>
<h1>
<form action="display2.php" method="post">
<br><br>
<div align='center'>please select the symptom1:<br></div>
<div align='center'><select name="symptom1"></div>
  <option value="headache">headache </option>
  <option value="chill and shivering">chill and shivering</option>
   <option value="cold">cold </option>
   <option value="sneezing">sneezing </option>
   <option value="stomachpain">stomachpain </option>
   <option value="acid reflux">acid reflux </option>
   <option value="pressure across your forehead">pressure across your forehead </option>
</select><br>
<div align='center'>please select the symptom2:<br></div>
<div align='center'><select name="symptom2">
  <option value="headache">headache </option>
  <option value="fever">chill and shivering</option>
   <option value="cold">cold </option>
   <option value="sneezing">sneezing </option>
   <option value="stomachpain">stomachpain </option>
   <option value="acid reflux">acid reflux </option>
   <option value="pressure across your forehead">pressure across your forehead </option>
</select><br>
<br><br>
<div align='center'><button type="submit" name="submit">submit</button></div>
</form>
</body>
</html>
</h1>
</font>