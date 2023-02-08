<?php 
    
    error_reporting(0);

    $conn = mysqli_connect("localhost","root","","ukk2023");

    if($_POST["simpan"])
    {
        $nama=$_POST["nama"];
        $alamat=$_POST["alamat"];

        $query = "insert into siswaa (nama,alamat) values('".$nama."','".$alamat."')";
        $insert = mysqli_query($conn,$query);
        header('location:siswaread.php');
    }
?>
<html>  
<head>

</head>
<body>
 <body>
        <form name='siswaa' action='siswa.php' method='POST'>
        <table border='1'>
<tr>
	<td>nama</td><td colspan='3'><input type='text' name='nama'></td>
</tr>
<tr>
	<td>alamat</td><td><input type='text' name='alamat'></td>
</tr>
<tr>
    <td colspan='4'><input type="submit" name="simpan" value="simpan"</td>
</tr>
  </table>
  </form>