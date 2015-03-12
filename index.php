<?php
/* Crée un alias
 * Uniquement dans les fichiers -- N'est pas traité par PHP
 */
use Test/MaClasse as MaSuperClasse

/* Inclus la classe */
//include('classes/MaClasse.php');
    require 'vendore/autoload.php';

echo get_class(new MaSuperClasse());
