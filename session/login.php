<?php
session_start ();
$etudiants=[
"eya"=>array("login"=>"eyadammak.ig@gmail.com","pwd"=>"272002","nom"=>"eya","prenom"=> "dammak"), 
"ali"=>array("login"=>"ali.benali@gmail.com","pwd"=>"alESCS","nom"=>"Ali ","prenom"=> "Benali" ),
"mohamed"=>array("login"=>"mohamed.ghorbali@gmail.com","pwd"=>"alESCS","nom"=>"mohamed ","prenom"=> "ghorbali" )
];

if (isset($_POST['login']) && isset($_POST['pwd'])) 
{ 
    $valide=false;
    foreach ($etudiants as $index => $value)
    {
        if ($value["login"] == $_POST['login'] && $value["pwd"]==$_POST['pwd'])
        {
            $_SESSION['login'] = $_POST['login']; 
            $_SESSION['pwd'] = $_POST['pwd'];
            $_SESSION['indice']=$index;
            $_SESSION['nom']=$value['nom'];
            $_SESSION['prenom']=$value['prenom'];
            $valide=true;
            break; 
        }
    }
    if($valide)
        header("location:page-etudiant.php"); 
    else
        header("location:index.html");
    echo "Les variables du formulaire ne sont pas déclarées.";
}
?>