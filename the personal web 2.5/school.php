 <!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/schoolhead.php'; ?>
    
</head>
<body>
    <?php $page = 'school'; include 'includes/navbar.php'; ?>
    <p>yo</p>
    <br />
    <br />
    <br />
    <p class="p1"> eyy</p>
    <div class="d1"></div>
    <div class="d2"></div>
    <div class="d3"></div>
    <br />
    <p class="p2">Font Verdana, size 36px</p>
   
    <br />
    
    <ul>
        <li>duurzaam
        <ol>
            <li><a href="ome.html">ome</a></li>
            <li>landbouw</li>
        </ol>
        </li>
    </ul>
    <table >
        <tr>
           <th scope="col">Dieren</th>
           <th scope="col">Voer</th>
           <th scope="col">Aantal</th>
           <th scope="col">Gegeten</th>
        </tr>
        <tr>
        <?php
        
        $Farm = [ 
            [
          "Dieren" => "Varken",
          "Voer" => "Mais",
          "Aantal" => "4",
          "Gegeten" => FALSE
         
            ],
            [
               "Dieren" => "Vogels",
          "Voer" => "Saadjes",
          "Aantal" => "8",
          "Gegeten" => TRUE
         
            ],
            [
          "Dieren" => "Koe",
          "Voer" => "Gras",
          "Aantal" => "9",
          "Gegeten" => FALSE
         
            ] ,
            ];

            foreach ($Farm as $Dier) {
                $Gegeten = "JA";
                  if ($Dier['Gegeten'] == FALSE)
                   $Gegeten = "Nee" ;
                  else
                  $Gegeten = "JA";
                
                  echo "<tr><td>" .  $Dier['Dieren'] . "</td>";
                  echo "<td>" . $Dier['Voer'] . "</td>";
                  echo "<td>" . $Dier['Aantal'] . "</td>";
                  echo "<td>" . $Gegeten . "</td></tr>";

            
            
            }



        ?>







        </tr>
    </table>




    

     <?php include 'includes/scripts.php'; ?>

    </body>

</html>