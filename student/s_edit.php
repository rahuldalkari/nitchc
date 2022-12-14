<?php
include_once("sessions.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student's Update Page</title>
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

input {
  width: 69%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 20px;
}
input[type="textarea"]{
height: 100px;
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

<h1 align="center" font-family= 'Outfit'>Update information</h1>

<form action="s_edit_backend.php" method="post">
  <div class="imgcontainer">
    <img src="https://image.freepik.com/free-vector/happy-diverse-students-celebrating-graduation-from-school_74855-5853.jpg" alt="Avatar" class="avatar" style="height: 380; width: 480;">
  </div>

  <div class="container">
    <label for="rollno"><b>Roll Number&nbsp</b></label><br>
    <input type="text" placeholder="Enter roll number" name="rollno" id = "rollno" required maxlength="9"><br>

    <label for="address"><b>Address&nbsp</b></label><br>
    <input type="textarea" placeholder="Enter new address" name="address" id = "address" ><br>

    <label for="phone"><b>Phone number&nbsp</b></label><br>
    <input type="number" placeholder="Enter new phone number" name="phone" id = "phone"><br>

    <label for="gphone"><b>Guardian's phone number&nbsp</b></label><br>
    <input type="number" placeholder="Enter new phone number" name="gphone" id = "gphone"><br>

    <label for="password"><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp</b></label><br>
    <input type="password" placeholder="Enter new password" name="password" id = "password" ><br>

    <label for="cpassword"><b>Confirm Password&nbsp&nbsp&nbsp&nbsp&nbsp</b></label><br>
    <input type="password" placeholder="Re-enter new password" name="cpassword" id = "cpassword" ><br><br>

    <button type="submit">Update</button>
    <button type="button" class="cancelbtn" onclick="goBack()">Cancel</button><br>
      <script>
        function goBack() {
          window.history.back();
        }
        </script>

  </div>
</form>

<br>
<br>

</body>
</html>
