<!DOCTYPE html>
<html>
	<head>

		<title>View</title>

	</head>

	<body>

		 <div>
	             
	            <button><a href="mainn.php">Inapoi</a></button>
	            <button><a href="search.php">Cauta un eveniment dupa data</a></button>

				<?php
					$conn = mysqli_connect('localhost', 'root', '', 'evenimente') or die("COULD NOT CONNECT");

					$sql = "SELECT `numeleEvenimentului`, `dataEveniment`, `descriereEveniment` FROM `evenimente`";

					$result = mysqli_query($conn, $sql);


					echo "<table border='0'>
							<tr>
								<th>
									Nume Eveniment
								</th>
								<th>
									Data eveniment
								</th>
								<th>
									Descriere Eveniment
								</th>
							</tr>";

					while($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>" . $row['numeleEvenimentului'] . "</td>";
						echo "<td>" . $row['dataEveniment'] . "</td>";
						echo "<td>" . $row['descriereEveniment'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";

					mysqli_close($conn);
				?>

		</div>

	</body>
</html>