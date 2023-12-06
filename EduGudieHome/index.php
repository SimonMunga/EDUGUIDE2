<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: 404_1.html");
}else{
  $filter = $_SESSION['adminname'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EduGuide Home System - Administrator Homepage</title>
    <meta property="og:title" content="Flimsy Gleaming Stinkbug" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }

    </style>
            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData1();
})  
</script>
            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData2();
})  
</script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
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

    </style>
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./index.css" rel="stylesheet" />

      <div class="home-container">
        <div class="home-header">
          <header data-thq="thq-navbar" class="home-navbar-interactive">
            <span class="home-logo">EduGuide</span>
            <div data-thq="thq-navbar-nav" class="home-desktop-menu">
              <nav class="home-links">
                  <span class="home-nav11"><a href="#">Home    &nbsp; &nbsp; </a></span>
                  <span class="home-nav21"><a href="#about">About Us    &nbsp; &nbsp; </a></span>
                  <span class="home-nav31"><a href="#features">Our Features    &nbsp; &nbsp; </a></span>
                  <span class="home-nav41"><a href="#contact">Contact    &nbsp; &nbsp; </a></span>
              </nav>
                <div class="home-buttons1">
                  <button class="home-login1 button"><a href="php/logout.php">Logout</a></button>
                </div>
            </div>
            <div data-thq="thq-burger-menu" class="home-burger-menu">
              <svg viewBox="0 0 1024 1024" class="home-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-thq="thq-mobile-menu" class="home-mobile-menu">
              <div class="home-nav">
                <div class="home-top">
                  <span class="home-logo1">SRS</span>
                  <div data-thq="thq-close-menu" class="home-close-menu">
                    <svg viewBox="0 0 1024 1024" class="home-icon02">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <nav class="home-links1">
                  <span class="home-nav11"><a href="#">Home    &nbsp; &nbsp; </a></span>
                  <span class="home-nav21"><a href="#database">Database    &nbsp; &nbsp; </a></span>
                  <span class="home-nav31"><a href="#module">My Module    &nbsp; &nbsp; </a></span>
                  <span class="home-nav41"><a href="#contact">Contact    &nbsp; &nbsp; </a></span>
                </nav>
                <div class="home-buttons1">
                  <button class="home-login1 button"><a href="php/logout.php">Logout</a></button>
                </div>
              </div>
              <div>
                <svg viewBox="0 0 950.8571428571428 1024" class="home-icon04">
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg>
                <svg viewBox="0 0 877.7142857142857 1024" class="home-icon06">
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg>
                  <svg viewBox="0 0 602.2582857142856 1024" class="home-icon08">
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
          </header>
        </div>
        <div class="home-hero">
          <div class="home-hero1">
            <div class="home-container01">
              <h1 class="home-hero-heading heading1">
                Explore and Find Your Perfect School
              </h1>
              <span class="home-hero-sub-heading">
                Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!
              </span>
              <div class="home-btn-group">
                <button class="home-hero-button1 button"><a href="#module">My Module</a></button>
                <button class="home-hero-button2 button">
                  <a href="#database">Database&nbsp;→ </a>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div id="database" class="home-features">
          <div class="home-features-container">
            <div class="home-features1">
              <div class="home-container03">
                <span class="home-text03 sectionTitle">
                  <span>Database</span>
                  <br />
                </span>
                <h2 class="home-features-heading heading2">
                  Users
                </h2>
              </div>
              <div class="home-container04">
                                        <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
 <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">User Type</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["User_Type"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this user?')?window.location.href='php/insertion.inc.php?action=deleteU&id=<?php echo($row["User_ID"]); ?>':true;" title='Delete User'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }

?>

</table>
<br>
<button class="home-banner-button button"><a onclick="printData();">Generate Report</a></button>
<br>
              </div>
                            <div class="home-container03">
                <h2 class="home-features-heading heading2">
                  Schools
                </h2>
              </div>
                            <div class="home-container04">
                                        <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">School ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Location</th>
 <th style="text-align: left;
  padding: 8px;">Description</th>
  <th style="text-align: left;
  padding: 8px;">Fees (in kshs.)</th>
  <th style="text-align: left;
  padding: 8px;">Image</th>  
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$sql = "SELECT `School_ID`, `Name`, `Image`, `Location`, `Fees`, `Description`, `Created_On` FROM `schools`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td title="Created On: <?php echo($row["Created_On"]); ?>"><?php echo($row["School_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Location"]); ?></td>
<td><?php echo($row["Description"]); ?></td>
<td><?php echo($row["Fees"]); ?> kshs.</td>
<td><img src="img/<?php echo($row["Image"]); ?>" style="width: 150px;" title="<?php echo($row["Name"]); ?>"></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this school?')?window.location.href='php/insertion.inc.php?action=deleteS&id=<?php echo($row["School_ID"]); ?>':true;" title='Delete School'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }

