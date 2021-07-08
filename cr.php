<?php
include("configg.php");
?>

<html>
<head>
<title>Crud</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="sty.css">
<script type="text/javascript">
  function validateForm()
  {
    var username=document.forms["form"]["exampleInputName"].value;
    var email=document.getelementById("exampleInputEmail").value;
    var password=document.getelementById("exampleInputPassword").value;
    var confirm=document.getelementById("exampleInputPassword1").value;
    var phone=document.getelementById("exampleInputPhone").value;

    if(username.length<12)
    {
      alert("Name must be filled out");
      document.getelementById('user').innerHtml="** User length must be less than 12 ";
      return false;
    }
    if(password!=confirm)
    {
      document.getelementById('con').innerHtml="** Password mismatch ";
      return false;
    }
    if(isNaN(phone))
    {

      document.getelementById('phn').innerHtml="** Enter only numbers ";
      return false;
    }
  }
</script>

</head>
<body>
<div class="container">
<form action="#" onsubmit="return validateForm()" method="post" name="form">
  <div class="form-group">
    <h4 class="display-4 text-center">Registration</h4><hr><br>
    <label for="exampleInputEmail1">First Name</label>
    <input type="firstname" class="form-control" id="exampleInputFirst" aria-describedby="nameHelp" placeholder="Enter First Name" name="first" required >


    <span id="first" class="text-danger font-weight:bold"></span>
    <label for="exampleInputEmail1">Last Name</label>
    <input type="last" class="form-control" id="exampleInputLast" aria-describedby="nameHelp" placeholder="Enter Last Name" name="email" required >


    <span id="mail" class="text-danger font-weight:bold"></span>
    <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="username" class="form-control" id="exampleInputName" aria-describedby="usernameHelp" placeholder="Enter Username" name="name"  required>

    <span id="user" class="text-danger font-weight:bold"></span>
  </div>

    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required >


    <span id="mail" class="text-danger font-weight:bold"></span>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password"  required>
    <span id="pass" class="text-danger font-weight:bold"></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Confirm Password" name="confirm"  required>
    <span id="con" class="text-danger font-weight:bold"></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" id="exampleInputPhone" placeholder="Enter phone number" name="phone" required>
       
    <span id="phn" class="text-danger font-weight:bold"></span>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">submit</button>
  </div>
</form>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirm=$_POST['confirm'];
   $phone=$_POST['phone'];


   $res=mysqli_query($mysqli,"INSERT into data values($name','$email','$password','$confirm','$phone')");
   if($res)
   {
    echo "success";
   }
   else
   {
    echo "failed";
   }
}
?>
</body>
</html>
