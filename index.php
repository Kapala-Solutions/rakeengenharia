<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rake Engenharia</title>
  </head>
  <body>

  <?php

  // The location of the PDF file
  // on the server
  $filename = "Institucional.pdf"; 

  // Header content type
  header("Content-type: application/pdf");

  header("Content-Length: " . filesize($filename));

  // Send the file to the browser.
  readfile($filename);
  ?>
  </body>
</html>
