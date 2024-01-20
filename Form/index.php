<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
<link href='' rel='stylesheet'>

<!--Bootstrap css link-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">


<!--Helper.php. links  start-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="../Bloodbank/assets/css/bootstrap.min.css">-->
<!--Helper.php  links Close-->

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif
}

body {
/*     background: linear-gradient(45deg, #ce1e53, #8f00c7); */
min-height: 100vh
}

body::-webkit-scrollbar {
display: none
}

.wrapper {
border:1px solid #325288;
max-width: 800px;
margin: 80px auto;
padding: 30px 45px;
box-shadow: 5px 25px 35px #3535356b
}

.wrapper label {
display: block;
padding-bottom: 0.2rem
}

.wrapper .form .row {
padding: 0.6rem 0
}

.wrapper .form .row .form-control {
box-shadow: none
}

.wrapper .form .option {
position: relative;
padding-left: 20px;
cursor: pointer
}

.wrapper .form .option input {
opacity: 0
}

.wrapper .form .checkmark {
position: absolute;
top: 1px;
left: 0;
height: 20px;
width: 20px;
border: 1px solid #bbb;
border-radius: 50%
}

.wrapper .form .option input:checked~.checkmark:after {
display: block
}

.wrapper .form .option:hover .checkmark {
background: #f3f3f3
}

.wrapper .form .option .checkmark:after {
content: "";
width: 10px;
height: 10px;
display: block;
background: linear-gradient(45deg, #ce1e53, #8f00c7);
position: absolute;
top: 50%;
left: 50%;
border-radius: 50%;
transform: translate(-50%, -50%) scale(0);
transition: 300ms ease-in-out 0s
}

.wrapper .form .option input[type="radio"]:checked~.checkmark {
background: #fff;
transition: 300ms ease-in-out 0s
}

.wrapper .form .option input[type="radio"]:checked~.checkmark:after {
transform: translate(-50%, -50%) scale(1)
}

#sub {
display: block;
width: 100%;
border: 1px solid #ddd;
padding: 10px;
border-radius: 5px;
color: #333
}

#sub:focus {
outline: none
}

@media(max-width: 768.5px) {
.wrapper {
margin: 30px
}

.wrapper .form .row {
padding: 0
}
}

@media(max-width: 400px) {
.wrapper {
padding: 25px;
margin: 20px
}
}
</style>

<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>

</head>
	<body>
			<form action="contact_insert.php" method="POST">
			
			<div class="wrapper rounded bg-white h-auto">
			<div class="h3 text-primary"><h2 style="font-weight:800; font-size:37px;">Contact Form</h2></div>
			<br>
			<div class="h3 text-info"><h2 style=" color:#325288; font-weight:600; font-size:25px;">Personal information</h2></div>
					
			<div class="form">
			<div class="row">
			<div class="col-md-6 mt-md-0 mt-3"> <label>First Name</label> <input type="text" class="form-control" name="First_name" required> </div>
			<div class="col-md-6 mt-md-0 mt-3"> <label>Last Name </label> <input type="text" class="form-control"   name="Last_name"  required> </div>
			</div>
			
			<div class="row">
			<div class="col-md-6 mt-md-0 mt-3"> <label>Date of Birth</label> <input type="date" class="form-control" name="Date_of_Birth" ,required></div>
			<div class="col-md-6 mt-md-0 mt-3"> <label>Gender</label>
			<div class="d-flex align-items-center mt-2"> <label class="option"> <input type="radio" name="Gender" value="Male" >Male <span class="checkmark"></span> </label> <label class="option ms-4"> <input type="radio" name="Gender" value=" Female"> Female <span class="checkmark"></span> </label> </div>
			</div>
			</div>
			
			<div class="row">
			<div class="col-md-6 mt-md-0 mt-3"> <label>Contact no.</label> <input type="tel" class="form-control"    id="numberText" name=" Contact" ,required> </div>
			<div class="col-md-6 mt-md-0 mt-3"> <label>Age</label> <input type="number" class="form-control"    id="numberText"  name="Age",required> </div>
			</div>
			
			<div class="row">
			<div class="col-md-6 mt-md-0 mt-3"> <label> Email id </label> <input type="email" class="form-control"  name="Email_id" required> </div>
			<div class="col-md-6 mt-md-0 mt-3"> <label> Applying position </label> 
			<select  name="Post "style="width:100%; height:60%; background-color:white;">
			<option>Choose</option>
	                <option value="Teaching Department">Teaching Department </option>
			<option value="Computer Operator">Computer Operator</option>
			<option value="Management Department">Management Department</option>
			</select>
			</div>   
			</div>
			
			<div class="row">
			<div class="col-md-6 mt-md-0 mt-3"> <label>Religion </label> <input type="text" class="form-control" name=" Religion" required> </div>
			<div class="col-md-6 mt-md-0 mt-3"> <label> Nationality</label> <input type="text" class="form-control" name="Nationality"  required> </div>
			</div>
			
			<br>
			<div class="h3 text-info"><h2 style=" color:#325288; font-weight:600; font-size:25px;">Academic Details</h2></div>			
			<div class="row">
			<div class="col-md-12 mt-md-0 mt-3"> <label>Qualification </label> <input type="text" class="form-control" name=" Qualification" > </div>
			</div>
			
			<div class="row">
			<div class="col-md-6 mt-md-0 mt-3"> <label>Present Employer </label> <input type="text" class="form-control" name="Present_Employer" > </div>
			<div class="col-md-6 mt-md-0 mt-3"> <label>Current Position </label> <input type="text" class="form-control" name="Current_Position" > </div>
			</div>
			
			
		        <div class="h3 text-info"><h2 style=" color:#325288; font-weight:600; font-size:25px;">Address information</h2></div>
		  	<div class="row">
		        <div class="col-md-6 mt-md-0 mt-3"> <label>State/Province </label> <input type="text" class="form-control"  name="State" required> </div>
        	        <div class="col-md-6 mt-md-0 mt-3"> <label>City </label> <input type="text" class="form-control"  name="City" required> </div>
        	        </div>
        	
			<div class="row">
			<div class="col-md-6 mt-md-0 mt-3"> <label>Country </label> <input type="text" class="form-control"  name="Country" required> </div>
			<div class="col-md-6 mt-md-0 mt-3"> <label>Pin code </label> <input type="tel" class="form-control"   id="numberText" name="Pincode" required> </div>
			</div>
			
			<br>
			
			<div class="form-outline mb-4">
			<label class="form-label" for="form4Example3">Address</label>
			<textarea class="form-control" id="form4Example3" rows="4" name="Address"></textarea>
			</div>
			
			<button class="btn btn-primary btn--radius-2 " type="submit" id="submit" name="submit"><h3 style="color: white; font-weight:700; font-size:23px;">Submit </h3></button>
		</div></div>
</form>

<!-- Fetching data form databse -->
<a href="fetch_data.php"><button class="btn btn-primary btn--radius-2" style="color:white; margin-left:13px; border-radius:15px; background-color:DodgerBlue; font-weight:700; font-size:25px;">Display Data</button></a>


</body>
</html>