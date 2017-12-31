<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>bootstrap4</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="assets/summernote-lite.css" rel="stylesheet">
    <script src="assets/summernote-lite.js"></script>
  </head>
  <body>
    <div id="summernote"></div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
    </script>
  </body>
</html>