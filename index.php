<!DOCTYPE html>
<html>
    <head>
        <title>Serie A</title>
    </head>
    <body>
        <section> 
            <div class="Table">
                <table>
                    <tr>
                        <th>Club</th>
                        <th>PTS</th>
                    </tr>
                </tablr>
            </div>
        </section>

        <section>
            <?php
                $teams = array(
                     "Atalanta" => array(3, 1, 3, 3, 3, 1),
                     "Bolonga" => array(0, 1, 0, 1, 1, 3),
                     "Cremonese" => array(0, 0, 0, 0, 1, 1),
                     "Empoli" => array(0, 1, 1, 1, 1),
                     "Fiorentina" => array(3, 1, 1, 0, 1, 0),
                     "Inter Milan" => array(3, 3, 0, 3, 0, 3),
                     "Juventus" => array(3, 1, 1, 3, 1, 1),
                     "Lazio" => array(3, 1, 3, 1, 0, 3),
                     "Lecce" => array(0, 0, 1, 1, 0, 1),
                     "AC Milan" => array(3, 1, 3, 1, 3, 3),
                     "Monza" => array(0, 0, 0, 0, 0, 1),
                     "Napoli" => array(3, 3, 1, 1, 3, 3),
                     "Roma" => array(3, 3, 1, 3, 0),
                     "Salernitana" => array(0, 1, 3, 1, 1, 1),
                     "Sampdoria" => array(0, 1, 0, 1, 0, 0),
                     "Sassuolo" => array(0, 3, 1, 1 ,1, 0),
                     "Spezia" => array(3, 0, 1, 0, 1, 0),
                     "Torino" => array(3, 1, 3, 0, 3, 0),
                     "Udinese" => array(0, 1, 3, 3, 3, 3),
                     "Verona" => array(0, 1, 0, 1, 3, 0));
                    
                
                    foreach ( $teams as $team => $points ) {
                        echo( $team . " total points is ");
                    
                        $currentTeamPointsTotal = 0;
                        for( $currentTeamPointsIndex = 0; $currentTeamPointsIndex < count( $points ); $currentTeamPointsIndex++ ) {
                            $currentTeamPointsTotal = $currentTeamPointsTotal + $points[ $currentTeamPointsIndex ];   
                        
                        }

                        echo($currentTeamPointsTotal . "<br>" );
    
                    } 
            ?>
        </section>
    </body>
</html>