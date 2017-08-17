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
		 mysql_query("INSERT INTO ticket VALUES ('$train_no','$name','$age','$gender','$doj','$coach')");
		 echo "<script type='text/javascript'>alert('Records Updated Successfully!')</script>";
        ?>