<!DOCTYPE html>
<html lang="en">
<head>
  <title>CARGO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">CAR WORLD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="cargo.php">Home</a></li>
        <li>
          <a href="ab.php">ABOUT US</a>
        </li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


  <style>
    body {background-image:url("1357867.gif");}
    .center {
  display: flex;
  justify-content: center;
  align-items: center;
    .form-dark .font-small {
  font-size: 2rem; }

.form-dark [type="radio"] + label,
.form-dark [type="checkbox"] + label {
  font-size: 2rem; }

.form-dark [type="checkbox"] + label:before {
  top: 2px;
  width: 15px;
  height: 15px; }

.form-dark .md-form label {
  color: #fff; }

.form-dark input[type=email]:focus:not([readonly]) {
  border-bottom: 1px solid #00C851;
  -webkit-box-shadow: 0 1px 0 0 #00C851;
  box-shadow: 0 1px 0 0 #00C851; }

.form-dark input[type=email]:focus:not([readonly]) + label {
  color: #fff; }

.form-dark input[type=password]:focus:not([readonly]) {
  border-bottom: 1px solid #00C851;
  -webkit-box-shadow: 0 1px 0 0 #00C851;
  box-shadow: 0 1px 0 0 #00C851; }

.form-dark input[type=password]:focus:not([readonly]) + label {
  color: #fff; }



.form-dark input[type="checkbox"]:checked + label:before {
  top: -4px;
  left: -3px;
  width: 12px;
  height: 22px;
  border-style: solid;
  border-width: 2px;
  border-color: transparent #00c851 #00c851 transparent;
  -webkit-transform: rotate(40deg);
  -ms-transform: rotate(40deg);
  transform: rotate(40deg);
  -webkit-backface-visibility: hidden;
  -webkit-transform-origin: 100% 100%;
  -ms-transform-origin: 100% 100%;
  transform-origin: 100% 100%; }

.form-dark .modal-header {
    border-bottom: none;
}
  </style>
  <script>
    function test()
    {
      var name = Number(document.getElementById("firstname").value);
      var cn = Number(document.getElementById("contact").value);
       var ln = Number(document.getElementById("lastname").value);
       var sel = Number(document.getElementById("sel").value);
        var password = Number(document.getElementById("password").value);
        var confirmpassword = Number(document.getElementById("confirmpassword").value);
         var email = Number(document.getElementById("email").value);
          var cb = Number(document.getElementById("checkbox624").value);
if (name =="" || ln=="" || sel=="" || password=="" || sel=="" || confirmpassword=="" || email=="" || cb=="" || cn==""){
alert("please fill the field");
return true;
}
else{
  alert("we have sent an activation key to your email account");
}


    }
  </script> 
 
  <body>
<!-- Modal -->
<div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('IXxHHzD.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN UP</strong>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
           <div class="input-group" >
    <span class ="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

    <input id="firstname" type="text"  class="form-control" name="firstname" placeholder="FirstName">
    </div>
    <br><br>
    <div class="input-group">
    <span class ="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

    <input id="lastname" type="text" class="form-control" name="lastname" placeholder="LastName">
    </div>
    <br><br>


         
          <div class="input-group">
    <span class ="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>

    <select class="form-control" id="sel">
      <option> Select your Profession </option>
      <option> Buisness</option>
      <option> Student </option>
      <option> Employee </option>
      <option> Others </option>
    </select>
    </div>
    <br><br>

     <div class="input-group" >
    <span class ="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <br><br>

     <div class="input-group" >
    <span class ="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

    <input id="confirmpassword" type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
    </div>
    <br><br>

     <div class="input-group" >
    <span class ="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>

    <input id="email" type="email" class="form-control" name="email" placeholder="E-mail">
    </div>
    <br><br>

     <div class="input-group" >
    <span class ="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>

    <input id="contact" type="text" class="form-control" name="contact" placeholder="Contact No.">
    </div>
    <br><br>

            <div class="form-group mt-4">
              <input class="form-check-input" type="checkbox" id="checkbox624">
              <label for="checkbox624" class="white-text form-check-label">Accept the<a href="#" class="green-text font-weight-bold">
                  Terms and Conditions</a></label>
            </div>
          </div>

          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="button" class="btn btn-primary btn-block btn-rounded z-depth-1"  onclick="test()">Sign up</button>
            </div>
            <!--Grid column-->
			<br>
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">
              <p >Have an account? <a href="login.php">
                  Log in</a></p>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
 <h1 align="center"><a href="cargo.php">REGISTRATION</h1></a>
  <br><br>
<div class="text-center">
  <a href="" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#darkModalForm">Launch
    register Form</a>
</div>
</body>
</html>
