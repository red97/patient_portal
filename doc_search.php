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
                  <h2><b>Search Doctor</b></h2>
                  <h5><b> </b></h5><br>
                  <form class="form-group" method="post" action="dname_srch.php" align="center">
                    <div class="row">

                      <div class="col-md-12"><input type="text" name="input" class="form-control" placeholder="by Name" required/></div><br><br>

                    </div>
                    <center><input type="submit" id="doc_search_by_name" name="doc_search_by_name" value="Search" class="btn btn-primary"></center>
                  </form>
                  <form class="form-group" method="post" action="spcfn_srch.php" align="center">
                    <div class="row">

                      <div class="col-md-12"><input type="text" name="input" class="form-control" placeholder="by Specialization" required/></div><br><br>

                    </div>
                    <center><input type="submit" id="doc_search_by_spec" name="doc_search_by_spec" value="Search" class="btn btn-primary"></center>
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


<!--<br>
<center><input type="submit" id="inputbtn" name="doc_search_by_spclz" value="Specialization" class="btn btn-primary"></center>-->