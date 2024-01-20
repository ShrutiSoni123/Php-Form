<html>
<head>
<style>
*{
  box-sizing: border-box;

myInput {
background-color: #f1f1f1;
font-size:30px;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
</head>
<body>
<br>
<h1 style="color:DodgerBlue;">Filter</h1><input type="text" id="myInput" onkeyup="myFunction()" style="width:600px; height:50px; font-size:30px; border:2px solid black;" placeholder="Search for names...">
<a href="index.php"><button style="color:white; border-radius:5px; background-color:DodgerBlue; width:100px; height:50px; font-weight:700; font-size:25px; alignment:right;">Back</button></a>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<br><br>
<table border="1" id="myTable">
<tr class="header">
<th>Id </th>
<th>First name</th>
<th>Last name</th>
<th>Date of Birth</th>
<th>Email</th>
<th>Contact</th>
<th>Age </th>
<th>Gender </th>
<th>Post </th>
<th> Religion</th>
<th>Nationality </th>
<th> Qualification</th>
<th>Present Employer</th>
<th> Current Position</th>
<th> State</th>
<th>City </th>
<th>Country </th>
<th> Pincode</th>
<th>Address </th>

</tr>
<?php

$host = 'fdb33.awardspace.net';
$username='3997385_data';
$password='databasepassword123';
$db='3997385_data';
$con = mysqli_connect($host,$username,$password,$db);
$result = mysqli_query($con,"SELECT * from contact ORDER by Id ASC");
while($res=mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td>'.$res['Id'].'</td>';
echo '<td>'.$res['First_name'].'</td>';
echo '<td>'.$res['Last_name'].'</td>';
echo '<td>'.$res['Date_of_Birth'].'</td>';
echo '<td>'.$res['Email_id'].'</td>';
echo '<td>'.$res['Contact'].'</td>';
echo '<td>'.$res['Age'].'</td>';
echo '<td>'.$res['Gender'].'</td>';
echo '<td>'.$res['Post'].'</td>';
echo '<td>'.$res['Religion'].'</td>';
echo '<td>'.$res['Nationality'].'</td>';
echo '<td>'.$res['Qualification'].'</td>';
echo '<td>'.$res['Present_Employer'].'</td>';
echo '<td>'.$res['Current_Position'].'</td>';
echo '<td>'.$res['State'].'</td>';
echo '<td>'.$res['City'].'</td>';
echo '<td>'.$res['Country'].'</td>';
echo '<td>'.$res['Pincode'].'</td>';
echo '<td>'.$res['Address'].'</td>';
echo '</tr>';
}
?>
</table>
</body>
</html>