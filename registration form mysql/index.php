<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
      select{
    position: relative;
    left: 30px;
}
@media (max-width:500px){
   .input-section{
       margin-left: +1px;
       width: 400px;
   }
   h1{
    position: relative;
    
   }   
}


</style>

</head>
<body style="background:black;">
    <div class="container">
           <form method="post" action="connect.php"  required="">
          <div class="input-section"  autocomplete="off">
          <h1>Registration Form</h1>
            <div class="input-group" autocomplete="off">
                <label>FirstName:</label>
                <input type="text" name="name"  class="form-control" placeholder="Enter Your FirstName" autocomplete="off" required=""> 
            </div>
            <div class="input-group">
                <label >Email Id:</label>
                <input type="text" name="emails"  class="form-control" placeholder="Enter Your mail id" autocomplete="off" required=""> 
            </div>
            <div class="input-group">
                <label>Password:</label>
                <input type="password" name="passd"  class="form-control" autocomplete="off" required=""> 
            </div>
            <div class="input-group">
                <label>Age:</label>
                <input type="number" name="age"  class="form-control" autocomplete="off" required=""> 
            </div>
           <div class="input-group">
            <label>Department:</label>
           <select name="dep">
            <option name="dep">--Select one--
            <option name="dep" value="B.COM">B.COM
            <option name="dep" value="BBA">BBA
            <option name="dep" value="BA">BA
            <option name="dep" value="MATHS">MATHS
            <option name="dep" value="BCS">BCS
            <option name="dep" value="BCA">BCA
      </select>
     </div>
            <div class="input-group">
                <label>Date of Birth:</label>
                <input type="date" name="date"  class="form-control" autocomplete="off" required=""> 
            </div>
            <div class="input-group">
                <label>Gender:</label>
                <input type="radio" name="gen" id="gens" value="Male"  size="">Male
                <input type="radio" name="gen" id="gens" value="Female" size="">Female
          </div>
        <div class="input-group">
                <label>Mobile Number:</label>
                <input type="number" name="num"  class="form-control" autocomplete="off" required=""> 
            </div>
            <button class="btn btn-success" name="submit">Submit</button>
          </div>
</form>
    </div>
    
</body>
</html>