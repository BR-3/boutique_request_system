<?php include "header.php"; ?>

<h1>Contact Us</h1>

<form id="contact" action = "processContact.inc.php" method="post">
    <fieldset>
      <label for="emailInput">*Email:</label>
      <input type="email" id="emailInput" name="emailInput" placeholder="Enter Email" required><br>
      <label for="firstName">*First Name:</label>
      <input type="text" id="firstName" name="firstName" placeholder="First name" required><br>
      <label for="firstName">*Last Name:</label>
      <input type="text" id="lastName" name="lastName" placeholder="Last name" required><br>
      <label for="topic">*Topic:</label>
      <input type="text" id="topic" name="topic" required><br>
      <textarea id="messageInput" name = "messageInput" placeholder="Enter Message" required></textarea><br>
      <button id=contactSubmit type="submit" value="Submit">Submit</button>
    </fieldset>
</form>

<?php
if (isset($_GET['success'])) {
    echo "<h2>" . $_GET['success'] . "</h2>";
}?>

<?php include "footer.php"; ?>