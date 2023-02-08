<?php

error_reporting(0);

$conn = mysqli_connect("localhost","root","","ukk2023");

if($_POST["simpan"])
{
    $nama=$_POST  ["nama"];
    $alamat=$_POST["alamat"];

    $query="update siswaa set nama='".$nama."',alamat='".$alamat."' where id='".$_GET["id"]."'";
    echo $query;
    //exit;
    $insert = mysqli_query($conn,$query);

    header('location:siswaread.php');
}

$query = mysqli_query($conn, "select * from siswaa where id=".$_GET["id"]."");
$data = mysqli_fetch_array($query);
?>


<html>
    <head> 
    </head>
        <body>
            <form method="POST" action="siswaedit.php?id=<?php echo $_GET["id"]; ?>">
            <table border="1">
                <tr>
                <td>nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
                </tr>
                <tr>
                <td><input type="submit" name="simpan" value="simpan" </td> 
                </tr>
        </body>
        </form>
    
</html>