<?php

class PortfolioModel{

        // Méthode pour sécuriser les entrées
        public function inputClean($post){
            $post = trim($post);
            $post = stripslashes($post);
            $post = strip_tags($post);
            $post = mb_strtolower($post);
            $post = ucwords($post);
            return $post;
        }

        public function contactFormat($contact){
            $new_contact = preg_replace('/[^0-9]/', '', $contact);
            return $this->inputClean($new_contact);
        }

        public function getConnexion(){

            try{
                $dsn="mysql:dbname=ecommerce;host=localhost";
                $password = "";
                $user = "root";

                $connect = new PDO($dsn,$user,$password,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);

                return $connect;
            }
            
            catch(Exception $e){
                echo $e->getMessage();
            }
        }

        // Requêtes
        
    }