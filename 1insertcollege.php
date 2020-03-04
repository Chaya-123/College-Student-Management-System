
<?php  
echo "<body style='background-color:pink'>";
echo "<h1>Student Details Are:</h1>";
echo '<html>
      <body>
<style>
       img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}</style>
      <img src="graduated.png" alt="grad" width="500" height="333">
      </body>
      </html>';
$link = mysqli_connect("localhost", "root", "", "college1"); 
  
if ($link == false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
$sname=$_POST["name"];

$sql="select * from student1 where sname='$sname'";
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        

        while ($row = mysqli_fetch_array($res)) { 
            echo "<table>";
            echo "<tr>";
            echo "<th>Student Name:</th><th>".$row['sname']."</th>"; 
            echo "</tr>";
            echo "<tr>";
            echo "<th>Student-id:</th><th>".$row['ssn']."</th>"; 
            echo "</tr>";
            echo "<tr>";
            echo "<th>Course-no:</th><th> ".$row['course_no']."</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Class-no:</th><th>".$row['class_no']."</th>"; 
            echo "</tr>";
            echo "<tr>";
            echo "<th>Teacher-ids:</th><th>".$row['teach_id']."</th>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
//        mysqli_free_res($res); 
    } 
    else { 
        echo "No matching records are found."; 
    } 
}

mysqli_close($link); 
?> 

<html>
<body>



<h4>To Go Back To Login Page Of Student Press back</h4>
<form action="1button.php">
<input type="submit" value="back">
</form>
</body>
</html>