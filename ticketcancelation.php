<?php
		$train_no= $_POST['txt1'];
		$name= $_POST['txt2'];
		$age= $_POST['txt3'];
		$gender= $_POST['txt4'];
		$doj= $_POST['txt5'];
		$coach= $_POST['txt6'];
		$con=mysql_connect("localhost","root","admin");
		if (!$con)
		{
          die("Connection failed: ".mysql_connect_error());
        }
         mysql_select_db("mydb3",$con);
		 $sql="DELETE FROM ticket WHERE train_no='$train_no'";
		 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} 
else {
    echo "Error deleting record: " . $conn->error;
}
        ?>