?>

</table>
<br>
<button class="home-banner-button button"><a onclick="printData1();">Generate Report</a></button>
<br>
              </div>
                            <div class="home-container03">
                <h2 class="home-features-heading heading2">
                  Reviews
                </h2>
              </div>
                            <div class="home-container04">
                                        <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Review ID</th>
<th style="text-align: left;
  padding: 8px;">User_ID</th>
  <th style="text-align: left;
  padding: 8px;">School_ID</th>
 <th style="text-align: left;
  padding: 8px;">Rating</th>
  <th style="text-align: left;
  padding: 8px;">Details</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$sql = "SELECT `Review_ID`, `User_ID`, `School_ID`, `Rating`, `Created_At`, `Details` FROM `reviews`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td title="Created At: <?php echo($row["Created_At"]); ?>"><?php echo($row["Review_ID"]); ?></td>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["School_ID"]); ?></td>
<td><?php echo($row["Rating"]); ?></td>
<td><?php echo($row["Details"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }

?>

</table>
<br>
<button class="home-banner-button button"><a onclick="printData2();">Generate Report</a></button>
<br>
              </div>
            </div>
          </div>
        </div>
         <div id="module" class="home-features">
          <div class="home-features-container">
            <div class="home-features1">
              <div class="home-container03">
                <span class="home-text03 sectionTitle">
                  <span>My Module</span>
                  <br />
                </span>
                <h2 class="home-features-heading heading2">
                  Update My Details & Add A School
                </h2>
              </div>
              <div class="home-container04">
                <form action="php/insertion.inc.php" method="POST">
                  <input type="text" required placeholder="Fullname" value="<?php echo $row1['Fullname']; ?>" name="fname">
                  <input type="hidden" value="1" name="mod" required>
                  <input type="hidden" value="<?php echo $filter; ?>" name="uid" required>
                  <br>
                  <input type="text" required placeholder="Phone Number" value="<?php echo $row1['Phone_Number']; ?>" name="phone">
                  <br>
                  <input type="email" required placeholder="Email Address" value="<?php echo $row1['Email_Address']; ?>" name="email">
                  <br>
                  <input type="password" name="password" placeholder="Password" required>
                  <br>
                  <input type="password" name="cpassword" placeholder="Confirm Password" required>
                  <br>
                  <input name="upu" type="submit" value="Update My Details" id="button">
                </form>

                                <form action="php/insertion.inc.php" enctype="multipart/form-data" method="POST">
                  <input type="text" required placeholder="Name" name="sname">
                  <br>
                  <input type="text" required placeholder="Location" name="loc">
                  <br>
                  <input type="number" min="0" required placeholder="Fees (in kshs.)" name="fees">
                  <br>
                  <input type="text" required placeholder="Curriculum" name="prog">
                  <br>                  
                  <input type="text" required placeholder="Description" name="desc">
                  <br>
                  <input type="text" required placeholder="Values" name="val">
                  <br>
                  <input type="text" required placeholder="Level(s) of Education" name="lev">
                  <br>
                  <label style="color: black;">Pick An Image of the School:</label>
                  <br>
                  <input type="file" accept=".jpg, .png, .jpeg" required name="image">
                  <br>
                  <input name="addschool" type="submit" value="Add A School" id="button">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div id="contact" class="home-footer">
          <footer class="home-footer1">
            <div class="home-container32">
              <span class="home-logo2">SRS</span>
              <nav class="home-nav1">
                  <span class="home-nav11"><a style="color: white;" href="#">Home    &nbsp; &nbsp; </a></span>
                  <span class="home-nav21"><a style="color: white;" href="#database">Database     &nbsp; &nbsp; </a></span>
                  <span class="home-nav31"><a style="color: white;" href="#module">My Module    &nbsp; &nbsp; </a></span>
                  <span class="home-nav41"><a style="color: white;" href="logout.php">Logout    &nbsp; &nbsp; </a></span>
              </nav>
            </div>
            <div class="home-separator"></div>
            <div class="home-container33">
              <span class="home-text61">
                © 2023, All Rights Reserved.
              </span>
              <div class="home-icon-group1">
                <svg viewBox="0 0 950.8571428571428 1024" class="home-icon10">
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg>
                <svg viewBox="0 0 877.7142857142857 1024" class="home-icon12">
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg>
                <svg viewBox="0 0 602.2582857142856 1024" class="home-icon14">
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
