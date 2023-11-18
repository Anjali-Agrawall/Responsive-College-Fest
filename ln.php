<?php
$db = new mysqli("localhost", "root", "anjali@25", "store");
if(isset($_POST['submit'])){
	$name =$_POST['name'];
	$usn =$_POST['usn'];
	$gender =$_POST['gender'];
	$college =$_POST['college'];
	$branch =$_POST['branch'];
	$semester=$_POST['semester'];
	$email =$_POST['email'];
	$phoneCode = $_POST['phoneCode'];
    $phone = $_POST['phone'];
	$check =implode(',', $_POST['ch']);
	$qry=$db->query("INSERT INTO `datainfo`(`name`, `usn`, `gender`, `college`, `branch`, `semester`, `email`, `phoneCode`, `phone`,   `events`) VALUES ( '$name', '$usn', '$gender', '$college', '$branch', '$semester', '$email', '$phoneCode', '$phone', '$check')");
	    if($qry>0){
		echo "<script> alert('Congrats! Your Details is Recorded Successfully'); </script>";
		}
		else{
			echo "<script> alert('OOPs!! Your Details is matching with alredy registerd'); </script>";
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	   <p>
    <font color="white">
  <h1 style="background-color: blue"><center><b>Registration Form</b></center></h1>
    </p>
	</font>
  <font face="Adobe Gothic Std"font size="4"font color="green" style="background-color:">
    <marquee behavior="alternate"><b>LAST DATE FOR REGISTRATION IS 08-06-2023. DON'T FORGET TO BRING COLLEGE ID DURING THE DAY OF EVENT</b></marquee></marquee></font>
	<form action="" method="POST">
		<fieldset>
			<legend><b>Student Details</b></legend>
			<center>
		<table>
	<tr>
		<td><span style="color: red; font-weight: bold;">*</span><b>StudentName :</b></td>
	    <td><input type="text" name="name" placeholder="Student Name" required></td>
	</tr>
	<tr>
		<td><span style="color: red; font-weight: bold;">*</span><b>USN :</b></td>
        <td><input type="text" name="usn" placeholder="USN" required></td>
	</tr>
	 <tr>
    <td><span style="color: red; font-weight: bold;">*</span><b>Gender :</b></td>
    <td>
     <input type="radio"  name="gender" value="Male" required>Male
     <input type="radio"  name="gender" value="Female" required>Female
     <input type="radio"  name="gender" value="Others" required>Others
    </td>
   </tr>
    <tr>
     <td><span style="color: red; font-weight: bold;">*</span><b>College :</b></td>
     <td><input type="text" name="college" placeholder="College Name" required></td>
   </tr>
    </tr>
   <tr>
     <td><span style="color: red; font-weight: bold;">*</span><b>Branch :</b></td>
     <td>
     <select name="branch" required>
      <option selected hidden value="">Branch</option>
     <option value="CSE">CSE</option>
      <option value="EEE">EEE</option>
      <option value="ECE">ECE</option>
      <option value="BME">ISE</option>
      <option value="CIV">CIV</option>
       <option value="MEC">MEC</option>

     </select>
     </td>
   </tr>
    <tr>
     <td><span style="color: red; font-weight: bold;">*</span><b>Semester :</b></td>
     <td>
     <select name="semester" required>
      <option selected hidden value="">Semester</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     </select>
     </td>
   </tr>
   <tr>
    <td><span style="color: red; font-weight: bold;">*</span><b>Email :</b></td>
    <td><input type="email" name="email" placeholder="abc@gmail.com" required></td>
   </tr> 
      <tr>
    <td><span style="color: red; font-weight: bold;">*</span><b>Phone no :</b></td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="+91">+91(IN)</option>
      <option value="+91">+91</option>
     </select>
     <input type="phone" name="phone" placeholder="9999999999" required>
    </td>
   </tr>
    <tr>
     <td><span style="color: red; font-weight: bold;">*</span><b>Date of Reg :</b></td>
     <td><input type="date" id="send" oninput="result.value=send.value"></td>
  </tr>
  <span style="color: red; font-weight: bold;">* Indicates require field</span>
 </table>
</center>
</fieldset>
<br>
<h3><b>Select the events which you are intersted in</b></h3>

<fieldset>
  <legend><b>Technical Events</b></legend>
    <center>
      <table>

	<tr>
		<td><br>
			<b>
		<input type="checkbox" name="ch[]" value="Online Programming Contest">Online Programming Contest<br>
		<input type="checkbox" name="ch[]" value="Project Expo">Project Expo<br>
		<input type="checkbox" name="ch[]" value="Paper Presentation">Paper Presentation<br>
		<input type="checkbox" name="ch[]" value="Code Hunt">Code Hunt<br>
		<input type="checkbox" name="ch[]" value="Final Destiny">Final Destiny<br>
		<input type="checkbox" name="ch[]" value="Poster Presentation">Poster Presentation<br>
		<input type="checkbox" name="ch[]" value="Geek Battle">Geek Battle<br>
		<input type="checkbox" name="ch[]" value="Engadget">Engadget<br></b>
	 </td>
   </tr>
 </table>
</center>
</fieldset>
<br/>
<fieldset>
  <legend><b>Non Technical Events</b></legend>
  <center>
    <table>
  <tr>
     <td><br><b>
       <input type="checkbox" name="ch[]" value="Tech no Tech">Tech no Tech<br>
       <input type="checkbox" name="ch[]" value="King Of Cards">King Of Cards<br>
       <input type="checkbox" name="ch[]" value="Quikr">Quikr<br>
       <input type="checkbox" name="ch[]" value="Who Am I">Who Am I<br>
       <input type="checkbox" name="ch[]" value="Spy C">Spy C<br>
       <input type="checkbox" name="ch[]" value="Wrong Turn">Wrong Turn<br>
       <input type="checkbox" name="ch[]" value="Smart Droid">Smart Droid<br>
       <input type="checkbox" name="ch[]" value="Central Process Unit Assembly">Central Process Unit Assembly<br>
       <input type="checkbox" name="ch[]" value="Key Board Assmebly">Key Board Assembly<br>
       <input type="checkbox" name="ch[]" value="Guess Who">Guess Who<br>
       <input type="checkbox" name="ch[]" value="It's Happening">It's Happening<br></b>
   </td>


     </td>
   </tr>
</table>
</center>
</fieldset>
</center><br>
	  <center>
<td><input type="reset"  name="Reset" value="Reset"></td>
<td><input type="submit"  name="submit" value="submit"></td>

</center>
</form>
</p>
</body>
</html>
	
