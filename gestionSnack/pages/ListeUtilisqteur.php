<!DOCTYPE html>
<html>
<head>
	<title>Snack Bar</title>
	<link rel="stylesheet" href="../Style/css/style.css">
</head>
</head>
<body>

	<div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                	<table>
                		
                		<thead>
                			<td>ID</td>
                			<td>NOM</td>
                			<td>Email</td>
                		</thead>
	                	<?php
		        			require 'database.php';
		        			$db= Database::connect();
		        			$statement = $db->query('SELECT client.id, client.name, client.email,client.Age, client.type
		        									FROM client ');
		        			while($item = $statement->fetch())
		        			{
		        				
							 	echo "<tr>";
							 	echo "<td>" .$item['id']. "</td>";
							 	echo "<td>" .$item['name']. "</td>";
							 	echo "<td>" .$item['email']. "</td>";
							 	echo "<td>" .$item['Age']. "</td>";
							 	echo "<td>" .$item['type']. "</td>";
							 	echo "</tr>";

							 
		        			}
		        			Database::disconnect();
	        			?>

	        		</table>

                </div>
            </div>
        </section>

    </div>

</body>
</html>