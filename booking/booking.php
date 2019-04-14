<?php

$servername = "localhost";
$username = "nadho55m_packers";
$password = "hunny24moon";
$dbname = "nadho55m_packers";
$table = "leopackers";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Done";die;

$sql = "SELECT * FROM leopackers";
$result = $conn->query($sql);


?>
<div style="margin: 50px;">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Message</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id</th>
                <th>Message</th>
            </tr>
        </tfoot>
        <tbody>
<?php 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$data = str_replace('++', '<br />', $row["msg"]);
        echo "<tr><td>" . $row["id"]. "</td><td>"; echo html_entity_decode($data); echo "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</tbody>
</table>
</div>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>