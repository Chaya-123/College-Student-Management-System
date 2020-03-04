<?php  
echo "<body style='background-color:pink'>";
echo "<h1>Teacher Details Are:</h1>";
echo '<html>
      <body>
<style>
       img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}</style>
      <img src="teacher.jpg" alt="grad" width="500" height="333">
      </body>
      </html>';
$link = mysqli_connect("localhost", "root", "", "college1"); 
  
if ($link == false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
$trname=$_POST["trname"];
$sql = "SELECT * FROM teach_staff1 where tr_name='$trname'"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        if ($row = mysqli_fetch_array($res)) { 
            echo "<table>";
            echo "<tr>"; 
            echo "<th>Teacher name:</th><th>".$row['tr_name']."</th>";
            echo "</tr>";
            $sql1="SELECT course_name FROM course1 as c where  c.tr_id=".$row['tr_id']." ";
             if ($res1 = mysqli_query($link, $sql1)) { 
               if (mysqli_num_rows($res1) > 0) { 
                 while ($row1 = mysqli_fetch_array($res1)) { 
                   echo "<tr>";
                   echo "<th>Course-name:</th><th>".$row1['course_name']."</th>";
                   echo "</tr>";
            }
          }
        }
            $sql2="SELECT class_num,sem FROM class1  as cs where  cs.tr_id=".$row['tr_id']." ";
              if ($res2 = mysqli_query($link, $sql2)) { 
                if (mysqli_num_rows($res2) > 0) { 
                  while ($row2 = mysqli_fetch_array($res2)) { 
                   echo "<tr>";
                   echo "<th>Class:</th><th>".$row2['class_num']."</th> ";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<th>Sem:</th><th>".$row2['sem']."</th>";
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