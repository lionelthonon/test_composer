<?php
/* Crée un alias
 * Uniquement dans les fichiers -- N'est pas traité par PHP
 */
//use Test\MaClasse as MaSuperClasse;
//use Test\MonAutreClasse as UneDeuxiemeClasse;

/* Inclus la classe */
//include('classes/MaClasse.php');
/* Grace aux namespace, toutes les classes sont 'includes' en une seule ligne */
    require 'vendor/autoload.php';

echo get_class(new Test\MaClasse()).'<br />';
echo get_class(new Test\MonAutreClasse());
