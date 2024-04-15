<?php
function nav_item(string $lien ,string $titre)
{
    $classe='nav-item';
    if($_SERVER['SCRIPT_NAME']===$lien)
        {
            $classe=$classe.'active';
            //  $classe.='active';
        }
    //syntaxe herodoc il html il 2 lezem ma9balha hata espacee
    return <<<html
    <li class=$class><a class="nav-link" href=$lien>$titre</a></li>
html;
    //return '<li class="'.$class.'"><a class="nav-link" href="'.$lien.'">'.$titre.'</a></li>';
}
?>

<?= nav_item('/index.php','Accueil');?>
<?= nav_item('/contact.php','Contact');?>