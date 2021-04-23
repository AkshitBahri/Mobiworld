

<?php
 $servername="localhost";
 $username="root";
 $password="";
 
 $databasename="database";
 $conn=mysql_connect($servername,$username,$password);
 mysql_select_db($databasename,$conn);
 ?>