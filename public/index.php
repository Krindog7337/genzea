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
  <header
    class="sticky top-4 inset-x-0 before:absolute before:inset-0 before:max-w-[66rem] before:mx-2 before:lg:mx-auto before:rounded-[26px] before:border before:border-secondary after:absolute after:inset-0 after:-z-[1] after:max-w-[66rem] after:mx-2 after:lg:mx-auto after:rounded-[26px] after:bg-accent/20 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full after:backdrop-blur-sm">
    <nav
      class="relative max-w-[66rem] w-full md:flex md:items-center md:justify-between md:gap-3 ps-5 pe-2 mx-2 lg:mx-auto py-2 rounded-full">
      <!-- Logo w/ Collapse Button -->
      <div class="flex items-center justify-between">
        <a class="flex justify-center font-semibold text-xl text-black focus:outline-none focus:opacity-80 font-heading"
          href="#" aria-label="Brand">
          <svg version="1.1" viewBox="0 0 376.48047 166.33398" height="25" id="svg9" xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg" class="my-auto">
            <defs id="defs9" />
            <rect
              style="display:none;fill:#000000;fill-opacity:1;stroke:none;stroke-width:20;stroke-linecap:round;stroke-dasharray:none;stroke-opacity:1;paint-order:stroke fill markers"
              id="rect13" width="500" height="500" x="-61.875" y="-166.8418" />
            <path id="path11"
              style="color:#000000;fill:#2a7fff;fill-opacity:1;stroke-linecap:round;-inkscape-stroke:none;paint-order:stroke fill markers"
              d="m 188.125,3.125e-6 c -22.20398,0 -40.64054,10.918889875 -55.76953,25.496089875 -8.1583,7.86075 -15.57194,16.87861 -22.66016,26.29883 4.20405,5.77173 8.30026,11.54028 12.24805,17.18164 0.4087,0.58403 0.80349,1.13336 1.21094,1.71484 8.0807,-11.07128 16.14755,-21.33958 24.46484,-29.35351 12.79016,-12.32368 25.34056,-19.33789 40.50586,-19.33789 15.17397,0 27.68785,6.9942 40.42188,19.2832 8.30025,8.01018 16.33968,18.28078 24.38476,29.35938 0.34753,-0.49918 0.68479,-0.96964 1.0332,-1.47071 3.99258,-5.74187 8.13715,-11.6182 12.39258,-17.49609 -7.04045,-9.39422 -14.4109,-18.38422 -22.5332,-26.22266 C 228.74042,10.896483 210.32031,3.125e-6 188.125,3.125e-6 Z M 11,89.158203 c -5.635513,0 -11,4.81282 -11,10.999997 v 54.3125 c 2e-5,1.99415 0.538998,3.85989 1.466797,5.47266 a 11,11 0 0 0 0.03125,0.0508 c 0.960247,1.64837 2.333743,3.02264 3.982422,3.98242 a 11,11 0 0 0 0.04297,0.0254 c 1.614071,0.92984 3.480045,1.46873 5.476562,1.46875 23.019245,0 42.184789,-10.77538 57.863279,-25.36328 8.24134,-7.66807 15.70812,-16.44326 22.7832,-25.63086 -3.91702,-5.46375 -7.75054,-10.91941 -11.48632,-16.257807 -0.63513,-0.90759 -1.25741,-1.76308 -1.89063,-2.66407 C 70.30726,106.26548 62.26628,116.19803 53.87891,124.00198 43.74326,133.4326 33.550373,139.80453 22.000001,142.28714 V 111.1582 H 31.625 c 6.075042,-6e-5 10.99994,-4.92496 11,-11 -6e-5,-6.075027 -4.924962,-10.999937 -11,-10.999997 z m 286.72266,6.45312 c -0.63216,0.90542 -1.25256,1.76572 -1.88672,2.67774 -3.72653,5.359267 -7.55362,10.836207 -11.4668,16.320307 6.93915,9.06466 14.26169,17.7222 22.33203,25.31055 15.53303,14.60529 34.5353,25.44718 57.40625,25.55078 a 11,11 0 0 0 11.04883,-10.94922 11,11 0 0 0 -10.94922,-11.04883 c -16.15238,-0.0732 -29.32371,-7.25135 -42.43555,-19.58007 -8.26523,-7.77161 -16.19384,-17.64199 -24.04882,-28.281257 z" />
            <path id="path19"
              style="color:#000000;fill:#c83737;stroke-width:0.462963;stroke-linecap:round;-inkscape-stroke:none"
              d="M 11,0.86132313 A 11,11 0 0 0 0,11.861323 a 11,11 0 0 0 11,11 c 16.335729,0 29.6454,7.15772 42.87891,19.47071 13.2335,12.31299 25.62964,29.66623 38.16015,47.57226 12.53051,17.906037 25.18739,36.356367 40.31641,50.933597 15.12901,14.57722 33.56553,25.49609 55.76953,25.49609 22.19533,0 40.61541,-10.89646 55.69922,-25.45312 13.50011,-13.02831 24.97806,-29.15396 36.16211,-45.222657 h 83.99414 c 6.90355,0 12.5,-5.59645 12.5,-12.5 0,-6.90355 -5.59645,-12.5 -12.5,-12.5 h -66.20899 c 7.8393,-10.614 15.75164,-20.45911 24,-28.21484 13.11185,-12.32875 26.28315,-19.50887 42.43555,-19.58204 A 11,11 0 0 0 375.15625,11.812503 11,11 0 0 0 364.10742,0.86132312 c -22.87097,0.10361 -41.87321,10.94741988 -57.40625,25.55273988 -15.53302,14.60531 -28.3621,33.10358 -40.83203,51.03711 -12.46993,17.93353 -24.58823,35.310597 -37.32226,47.599607 -12.73404,12.28901 -25.24789,19.2832 -40.42188,19.2832 -15.16532,0 -27.71569,-7.01615 -40.50586,-19.33984 C 134.82896,112.67045 122.63402,95.252863 110.06445,77.291013 97.49488,59.329163 84.5418,40.814483 68.86328,26.226563 53.18477,11.638643 34.019268,0.86132313 11,0.86132313 Z" />
            <path id="rect1"
              style="fill:#c83737;stroke:#9dec64;stroke-width:0;stroke-linecap:round;paint-order:stroke fill markers"
              d="m 179.04297,33.105473 c -3.2017,0.7994 -6.30976,2.09098 -9.41797,3.81445 v 92.492187 c 3.10839,1.72388 6.21613,3.0148 9.41797,3.81445 z m 19.08203,0.27148 v 99.580077 c 3.19412,-0.88702 6.30406,-2.23697 9.41797,-4.0586 V 37.435543 c -3.1139,-1.82134 -6.22395,-3.17167 -9.41797,-4.05859 z m -47.58203,19.32227 c -3.10569,3.30767 -6.24612,6.96967 -9.41797,10.93164 v 39.128897 c 3.17051,3.9532 6.30415,7.51138 9.41797,10.82227 z m 76.08203,0.99414 v 58.882807 c 3.11418,-3.39331 6.24899,-7.05814 9.41797,-11.07813 V 64.896483 c -3.16803,-4.02483 -6.31213,-7.81306 -9.41797,-11.20312 z" />
          </svg>
          <span class="hidden sm:block ml-4 mt-0.5 text-text">

            Genzea
          </span>
        </a>

        <!-- Collapse Button -->
        <div class="md:hidden">
          <button type="button"
            class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
            id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic"
            aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
            <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
            <span class="sr-only">Toggle navigation</span>
          </button>
        </div>
        <!-- End Collapse Button -->
      </div>
      <!-- End Logo w/ Collapse Button -->

      <!-- Collapse -->
      <div id="hs-header-classic"
        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
        aria-labelledby="hs-header-classic-collapse">
        <div
          class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
          <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
            <a class="p-2 flex items-center <?php echo ($page == '' || $page == 'home') ? 'text-primary' : 'text-text/80 dark:text-text/90'; ?> focus:outline-none focus:text-blue-600"
              href="index.php?p=" aria-current="page">
              <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                <path
                  d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              </svg>
              Beranda
            </a>

            <a class="p-2 flex items-center <?php echo ($page == 'article' || $page == 'article') ? 'text-primary' : 'text-text/80 dark:text-text/90'; ?> hover:text-secondary focus:outline-none focus:text-gray-500"
              href="index.php?p=article">
              <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
              </svg>
              Artikel
            </a>

            <a class="p-2 flex items-center  <?php echo ($page == 'video' || $page == 'video') ? 'text-primary' : 'text-text/80 dark:text-text/90'; ?> hover:text-secondary focus:outline-none focus:text-gray-500"
              href="index.php?p=video">
              <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 12h.01" />
                <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                <path d="M22 13a18.15 18.15 0 0 1-20 0" />
                <rect width="20" height="14" x="2" y="6" rx="2" />
              </svg>
              Video
            </a>

            <a class="p-2 flex items-center  <?php echo ($page == 'quiz' || $page == 'quiz') ? 'text-primary' : 'text-text/80 dark:text-text/90'; ?> hover:text-secondary focus:outline-none focus:text-gray-500"
              href="index.php?p=quiz">
              <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                <path d="M18 14h-8" />
                <path d="M15 18h-5" />
                <path d="M10 6h8v4h-8V6Z" />
              </svg>
              Kuis
            </a>

            <a class="p-2 flex items-center  <?php echo ($page == 'about' || $page == 'about') ? 'text-primary' : 'text-text/80 dark:text-text/90'; ?> hover:text-secondary focus:outline-none focus:text-gray-500"
              href="index.php?p=about">
              <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                <path d="M18 14h-8" />
                <path d="M15 18h-5" />
                <path d="M10 6h8v4h-8V6Z" />
              </svg>
              Tentang
            </a>

            <!-- divider -->
            <div
              class="relative flex flex-wrap items-center gap-x-1.5 md:ps-2.5  md:ms-1.5 before:block before:absolute before:top-1/2 before:-start-px before:w-px before:h-4 before:bg-gray-300 before:-translate-y-1/2">

              <!-- Theme Switcher -->
              <div class="m-2 md:my-0">

                <button type="button"
                  class="hs-dark-mode-active:hidden flex my-auto hs-dark-mode font-medium text-text/80 rounded-full hover:text-indigo-800 md:hover:rotate-12 md:transition-all focus:outline-none focus:bg-gray-200"
                  data-hs-theme-click-value="dark">
                  <span class="group inline-flex shrink-0 justify-center items-center size-9">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                    </svg>
                  </span>
                  <span class="ml-3 md:hidden">Tema</span>
                </button>
                <button type="button"
                  class=" hs-dark-mode-active:flex my-auto overflow-hidden hidden hs-dark-mode font-medium text-text/90 md:transition-transform  md:hover:rotate-45 rounded-full hover:text-yellow-300 focus:outline-none focus:bg-gray-200"
                  data-hs-theme-click-value="light">
                  <span class="group inline-flex shrink-0 justify-center items-center size-9">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="4"></circle>
                      <path d="M12 2v2"></path>
                      <path d="M12 20v2"></path>
                      <path d="m4.93 4.93 1.41 1.41"></path>
                      <path d="m17.66 17.66 1.41 1.41"></path>
                      <path d="M2 12h2"></path>
                      <path d="M20 12h2"></path>
                      <path d="m6.34 17.66-1.41 1.41"></path>
                      <path d="m19.07 4.93-1.41 1.41"></path>
                    </svg>
                  </span>
                  <span class="ml-3 md:hidden">Tema</span>
                </button>
              </div>
            </div>
            <!-- End Button Group -->
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->


  <!-- content belongs here -->
  <main class="min-h-screen">

    <?php include $content ?>
  </main>

  <!-- footer -->
  <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <!-- Grid -->
    <div class="text-center">
      <div>
        <a class="flex-none text-2xl text-text font-heading" href="#" aria-label="Brand">Genzea</a>
      </div>
      <!-- End Col -->

      <div class="mt-3 text-text opacity-60">
        <p>We're part of the <a
            class="text-primary decoration-2 hover:underline focus:outline-none focus:underline font-medium"
            href="#">Terra</a> family.</p>
        <p>
          © 2024 Terra.
        </p>
      </div>

      <!-- Social Brands -->
      <div class="mt-3 space-x-2">
        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
          href="#">
          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16">
            <path
              d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
          </svg>
        </a>
        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
          href="#">
          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16">
            <path
              d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg>
        </a>
        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
          href="#">
          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16">
            <path
              d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
          </svg>
        </a>
        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
          href="#">
          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16">
            <path
              d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
          </svg>
        </a>
      </div>
      <!-- End Social Brands -->
    </div>
    <!-- End Grid -->
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- preline script -->
  <script src="node_modules/preline/dist/preline.js"></script>

  <!-- Chatbot -->
  <script defer src="https://app.fastbots.ai/embed.js" data-bot-id="cm25uqgbk6g5vsvbkz473j9g1"></script>
  <script src="/public/script/aiButton.js"></script>
</body>

</html>