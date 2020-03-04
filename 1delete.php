
<?php  
echo "<body style='background-color:pink'>";
echo "<h1>Student Deleted:</h1>";
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
$sname=$_POST["num1"];



      
   
$trigger="DELIMITER $$
 
CREATE TRIGGER before_stu_delete1
BEFORE DELETE
ON student1 FOR EACH ROW
BEGIN
    INSERT INTO stud_dele1(ssn,sname,course_no,class_no,teach_id)
    VALUES(OLD.ssn,OLD.sname,OLD.course_no,OLD.class_no,OLD.teach_id);
END$$    
 
DELIMITER" ;
 
$result1=mysqli_query($link,$trigger)
$sql = "delete FROM student1 where ssn='$sname'"; 
  $result=mysqli_query($link,$sql);
 

 echo "deleted";









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







