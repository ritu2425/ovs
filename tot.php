<?php include "header.php";?>
<?php
require_once "common.php";
include "connection.php";
$sql = mysqli_query($con, 'SELECT distinct voted, COUNT(voted) as vo FROM voters group by voted');
while($row=$sql->fetch_array(MYSQLI_BOTH)){
echo $row['voted']; ?>&nbsp;&nbsp;<?php
echo $row['vo'] ;
echo '<br/>';

}?>


