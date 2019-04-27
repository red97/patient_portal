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
    <div class="center" style="margin-top:80px">
      <div class="center" align="center">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            
            <div class="card-body", align="center">
              <center>
                  <h2><b>Generate Notice</b></h2>
                  <h5><b>Fill the required details</b></h5><br>
              <form class="form-group" method="post" action="func_gen_notice.php" align="center">
                <div class="row">
                  <div class="col-md-4"><label>Notice </label></div><br>
                    <div class="col-md-8"><textarea type="text" name="notice" class="form-control" placeholder="Enter the notice" required></textarea></div><br><br>

                  <div class="col-md-4"><label>Priority </label></div>
                  <div class="col-md-8"><select name="prio" class="form-control" >
                      <option value="Very Imp">Very Important</option>
                      <option value="Imp">Important</option>
                      <option value="General">General</option>
                    </select></div><br><br>

                </div>
                <br>
                <center><input type="submit" id="create_notice" name="create_notice" value="Submit" class="btn btn-primary"></center>
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