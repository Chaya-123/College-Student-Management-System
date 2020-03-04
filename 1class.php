<?php  
echo "<body style='background-color:pink'>";
echo "<h1>Class Details Are:</h1>";
echo '<html>
      <body>
<style>
       img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}</style>
      <img src="class.jpg" alt="grad" width="500" height="333">
      </body>
      </html>';
$link = mysqli_connect("localhost", "root", "", "college1"); 
  
if ($link == false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
$trname=$_POST["number"];
$sql = "SELECT * FROM class1 where class_num=$trname"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<table>";
            echo "<tr>"; 
            echo "<th>Class-No:</th><th>".$row['class_num']."</th>";
            echo "</tr>";
            echo "<tr>"; 
            echo "<th>Sem:</th><th>".$row['sem']."</th>";
            echo "</tr>";
            echo "<tr>"; 
            echo "<th>Section:</th><th>".$row['sec']."</th>";
            echo "</tr>";
            echo "<tr>"; 
            echo "<th>Capacity:</th><th>".$row['capacity']."</th>";
            echo "</tr>";
            $sql1="SELECT tr_name FROM teach_staff1 as c where  c.tr_id=".$row['tr_id']."   ";
             if ($res1 = mysqli_query($link, $sql1)) { 
               if (mysqli_num_rows($res1) > 0) { 
                 if ($row1 = mysqli_fetch_array($res1)) { 
                   echo "<tr>";
                   echo "<th>Teacher-name:</th><th>".$row1['tr_name']."</th>";
                   echo "</tr>";
            }
          }
        }
            
        } 
        echo "</table>"; 
//        mysqli_free_res($res); 
    } 
    else { 
        echo "No matching records are found."; 
    } 
}

else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
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