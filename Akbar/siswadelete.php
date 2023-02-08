<?php
            error_reporting(0);
            $conn = mysqli_connect("localhost","root","","ukk2023");

            $query = "delete from siswaa where id=".$_GET["id"]."";
            $delete=mysqli_query($conn,$query);
            header('location:siswaread.php');
?>