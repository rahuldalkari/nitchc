<?php
include_once("sessions.php");
if(isset($_SESSION['logged_in'])){
  if($_SESSION['logged_in'] == '1'){
    header("Location: s_info.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student's Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap');

body {
      font-family: Arial, Helvetica, sans-serif;
      padding: 20px;

      background-image: url('G25_presentation.png');
      background-repeat: no-repeat;
      background-position: auto;
      background-size: cover;
      backdrop-filter: blur(0px);
    }

form {border: 0px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 20px;
}

button {
  background-color: #045aaa;
  color: white;
  padding: 13px 18px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 175px;
  border-radius: 20px;
}

button:hover {
  opacity: 0.8;
  border-radius: 20px;
}

.cancelbtn {
  background-color: #cce0ff;
  color: black;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 35%;
  height: 45%;
}


.container {
  padding-left: 37%;
  padding-right: 28%;
}

span.psw {
  float: left;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h1 align="center" font-family= 'Outfit'>Student Login</h1>

<form action="s_info.php" method="post">
  <div class="imgcontainer">
    <img src="https://image.freepik.com/free-vector/happy-diverse-students-celebrating-graduation-from-school_74855-5853.jpg" alt="Avatar" class="avatar" style="height: 380; width: 480;">
  </div>

  <div class="container">
    <label for="rollno"><b>Roll Number&nbsp</b></label>
    <input type="text" placeholder="Enter Username" name="rollno" id = "rollno"required maxlength="9"><br>

    <label for="password"><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
    <input type="password" placeholder="Enter Password" name="password" id = "password" required><br><br>

    <button type="submit">Login</button>
    <a href="../homepage.php"><button type="button" class="cancelbtn">Cancel</button></a> <br>

  </div>
</form>

<br>
<br>

</body>
</html>
