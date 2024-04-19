<?php
  $name = $_POST['name'];
  $text_area = $_POST['text_area'];
	
  $conn = new mysqli('localhost', 'root', '', 'test');
  if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into comments(name, text_area) values(?, ?)");
    $stmt->bind_param("ss", $name, $text_area);
    $execval = $stmt->execute();
    $stmt->close();
    $conn->close();
    
    // Display the success message
    echo "Your Thoughts about this website has been successfully submitted ...";
  }
?>

<script>
  // Set a timeout to redirect to the home page after 2 seconds
  setTimeout(function() {
    window.location.href = 'index.php'; // Replace 'home.html' with the actual URL of your home page
  }, 2000); // 2000 milliseconds = 2 seconds
</script>
