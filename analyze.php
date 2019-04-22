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
  <body style="background:url('images/bg4.jpg'); background-size: cover;">
    <div class="center" style="margin-top:180px">
      <div class="center" align="center">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body", align="center">
                <center>
                  <h2><b>Analyze</b></h2>
                  <br>
                  <form class="form-group" method="post" action="profile.php" align="center">
                    <div class="row">  
                          <div class="col-md-6"><label><b>Start Date</b></label></div>
<!--                          <div class="tab"> </div>
                          <div class="tab"> </div>-->
                          <div class="col-md-6"><label><b>End Date</b></label></div>


                          <div class="col-md-6"><input type="date" name="sd" class="form-control" placeholder="Start Date" required/></div>       
<!--                          <div class="tab"> </div>
                          <div class="tab"> </div>-->
                          <div class="col-md-6"><input type="date" name="ed" class="form-control" placeholder="End Date" required/></div>
                          <br>
                          <br>
                          <br>
                          <div class="tab"> </div>

                    </div>
                    <center><input type="Submit" id="inputbtn" name="Go" value="Go" class="btn btn-primary"></center>
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