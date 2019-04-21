<?php

include("func.php");

$con = mysqli_connect("127.0.0.1", "root", "", "hmsdb");
$query = "select * from events";
$run = mysqli_query($con, $query);
?>
  
  <div class="center">
      
    <?php
        
    if($run == true)
    {
        ?>

        <table border="0" width="80%">
        <tr>
            <td>Time Stamp</td><td>Doctor ID</td><td>Patient ID</td><td>Disease</td><td>Medicine</td><td>Operation required</td>
        </tr>

        <?php

        while($data = mysqli_fetch_assoc($run))
        {

            ?>

            <tr>
                <td><?php echo $data['timestamp'] ?></td><td><?php echo $data['doc_id'] ?></td><td><?php echo $data['pat_id'] ?></td><td><?php echo $data['disease'] ?></td><td><?php echo $data['medicine'] ?></td><td><?php echo $data['op_req'] ?></td>
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
      
  </div>
   
<?php
    
?>