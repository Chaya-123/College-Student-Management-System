<!DOCTYPE html>
<html>
<head>
<style> 

h1 {
  color: blue;
  font-family: verdana;
  font-size: 200%;
  text-align: center;
}
h2 {
  color: grey;
  font-family: verdana;
  font-size: 150%;
  text-align: center;
}

p  {
  margin: 30px;
  color: red;
  font-family: courier;
  font-size: 100%;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
 body{
 background-color: light blue;
}
</style>
</head>
<body>

<h1>College Student Management System</h1>
<h2>Welcome To Student Login Page</h2> 
<img src="IMG_20170730_135736.jpg" alt="Trulli" width="500" height="333">

  <p>For any student's class information,provide student's name:</p>
    <form action="1insertcollege.php" method="POST">
   Name: <input type="text" name="name"><br>
<p> <input type="submit" value="student"></p>
</form>

 <p>For course and class of any teacher,provide teacher's name:</p>
 <form action="1collegebutton.php" method="POST">
 Teacher Name: <input type="text" name="trname"><br>
<p><input type="submit" value="teacher"></p>
</form>

 <p>For any student's administrative details,provide student's name:</p>
  <form action="1administration.php" method="POST">
   Name: <input type="text" name="name"><br>
<p><input type="submit" value="administration"></p>
 </form>

  <p>For class details and respective teachers,provide class number:</p>
  <form action="1class.php" method="POST">
   Class-No: <input type="number" name="number"><br>
<p><input type="submit" value="class"></p>
 </form>

 <p>For course number and students opting that course,provide course name:</p>
  <form action="1course.php" method="POST">
  Course-Name: <input type="text" name="name"><br>
<p><input type="submit" value="course"></p>
 </form>

 <p>To insert new student's details,provide following:</p>
  <form action="1insert.php" method="POST">
  <table>
  <tr>
  <td>Student-Name:</td>
  <td><input type="text" name="name"></td>
  </tr>
   <tr>
  <td>SSN:</td>
  <td><input type="number" name="num1"></td>
  </tr>
  <tr>
  <td>Course-Number:</td>
  <td><input type="number" name="num2"></td>
  </tr>
  <tr>
  <td>Class-Number:</td>
  <td><input type="number" name="num3"></td>
  </tr>
  <tr>
  <td>Teacher-id:</td>
  <td><input type="number" name="num4"></td>
  </tr>
  <tr>
<td><p><input type="submit" value="insert"></p></td>
 </tr>
</table>
 </form>


 <p>To delete student's details,provide following:</p>
  <form action="1delete.php" method="POST">
  <table>
   <tr>
  <td>SSN:</td>
  <td><input type="number" name="num1"></td>
  </tr>
 <tr>
<td><p><input type="submit" value="delete"></p></td>
 </tr>

</table>
 </form>
 <p>For Complete Student Table,press :</p>
 <form action="1procedure.php" method="POST">
 
<p><input type="submit" value="student"></p>
</form>

</body>
</html>
