<?php 

    class Controller { //Sebagai controller utama
        public function view($view, $data = [])
        {
            require_once '../app/views/' . $view .'.php';
        }
    }

?>