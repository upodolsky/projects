<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "44101616";
$databaseName = "user_info";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `users";
$result1 = mysqli_query($connect, $query);
?>

<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src ="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" ></script>
		<script >
		$(document).ready(function(){
		    $('#example').DataTable();
		});
		</script>
    </head>

    <body>
        <table id="example" class="display" cellspacing="0" width="100%"> 
		<thead>	
            <tr>
                <th>Id</th>
                <th>user_info</th>
                <th>mail</th>
                <th>time</th>
            </tr>
		</thead>
		<tbody>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>

    </body>

</html>