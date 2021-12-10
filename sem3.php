<?php
include 'header.php';
include "dbConn.php"; // Using database connection file here 
$records = mysqli_query($db, "select * from result where sem = 'sem3'"); // fetch data from database 
while ($data = mysqli_fetch_array($records)) {
    // print_r($data); 
?>
<?php include 'tabledata.php';
}
?>
</table>
</body>

</html>