<html>
    <head>
        <title>Show Trains</title>
		<style>
.center {
   margin-top: 50px;
    margin-left: 425px;
    margin-right: 200px;
    width: 35%;
    border: 3px solid #ed1b24;
    padding: 25px;
    text-align: center;
}
</style>
    </head>
    <body>
        <img src="Railwaytitle.jpg" width="1348" height="150">
        <br>
		<br>
		<a href="http://localhost:1234/www/railwaymainpage.html">Back</a><div class="center">
		<?php
		$con=mysql_connect("localhost","root","admin");
		if (!$con)
		{
          die("Connection failed: ".mysql_connect_error());
        }
         mysql_select_db("mydb3",$con);
		 $sql=mysql_query("SELECT * FROM trains");
		 $result=mysql_fetch_array($sql);
		 $select=mysql_query("SELECT * FROM trains");
		 echo "<table border=’1’>";
		 echo"<tr><th>Train No</th><th>Train Name</th><th>From Destination</th><th>To Destinations</th><th>Departure</th><th>Arrival</th></tr>";
		 while($row=mysql_fetch_array($select))
		 {
				echo "<tr>";
			    echo "<td>" ;
				echo $row['train_no'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['name'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['from'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['to'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['departure'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['arrival'];
				echo "</td>";
				echo "</tr>";
		 }
			echo "</table>";
		 ?>
		 </div>
		 </body>
		 </html>