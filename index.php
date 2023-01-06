<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- In the HTML file -->
<!-- A button to trigger the request -->
<button id="button">Click me to get Data</button>

<!-- A container to display the data -->
<div id="container"></div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- The jQuery script to send the request and handle the response -->
<script>
$(document).ready(function() {
  $("#button").click(function() {
    // Send an async request to the PHP script
    $.ajax({
      url: 'backed.php',
      type: 'GET',
      success: function(response) {
        $("#container").html(response);
      }
    });
  });
});
</script>


</body>
</html>