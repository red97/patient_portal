<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","hmsdb");
if(isset($_POST['doc_search_by_name']))
{
    $name=$_POST['input'];
    $query="select * from doc_details where Name like '%$name%';";

    $result=mysqli_query($con,$query);
     echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      </head>
      <body style="background-color:#3498DB;color:white;text-align:center;padding-top:50px;">
      <div class="container" style="text-align:left;">
      <center><h3>Search Results</h3></center><br>
      <table class="table table-hover">
      <thead>
        <tr>
          <th>Doctor-ID</th>
          <th>Doctor Name</th>
          <th>Specialization</th>
          <th>Hospital Name</th>
          <th>Address</th>
          <th>Contact</th>
        </tr>
      </thead>
      <tbody>
      ';
  while($row=mysqli_fetch_array($result))
  {
    $id=$row['id'];
    $name=$row['Name'];
    $spcl=$row['Specialization'];
    $addr=$row['Address'];
    $hname=$row['HospitalName'];
    $con=$row['Contact'];
    echo '<tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$spcl.'</td>
      <td>'.$hname.'</td>
      <td>'.$addr.'</td>
      <td>'.$con.'</td>
    </tr>';
  }
echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>';
}

?>