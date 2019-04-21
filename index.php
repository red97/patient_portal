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
  <body style="background:url('images/backgroundimg.jpeg'); background-size: cover;">
        <div align="right" class="container-fluid" style="margin-top:10px;margin-bottom:10px;color:#34495E;">
         <table style="width:35%">
             <tr>
                 <td><a href="doclog.php"><font size="3.5" color="black"><b>Doctor Login</b></font></a></td>
                 <td><a href="regi_doc.php"><font size="3.5" color="black"><b>Doctor Register</b></font></a></td>
                 <td><a href="reg_pat.php"><font size="3.5" color="black"><b>Patient Register</b></font></a></td>
             </tr>
         </table>
     </div>
    <div class="container-fluid" style="margin-top:10px;margin-bottom:20px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/cardback.jpeg" class="card-img-top">
            <div class="card-body">
              <center>
              <h5>Patient Login</h5><br>
              <form class="form-group" method="post" action="func.php">
                <div class="row">
                  <div class="col-md-4"><label>Username: </label></div>
                  <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="enter username" required/></div><br><br>
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                </div>
                <center><input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary"></center>
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