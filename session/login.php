<?php
session_start ();
$etudiants=[ "mobe"=>array("login"=>"eyadammak.ig@gmail.com",
"pwd"=>"272002","nom"=>"eya dammak"), "albe"=>array("login"=>"ali.benali@gmail.com","pwd"=>"alESCS","nom"=>"Ali Benali" )];

if (isset($_POST['login']) && isset($_POST['pwd'])) { $valide=false;
foreach ($etudiants as $index => $value){
if ($value["login"] == $_POST['login'] && $value["pwd"]==$_POST['pwd']){
$_SESSION['login'] = $_POST['login']; $_SESSION['pwd'] = $_POST['pwd'];
$_SESSION['indice']=$index;
$_SESSION['nom']=$value['nom'];
$_SESSION['time-connection']=time();
   $valide=true;
break; }
    }
    if($valide)
header("location:page_etudiant.php"); else
header("location:index.html");
echo "Les variables du formulaire ne sont pas déclarées.";}
?>