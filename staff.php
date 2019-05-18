<?php  
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'logintest'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM loan';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Loan application</title>
	
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		input[type=text]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=password]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=text]:focus {
    border: 3px solid #555;
    }
	</style>
</head>
<body>
	<form action="logout.php">
 <div style="float:right"><button type="submit">signout</button></div>
	</form>
	<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">LOAN APPLICATION</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>EMAIL</th>
				<th>CUSTOMER ID</th>
				<th>PHONE NUMBER</th>
				<th>LOAN</th>
				<th>DURATION</th>
				<th>GUARANTOR1 FIRST NAME</th>
				<th>LAST NAME</th>
				<th>NATIONAL ID</th>
				<th>PHONE NUMBER</th>
				<th>GUARANTOR2 FIRST NAME</th>
				<th>LAST NAME</th>
				<th>NATIONAL ID</th>
				<th>PHONE NUMBER</th>
				<th>TIME</th>
				<th>DATE</th>



			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['customer_ID'].'</td>
					<td>'.$row['phone_number'].'</td>
					<td>'.$row['loan'].'</td>
					<td>'.$row['duration'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['guaranter_ID'].'</td>
					<td>'.$row['guaranter_phone'].'</td>
					<td>'.$row['first_name'].'</td>
					<td>'.$row['last_name'].'</td>
					<td>'.$row['guaranter_ID_no'].'</td>
					<td>'.$row['guaranter_contact'].'</td>
					<td>'.$row['time'].'</td>
					<td>'.$row['date'].'</td>
				</tr>';
			$no++;
		
		}?>
		</tbody>
	</table>
</body>
</html>