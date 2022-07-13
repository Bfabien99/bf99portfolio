<?php

    class PortfolioHomeController{
        private function render(string $fichier, array $data = [], string $title = null){
            extract($data);

            // On démarre le buffer
            ob_start();
            require_once(ROOT.'views/'.$fichier.'.php');
            $content = ob_get_clean();

            require_once(ROOT.'views/layout/template.php');
        }

        public function index(){
            return $this->render('index',[],'');
        }
    }