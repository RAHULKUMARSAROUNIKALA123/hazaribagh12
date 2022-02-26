<?php
$username="root";
$password="";
$server='localhost';
$db='website';
$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>
    <script>
    alert('connection success');
    </script>
    <?php
    // echo"connection successful";
}else{
    echo"no successfull";
}

?>
