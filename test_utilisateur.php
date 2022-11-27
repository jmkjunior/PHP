<!DOCTYPE html>
<html>
 <head>
 <title>Cours PHP & MySQL</title>
 <meta charset="utf-8">
 <link rel="stylesheet" href="cours.css">
 </head>

 <body>
 <h1>Titre principal</h1>
 <?php
     require 'classe/utilisateur.php';

     $pierre = new Utilisateur();
     $mathilde = new Utilisateur();

     $pierre->user_name = 'Pierre';
     $pierre->user_pass = 'abcdef';

     $mathilde->user_name = 'Math';
     $mathilde->user_pass = 123456;
 ?>
 <p>Un paragraphe</p>
 </body>
</html>