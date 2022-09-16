<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = 'vishalvegetables';

    $connection= mysqli_connect($server, $user, $password, $db);
    // var_dump('hello db connected')
    if ($connection) {
        ?>
       <script>
            // alert("connection Succesfull");
        </script>
       <?php
    }else{
        ?> <script>
            // alert("connection not Succesfull");

 </script>
      <?php
    }
?>