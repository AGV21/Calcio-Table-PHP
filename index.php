<!DOCTYPE html>
<html>
    <head>
        <title>Serie A</title>
    </head>
    <body id="mainContainer">
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
                     "Atalanta" => array(3, 1, 3, 3, 3, 1, 3),
                     "Bolonga" => array(0, 1, 0, 1, 1, 3, 0),
                     "Cremonese" => array(0, 0, 0, 0, 1, 1, 0),
                     "Empoli" => array(0, 1, 1, 1, 1, 0, 3),
                     "Fiorentina" => array(3, 1, 1, 0, 1, 0, 3),
                     "Inter Milan" => array(3, 3, 0, 3, 0, 3, 0),
                     "Juventus" => array(3, 1, 1, 3, 1, 1, 0),
                     "Lazio" => array(3, 1, 3, 1, 0, 3, 3),
                     "Lecce" => array(0, 0, 1, 1, 0, 1, 3),
                     "AC Milan" => array(3, 1, 3, 1, 3, 3, 0),
                     "Monza" => array(0, 0, 0, 0, 0, 1, 3),
                     "Napoli" => array(3, 3, 1, 1, 3, 3, 3),
                     "Roma" => array(3, 3, 1, 3, 0, 3, 0),
                     "Salernitana" => array(0, 1, 3, 1, 1, 1, 0),
                     "Sampdoria" => array(0, 1, 0, 1, 0, 0, 0),
                     "Sassuolo" => array(0, 3, 1, 1 ,1, 0, 3),
                     "Spezia" => array(3, 0, 1, 0, 1, 0, 3),
                     "Torino" => array(3, 1, 3, 0, 3, 0, 0),
                     "Udinese" => array(0, 1, 3, 3, 3, 3, 3),
                     "Verona" => array(0, 1, 0, 1, 3, 0, 0));
                    arsort($teams);
                    function italy(){
                        echo"Serie A <br>";
                    }
                    italy();
                    foreach ( $teams as $team => $points ) {
                        //echo( $team . " total points is ");
                        $currentTeamPointsTotal = 0;
                        for( $currentTeamPointsIndex = 0; $currentTeamPointsIndex < count( $points ); $currentTeamPointsIndex++ ) {
                            $currentTeamPointsTotal = $currentTeamPointsTotal + $points[ $currentTeamPointsIndex ];
                        
                        }
                    echo($currentTeamPointsTotal . "<br>" );}
            ?>          
        </section>
    </body>
    <footer> 
        <P>AGV21 Project</p>
    </footer> 
</html>