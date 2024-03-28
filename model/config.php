<?php
        # schéma vers la bdd
        try {
            $database = new PDO('mysql:host=localhost;dbname=blogs;charset=utf8', 'root', '');
        } 
        catch(Exception $e)
        {
            die('Erreur connexion your bdd : '.$e->getMessage());
        }

        
        $statement = $database->query(
            "SELECT id, titre, contenu, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ss') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5"
        );