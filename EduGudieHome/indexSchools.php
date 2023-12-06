<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: 404_1.html");
}else{
  $filter = $_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduGuide Home System - Explore Schools</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <style>
      @keyframes fade-in-left {
        0% {
          opacity: 0;
          transform: translateX(-20px);
        }
        100% {
          opacity: 1;
          transform: translateX(0);
        }
      }

input {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}

#button{
      background-color: purple;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    width: 100%;
}

a:link, a:visited {
  background-color: purple;
  color: white;
  border: 2px solid;
  border-radius: 25px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: white;
  color: black;
}

    </style>
<body>
    <header>
        <h1>Explore Schools</h1>
                    <div data-thq="thq-navbar-nav" class="home-desktop-menu">
              <nav class="home-links">
                  <span class="home-nav11"><a href="index1.php">Home    &nbsp; &nbsp; &nbsp; </a></span>
                  <span class="home-nav11"><a href="php/logout.php">Logout &nbsp;&nbsp;&nbsp;</a></span>
              </nav>
            </div>
    </header>

    <main>
        <section id="searchSection">
            <label for="searchInput">Search School:</label>
            <input type="text" id="searchInput" placeholder="Enter school name">
            <button id="button" onclick="searchSchools()">Search</button>
        </section>

        <section id="schoolList">
            <!-- School information will be dynamically added here -->
        </section>
    </main>

    <script src="data.js"></script>
    <script src="app.js"></script>

</body>
</html>
