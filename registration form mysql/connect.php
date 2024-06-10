<?php
if (isset($_POST['submit']));
{
$name=$_POST['name'];
$email=$_POST['emails'];
$password=$_POST['passd'];
$ages=$_POST['age'];
$depa=$_POST['dep'];
$dates=$_POST['date'];
$gens=$_POST['gen'];
$number=$_POST['num'];

$conn=mysqli_connect("localhost","root","","register");
$sql="INSERT INTO adds(firstname,emailss,passwords,age,department,birth,gender,mobile) VALUES('$name','$email','$password','$ages','$depa','$dates','$gens','$number')";
$r=mysqli_query($conn,$sql);

}     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form insert Pages</title>
</head>
<body style="text-align:center;">
       <div class="image" >
        <img src="images/img1.jpg" width="400px" height="400px">
       </div>
         <h1>Successfully Inserted</h1>
</body>
</html>