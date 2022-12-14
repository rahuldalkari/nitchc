<?php
include_once("sessions.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student's Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap');

.cla input[type=text] {
  width: 30%;
  padding: 10px 15px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid black;
  background-color:rgb(255, 106, 106);
}
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

.shaky {
  animation: shake 0.25s;
  animation-iteration-count: 1;
  box-shadow: 0 0 1em rgb(255, 255, 255);
  transition: box-shadow 0.5s;

}

@keyframes shake {
  50% {box-shadow: 0px 0px 20px rgb(255, 0, 0);}
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-0.5deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(0.5deg); }
  50% { transform: translate(-1px, 2px) rotate(-0.5deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-0.5deg); }
  80% { transform: translate(-1px, -1px) rotate(0.5deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-0.5deg); }
  
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

    <label for="password" ><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
    <input class="shaky" type="password" placeholder="Re-enter Password" name="password" id = "password" required><br><br>

    <button type="submit">Login</button>
    <a href="../homepage.php"><button type="button" class="cancelbtn">Cancel</button></a> <br>

  </div>
</form>

<br>
<br>

</body>
</html>
