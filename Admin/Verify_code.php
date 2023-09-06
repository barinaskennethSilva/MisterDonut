<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Sign In Admin</title>
  </head>
  <body>
   <nav class="navbar navbar-danger bg-danger">
       <a class="navbar-brand text-white fw-bold ms-3" href="#">Automated Payroll System</a> 
   </nav> 
    
    
  <div class="myform w-50 shadow m-auto mt-4">
 <div class="w-100 p-2 bg-danger text-white">
  Verification Code 
 </div> 
  <form class="p-3" method="post" action="VerifyForm.php">

  <div class="mb-3">
    <input type="password" class="form-control text-center" id="password" name="verify-input"autocomplete="off">
  </div>



  <button type="submit" class="btn btn-primary w-100" name="verify-btn">Continue</button>
</form>
  </div>  
  </body>
</html>