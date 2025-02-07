<?php
namespace Core;

class Controller {

    public function render($view, $data = []) {
        extract($data);

        $viewFile = "../app/views/{$view}.php";

        if (file_exists($viewFile)) {
            include $viewFile;
        } else {
            echo "view not found!";
        }
    }
}

