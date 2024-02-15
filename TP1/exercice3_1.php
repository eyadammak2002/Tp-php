<!DOCTYPE html> 
<html>     
    <head>
        <title>Exeercice 3</title>
    </head>     
    <body>     
        <fieldset>         
            <h1> Les tabeaux </h1>        
             <?php                 
             $Prenom= array("ali", "salma", "mohamed" , "ines" );   
             $Nom= array("benAli", "benSalma", "benMohamed" , "benInes" );
            $Age= array(20,23 ,19 ,22   );         
            $Ville= array("sfax", "sousse", "gabes" , "sfax" );         
             
            echo "<table border='1'> <tr> <th> Prenom </th><th>Nom</th><th>Age</th><th>Ville</th></tr> ";
            for($i=0;$i<count($Prenom);$i++){
                echo"<tr><td>". $Prenom[$i] . " </td> <td>".$Nom[$i]. "</td> <td>". $Age[$i]."</td> <td>". $Ville[$i]."</td></tr>";
            }
            echo "</table>";


 