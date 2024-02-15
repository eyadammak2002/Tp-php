<DOCTYPE html>
    <html>
        <head>
            <title>exercice2</title>
            <meta http-equiv="content-Type" content="text/html charset="UTF-8" />
        </head>
        <body><h1> Structure conditionel</h1>
            <?php echo '<ul>';
            for($i=5;$i<=15;$i++)
                if($i<=10)
                echo"<li>$i<sub>3</sub>=<b>".pow($i,3)."</b></li>";
                else echo"<li><b>$i<sup>3</sup></b>=",$i*$i*$i,"</li>";
                echo "</ul>"; ?>
    
        </body>
    </html>