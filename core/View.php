<?php
// namespace Core;

// use Twig\Environment;
// use Twig\Loader\FilesystemLoader;

// class View {
//     private static $twig = null;

//     public static function render($view, $data = []) {
//         if (self::$twig === null) {
//             $loader = new FilesystemLoader('../app/Views');
//             self::$twig = new Environment($loader);
//         }

//         echo self::$twig->render($view . '.twig', $data);    
//     }
// }


/**************** without twig */

// <?php
// namespace Core;

// class View {
//     public static function render($view, $data = []) {
//         extract($data);
//         $viewFile = "../app/Views/{$view}.php";

//         if (file_exists($viewFile)) {
//             require_once $viewFile;
//         } else {
//             die("View '{$view}' not found.");
//         }
//     }
// }


