<?php 

class TemplateController{
    public function header() {
            // Mengambil semua data acara
            require_once '../app/views/template/header.php';
        }

    public function footer() {
            // Mengambil semua data acara
            require_once '../app/views/template/footer.php';
        }
    }

?>