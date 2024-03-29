<?php
class Post{
    static function getPost(){

    // We connect to the database.
       include_once "./model/config.php";
       $posts = [];
       while (($row = $statement->fetch())) {
           $post = [
               'title' => $row['titre'],
               'french_creation_date' => $row['date_creation_fr'],
               'content' => $row['contenu'],
            ];
   
           $posts[] = $post;
       }
   
       return $posts;
   
   }

}


