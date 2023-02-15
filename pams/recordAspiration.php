<?php

$asp = $_POST['formAspi'];
$start = $_POST['formStartDate'];
$due = $_POST['formDueDate'];
$prio = $_POST['formPrio'];
$status = $_POST['formStatus'];

$dbServer = "localhost";
$username = "root";
$dbPassword = "";
$database = "pams";

$con = mysqli_connect($dbServer, $username, $dbPassword, $database);

if (!$con) {
  die("Could not connect to the database" . mysqli_connect_error());
}

$sql = "insert into aspirations (`Aspiration`, `Start_Date`, `Due_Date`, `Priority`, `Status`) values('$asp','$start','$due','$prio','$status')";
//echo $sql;

if ($con->query($sql) === TRUE) {
	echo "Added following record <BR><TABLE><TR><TD>Aspiration</TD><TD>:</TD><TD>$asp</TD></TR><TR><TD>Start Date</TD><TD>:</TD><TD>$start</TD></TR><TR><TD>Due By</TD><TD>:</TD><TD>$due</TD></TR><TR><TD>Priority</TD><TD>:</TD><TD>$prio</TD></TR><TR><TD>Status</TD><TD>:</TD><TD>$status</TD></TR></TABLE>";
} else {
	echo "Error: ".$sql."<br>".$con->error;
}

$con->close();

?>
<button class="GFG" 
    onclick="window.location.href = 'aspi.php';">
        View my inspirations
    </button>
