<?php
$host='#hostname';
$username='#username';
$password='#password';
$dbname='#database name';
$con = mysqli_connect($host,$username,$password,$dbname);

$First_name= $_POST['First_name'];
$Last_name= $_POST['Last_name'];
$Date_of_Birth= $_POST['Date_of_Birth'];
$Email_id= $_POST['Email_id'];
$Contact= $_POST['Contact'];
$Age=$_POST['Age'];
$Gender=$_POST['Gender'];
$Post=$_POST['Post'];
$Religion=$_POST['Religion'];
$Nationality=$_POST['Nationality'];
$Qualification=$_POST['Qualification'];
$Present_Employer=$_POST['Present_Employer'];
$Current_Position=$_POST['Current_Position'];
$State=$_POST['State'];
$City=$_POST['City'];
$Country=$_POST['Country'];
$Pincode=$_POST['Pincode'];
$Address=$_POST['Address'];

$in =mysqli_query($con,"INSERT INTO contact(First_name,Last_name,Date_of_Birth,Email_id,Contact,Age,Gender,Post,Religion,Nationality,Qualification,Present_Employer,Current_Position,State,City,Country,Pincode,Address) VALUES('$First_name','$Last_name','$Date_of_Birth','$Email_id','$Contact','$Age','$Gender','$Post','$Religion','$Nationality','$Qualification','$Present_Employer','$Current_Position','$State','$City','$Country','$Pincode','$Address')");
	
	if($in)
	{
	echo '<script type="text/javascript"> alert("Record has been saved successfully") </script>';
        echo '<script> location.replace("index.php") </script>';
        }
	else 
	{
	echo "Error: " . $in . "<br>" . mysqli_error($con);
	echo '<script type="text/javascript"> alert("Data Not Saved ") </script>';
	}
  	
?>
