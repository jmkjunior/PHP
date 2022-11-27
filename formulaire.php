<?php

require 'classe/form.classe.php';

$form=new form($_POST);

echo '<form method="post" action="#">';

$form->texte('Nom');
$form->texte('Prénom');
$form->email('Mail');
$form->texte('Téléphone');
$form->date('Naissance');
$form->submit('Envoyer');

echo '</form>';

?>