<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rake Engenharia</title>
  </head>
  <body>
    <?php

  // Store the file name into variable
  $file = 'Institucional.pdf';
  $filename = 'Institucional.pdf'; 

  // Header content type
  header('Content-type: application/pdf');

  header('Content-Disposition: inline; filename="' . $filename . '"');

  header('Content-Transfer-Encoding: binary');

  header('Accept-Ranges: bytes');

  // Read the file
  @readfile($file);

  ?>
  </body>
</html>
