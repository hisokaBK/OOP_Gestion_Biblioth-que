<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title> <?php echo $title ?> </title>
 <script src="https://cdn.tailwindcss.com"></script>
 <link rel="stylesheet" href="../../../public/assets/styles/style.css">
  <script src="assets/js/flach.js"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<?php 

  include(__DIR__.'/../templates/header.temp.php'); 

  include(__DIR__.'/../templates/addBook.temp.php'); 

  include(__DIR__.'/../templates/footer.temp.php')

?> 
</body>
</html>
