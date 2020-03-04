<?php
echo "<body style='background-color:pink'>";

echo '<html>
      <body>
<style>
       img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}</style>
      <img src="success-1.jpg" alt="grad" width="500" height="333">
      </body>
      </html>';
$name = $_POST['name'];
$number = $_POST['num1'];
$cou_num = $_POST['num2'];
$cla_num = $_POST['num3'];
$tea_num = $_POST['num4'];

if (!empty($name) || !empty($number) || !empty($cou_num) || !empty($cla_num) || !empty($tea_num)) {
 $link = mysqli_connect("localhost", "root", "", "college1"); 
  
if ($link == false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
}  else {
     $SELECT = "SELECT ssn From student1 Where ssn = ? Limit 1";
     $INSERT = "INSERT Into student1 (sname,ssn,course_no,class_no,teach_id) values(?, ?, ?, ?, ?)";
     //Prepare statement


     $stmt = $link->prepare($SELECT);
     $stmt->bind_param("s", $number);
     $stmt->execute();
     $stmt->bind_result($number);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $link->prepare($INSERT);
      $stmt->bind_param("siiii",$name, $number,$cou_num,$cla_num,$tea_num);

     

      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Student with this ssn already exist";
     }
     $stmt->close();
     $link->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
<html>
<body>


<h4>To Go Back To Login Page Of Student Press back</h4>
<form action="1button.php">
<input type="submit" value="back">
</form>
</body>
</html>