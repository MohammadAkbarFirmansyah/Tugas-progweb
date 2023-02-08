<?php
            error_reporting(0);
            $conn = mysqli_connect("localhost","root","","ukk2023");
?>                

<html>
    <head>
    </head>
    <body>
    <table border="1" width="400px">
				 <tr>
                   <td align="center">No</td>		
                   <td align="center">Nama</td>
				   <td align="center">Alamat</td>	
                   <td align="center">Action</td>			   
				 </tr>
				 <?php
					$query = mysqli_query($conn, "select * from siswaa order by nama asc");
					while($data = mysqli_fetch_array($query))
                    {
                    $no++;
				 ?>
				 <tr>
                    <td align="center" ><?php echo "$no";?></td>
					<td align="center" ><?php echo $data['nama']; ?></td>
					<td align="center" ><?php echo $data['alamat']; ?></td>
                    <td>
                    <a href="siswaedit.php?id=<?php echo $data['id']; ?>">edit</a> | 
                    <a href="siswadelete.php?id=<?php echo $data['id']; ?>">delete</a>
                </td>		
				 </tr>
				 <?php
					}
				?>

        </table>
    </body>

</html>