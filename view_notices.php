<html>
<head>

    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
    
    <?php

        include("func.php");

        $con = mysqli_connect("127.0.0.1", "root", "", "hmsdb");
 
        $query = "select * from notices limit 10";
    
        $run = mysqli_query($con, $query);
    
        if($run == true)
        {
            ?>
            <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">Timestamp</th>
            <th scope="col">Notice</th>
            <th scope="col">Priority</th>
            </tr>
            </thead>
            <?php
            while($data = mysqli_fetch_assoc($run))
            {
            ?>
            <tr>
                <td><?php echo $data['timestamp'] ?></td>
                <td><?php echo $data['notice'] ?></td>
                <td><?php echo $data['priority'] ?></td>
            </tr>
            <?php
            }
            ?>
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