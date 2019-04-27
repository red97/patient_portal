<?php
    include("func.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
<body style="background:url('images/bg1.jpeg'); background-size: cover;">
    <div class="col-md-7">
        <h4><b>
            <?php 
            
                echo "Hello ";
                $username = $_SESSION['username'];
                echo $username;
                echo " ";
                $q1 = "select id from pat_details where Username = '$username'";
                $r1 = mysqli_query($con, $q1);
                $row1 = $row=mysqli_fetch_array($r1);
                $id = $row['id'];
                echo "(";
                echo "Patient-ID : ";
                echo $id;
                echo ")";
            
            ?>
        </b></h4>
    </div>
    <div align="right" class="container-fluid" style="margin-top:10px;margin-bottom:10px;color:#34495E;">
         <table style="width:41%">
             <tr>
                 <td><a href="view_notices.php"><font size="3.5" color="black"><b>Notices</b></font></a></td>
                 <td><a href="func_del_pat.php"><font size="3.5" color="black"><b>Delete Profile</b></font></a></td>
                 <td><a href="pat_profile.php"><font size="3.5" color="black"><b>Update Profile</b></font></a></td>
                 <td><a href="doc_search.php"><font size="3.5" color="black"><b>Doctor Search</b></font></a></td>
                 <td><a href="logout.php"><font size="3.5" color="black"><b>Logout</b></font></a></td>
             </tr>
         </table>
    </div>
    
    <?php

        $con = mysqli_connect("127.0.0.1", "root", "", "hmsdb");
        $username = $_SESSION['username'];
        
        $query = "select e.timestamp as timestamp, e.doc_id as doc_id, d.Name as name, e.disease as disease, e.medicine as medicine, e.op_req from events as e, doc_details as d where e.doc_id = d.id and pat_id=any(select id from pat_details where Username='$username')";
        $run = mysqli_query($con, $query);
        
    
        if($run == true)
        {
            ?>
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">TimeStamp</th>
                    <th scope="col">Doctor-ID</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Diseases</th>
                    <th scope="col">Medicines</th>
                    <th scope="col">Operation Required</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?php
                        while($data = mysqli_fetch_assoc($run))
                        {
                            ?>
                                <tr>
                                    <td><?php echo $data['timestamp'] ?></td>
                                    <td><?php echo $data['doc_id'] ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['disease'] ?></td>
                                    <td><?php echo $data['medicine'] ?></td>
                                    <td><?php echo $data['op_req'] ?></td>
                                </tr>
                            <?php
                        }
                    ?>
                    
                    <!--<tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>-->
                </tbody>
            </table>
            <?php
        }
        else
            echo "error";
        
    ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</html>
    