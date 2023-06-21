<!DOCTYPE html>
<html>
<head>
  <title>HTML Injection Example</title>
</head>
<body>
  <h1>HTML Injection Example</h1>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userInput = $_POST['userInput'];
    $output = "<div>" . $userInput . "</div>";
  }
  ?>
  <form method="POST" action="">
    <label for="userInput">Enter your message:</label>
    <input type="text" id="userInput" name="userInput">
    <button type="submit">Submit</button>
  </form>
  
  <div id="outputContainer">
    <?php echo isset($output) ? $output : ''; ?>
  </div>
</body>
</html>
//HELLO
