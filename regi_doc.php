<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="background:url('images/bg.png'); background-size: cover;">
    <div class="center" style="margin-top:20px">
      <div class="center" align="center">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            
            <div class="card-body", align="center">
              <center>
                  <h2><b>Doctor Registration</b></h2>
                  <h5><b>Enter the following details</b></h5><br>
              <form class="form-group" method="post" action="func_reg_doc.php" align="center">
                <div class="row">
                  <div class="col-md-4"><label>Name </label></div>
                  <div class="col-md-8"><input type="text" name="Name" class="form-control" placeholder="Enter Name" required/></div><br><br>

                  <div class="col-md-4"><label>Username </label></div>
                  <div class="col-md-8"><input type="text" name="Username" class="form-control" placeholder="Enter Username" required/></div><br><br>

                  <div class="col-md-4"><label>Password </label></div>
                  <div class="col-md-8"><input type="password" name="Password" class="form-control" placeholder="Enter Password" required/></div><br><br>

                  <div class="col-md-4"><label>Specialization </label></div>
                  <div class="col-md-8"><input type="text" name="Specialization" class="form-control" placeholder="Enter Specialization" required/></div><br><br>
                  
                  <div class="col-md-4"><label>Hospital </label></div>
                  <div class="col-md-8"><input type="text" name="Hospital_name" class="form-control" placeholder="Enter Hospital Name" required/></div><br><br>
                  
                  <div class="col-md-4"><label>Address </label></div>
                  <div class="col-md-8"><input type="text" name="Address" class="form-control" placeholder="Enter Permanent Address" required/></div><br><br>

                  <div class="col-md-4"><label>Date of Birth </label></div>
                  <div class="col-md-8"><input type="date" name="Date_of_Birth" class="form-control" placeholder="Enter Date of Birth" required/></div><br><br>
                  
                  <div class="col-md-4"><label>Contact No. </label></div>
                  <div class="col-md-8"><input type="text" name="Contact_num" class="form-control" placeholder="Enter Contact Number" required/></div><br><br>

                </div>
                <center><input type="submit" id="inputbtn" name="submit" value="Submit" class="btn btn-primary"></center>
              </form>
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>