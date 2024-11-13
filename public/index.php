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
  <link rel="stylesheet" href="styles/animation.css">
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
  <script src="/node_modules/preline/dist/preline.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- Chatbot -->
  <?php
   if ($current_page != 'ai')
   echo 
  '

  <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
  <script src="https://files.bpcontent.cloud/2024/11/13/11/20241113111445-UURRS4PV.js"></script>
      
    ';
   ?>

  <script>const flyUpElements = document.querySelectorAll('.fly-up');

    function flyUpHandler() {
      flyUpElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;
        if (isVisible) {
          el.classList.add('animate');
        }
      });
    }

    window.addEventListener('scroll', flyUpHandler);</script>
</body>

</html>