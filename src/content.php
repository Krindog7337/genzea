<?php

$navbar = "../src/pages/navbar.php";

$footer = "../src/pages/footer.php";


$page = isset($_GET['p']) ? $_GET['p'] : 'home'; // Default to 'home'

// Logic for quiz listing page (quiz.php) or individual quiz pages (quiz1-quiz4.php)
if ($page == 'quiz') {
    // Quiz listing page
    $content = "../src/pages/quiz.php"; 
} elseif (preg_match("/^quiz[1-4]$/", $page)) {
    // Individual quiz pages like quiz1.php, quiz2.php, etc.
    $content = "../src/pages/quiz/$page.php";
} else {
    // For other pages like video, article, etc.
    $file = "../src/pages/$page.php";
    
    if (file_exists($file)) {
        $content = $file; // Use the page if it exists
    } else {
        $content = "../src/pages/home.php"; // Fallback to home.php
    }
}
?>
