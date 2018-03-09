<?php
include("inc/functions.php");
$conn = connectToDB();

//var_dump($_POST);

// define variables and set to empty values
$firstnameerror = "";
$lastnameerror = "";
$emailErr = "";
$websiteErr = "";
$messageErr = "";
$messageTitleErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstnameerror = "Required Field";
  }
  if (empty($_POST["lastName"])) {
     $lastnameerror = "Required Field";
  }

  if (empty($_POST["email"])) {
    $emailErr = "Required Field";
  }

  if (empty($_POST["website"])) {
    $websiteErr = "";
  }

  if (empty($_POST["message"])) {
    $messageErr = "Required Field";
  }

  if (empty($_POST["messageTitle"])) {
    $messageTitleErr = "Required Field";
  }
  else {
    if(isset($_POST['mySubmit']))
    {
      $firstName    = $_POST['firstName'];
      $insertion    = $_POST['insertion'];
      $lastName     = $_POST['lastName'];
      $messageTitle = $_POST['messageTitle'];
      $message      = $_POST['message'];
      $email        = $_POST['email'];
      $website      = $_POST['website'];

      $sql="INSERT INTO `guestbook` (firstName,insertion,lastName,message,email,website,messageTitle) VALUES ('$firstName','$insertion', '$lastName','$message', '$email','$website','$messageTitle')";

      $result = $conn->query($sql) or die($conn->error);
      if($result){
      echo '<span style="color:white;text-align:center;">Succesfull post!</span>';
      echo "<BR>";
      }
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Guestbook">
  <meta name="author" content="Daan Hertogs">
  <meta name="keywords" content="HTML,CSS,SQL,PHP">
  <meta name="copyright" content="ROC Ter AA">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>My GuestBook</title>
</head>
<body>

  <form action="" method="post">
    <fieldset>
      <strong>My guestbook</strong>
      <br ></br >
      <label>First name</label>
      <input id="firstName" type="text" name="firstName" placeholder="type your first name"/><span class="error">* <?php echo $firstnameerror;?></span></td>
      <br ><br />
      <label>Insertion</label>
      <input id="insertion" type="text" name="insertion" placeholder="enter your insertion"/>
      <br ></br >
      <label>Last name</label>
      <input id="lastName" type="text" name="lastName" placeholder="type your last name"/><span class="error">* <?php echo $lastnameerror;?></span></td>
      <br ></br >
      <label>Message Title</label>
      <input id="messageTitle" name="messageTitle" placeholder="type your message title"/><span class="error">* <?php echo $messageTitleErr;?></span></td>
      <br ></br >
      <label>Message</label>
      <textarea id="message" name="message" placeholder="type your message"></textarea><span class="error">* <?php echo $messageErr;?></span></td>
      <br ></br >
      <label>Email</label>
      <input id="email" type="text" name="email" placeholder="type your email"/><span class="error">* <?php echo $emailErr;?></span></td>
      <br ></br >
      <label>Website</label>
      <input id="website" type="text" name="website" placeholder="enter your website"/>
      <br ></br >
      <input type="submit" name="mySubmit" value="Send message">
      <input type="reset" name="Reset" value="Reset">
    </fieldset>
  </form>
  <div id="table-container">

      <?php
      $sql = "SELECT firstname, lastname, email, insertion, message, website, messageTitle FROM guestbook";
      $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "<table id='tabledata'><tr><th>First Name</th><th>Insertion</th><th>Last Name</th><th>Email</th><th>Message Title</th><th>message</th><th>Website</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["firstname"]."</td><td>".$row["insertion"]."</td><td> ".$row["lastname"]."</td><td> ".$row["email"]."</td><td> ".$row["messageTitle"]."</td><td> ".$row["message"]."</td><td> ".$row["website"]."</td></tr>";
  }
    echo "</table>";
  } else {
    echo "0 results";
  }
  ?>
  </div>
  <div id="footer">
    <p>Made by Daan Hertogs   |     ROC Ter AA     | © 2018</p>
    </div>
</body>
</html>
