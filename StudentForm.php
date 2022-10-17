<Html>  
<head>

<title>  Student Form </title> 
<link rel="stylesheet" href="Style.css">
</head>  

<body> 

<h1>Student Form</h1>
<br>  
<br> 

<form method="post">  
<label> <b>Firstname: </b></label>         
<input type="text" name="firstname" size="20" /> <br> <br>  

<label> <b>Middlename: </b></label>     
<input type="text" name="middlename" size="20"/> <br> <br> 

<label><b>Lastname: </b></label>         
<input type="text" name="lastname" size="20"/> <br> <br>  
  
<label><b>Courses: </b></label>   
<select name = "COURSES">
<option value="Course">Course</option>  
<option value="BSIT">BSIT</option>  
<option value="BSA">BSA</option>  
<option value="BSCE">BSCE</option>  
<option value="BSCS">BSCS</option>  
<option value="BSEE">BSEE</option>  
<option value="BSHM">BSHM</option>  
<option value="BSTM">BSTM</option>  
<option value="BSAI">BSAI</option>  
<option value="BSFA">BSFA</option>  
<option value="BFS">BFS</option>  
<option value="BSCIS">BSCIS</option>  
<option value="ACT">ACT</option>  
<option value="BSE">BSE</option>
<option value="BPE">BPE</option>  
<option value="BSNE">BSNE</option>    
</select>  
<br>  
<br>  

<label><b>Gender :</b></label><br> 

<input type="radio" name="male"  value="Male"/> Male <br>  
<input type="radio" name="female" value="Female"/> Female <br>  
<br>  
<br>  
  
<label><b>Phone :</b></label> 

<input type="text" name="country code"  value="+69" size="2"/>   
<input type="text" name="phone" size="11"/> <br> <br> 

<b>Address</b>  
<br>  
<textarea name="Adres" cols="80" rows="5" value="address">  
</textarea>  
<br> <br>

<b>Email:</b>    
<input type="email" id="email" name="email"/> <br>    
<br> <br>

<b>Password:</b>   
<input type="Password" id="pass" name="pass"> <br>   
<br> <br> 

<b>Re-type password:</b>   
<input type="Password" id="repass" name="repass"> <br> <br> 

<button> Submit </button>

</form>

</body>

</html> 

<?php

//First Name
if(isset($_POST['firstname'])) {

    $fname=$_POST['firstname']; 
    $fp = fopen('file.txt', 'a');
    fwrite($fp,"First Name: ". $fname."\n");
    fclose($fp);
}

//Middle Name
if(isset($_POST['middlename'])) {

    $midinitial=$_POST['middlename'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "M.I: ". $midinitial."\n");
    fclose($fp);
}

//Last Name
if(isset($_POST['lastname'])) {

    $lname=$_POST['lastname'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Last Name: ". $lname."\n");
    fclose($fp);
}

//Courses
if(isset($_POST['COURSES'])) {

    $course=$_POST['COURSES'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Course: ". $course."\n");
    fclose($fp);
}

//Genders
if(isset($_POST['male'])) {

    $male=$_POST['male'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Gender: ". $male."\n");
    fclose($fp);
}

else {
    $female=$_POST['female'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Gender: ". $female."\n");
    fclose($fp);
}

//Contact No.
if(isset($_POST['phone'])) {

    $contact=$_POST['phone'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Phone: ". $contact."\n\n");
    fclose($fp);
}

//Address
if(isset($_POST['Adres'])) {

    $lugar=$_POST['Adres'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Anddress: "."\n". $lugar."\n\n");
    fclose($fp);
}

//Email Adress
if(isset($_POST['email'])) {

    $Email=$_POST['email'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Email: ".$Email."\n");
    fclose($fp);
}

//Password
if(isset($_POST['pass'])) {

    $pword=$_POST['pass'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Password: ". $pword."\n");
    fclose($fp);
}

//Re-type Password
if(isset($_POST['repass'])) {

    $rpass=$_POST['repass'];
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "Re-type passord: ".$rpass);
    fclose($fp);
}

?>

