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
    <div class="center" style="margin-top:100px">
      <div class="center" align="center">
        <div class="col-md-10">
          <div class="card">
            <div class="card-body", align="center">
                <center>
                <?php
                    
                    session_start();
                    
                    $username = $_SESSION['username'];

                    $con = mysqli_connect('127.0.0.1', 'root', '', 'hmsdb');

                    $query = "DELETE FROM `doc_details` WHERE Username='$username'";

                    $run1 = mysqli_query($con, $query);
                    
                    $query = "DELETE FROM `doclogtb` WHERE Username='$username'";

                    $run2 = mysqli_query($con, $query);

                    if($run1 == true and $run2 == true)
                    {
                        ?>
                            <p><b><font size=10 color="black">Profile Deleted Successfully</font></b></p>
                            <a href="index.php">Click here to go to the homepage!</a>
                        <?php
                    }    
                    else
                    {
                         ?>
                            <p><b><font size=10 color="black">Deletion Failed!</font></b></p>
                            <a href="dashboard.php">Click here to try again!</a>
                        <?php
                    }
                ?>
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