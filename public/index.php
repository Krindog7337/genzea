<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../src/content.php";
$page = isset($_GET['p']) ? $_GET['p'] : ''; 
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/output.css">
  <title>Genzea</title>
</head>

<body class="bg-background font-body box-border">
  <!-- ========== HEADER ========== -->
<?php
$current_page = isset($_GET['p']) ? $_GET['p'] : '';
if ($current_page != 'ai')
include $navbar ?>
  <!-- ========== END HEADER ========== -->


  <!-- content belongs here -->
  <main class="min-h-screen">

    <?php include $content ?>
  </main>

  <!-- footer -->
  <?php
if ($current_page != 'ai')
include $footer ?>
 
  <!-- ========== END FOOTER ========== -->

  <!-- preline script -->
  <script src="node_modules/preline/dist/preline.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- Chatbot --><?php
   if ($current_page != 'ai')
   echo 
   '<script defer src="https://app.fastbots.ai/embed.js" data-bot-id="cm25uqgbk6g5vsvbkz473j9g1"></script>';
   ?>
</body>

</html>