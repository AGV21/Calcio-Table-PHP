<!DOCTYPE html>
<html>
    <head>
        <title>Serie A</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body id="mainContainer">
        <div class="trans">
            <section>
                <?php
                $currentTeamNumber = 0;
                /*fucntion with foreach statement in it to color rows depending on placement*/
                function printOutSortedArray($array) {
                    foreach($array as $teamss => $score) {
                        global $currentTeamNumber;
                        $currentTeamNumber +=1;
                ?>
                        <tr 
                <?php
                        if ( $currentTeamNumber == 1 ) {
                ?>
                            class="currentLeader";
                <?php
                        }elseif ($currentTeamNumber >= 1 && $currentTeamNumber  <=4){
                ?>
                            class="UCL";
                <?php
                        }elseif ($currentTeamNumber == 5){
                ?>
                            class="UEL";
                <?php           
                        }elseif ($currentTeamNumber == 6){
                ?>
                            class="CL";
                <?php
                        }elseif ($currentTeamNumber >= 18 && $currentTeamNumber <= 19){
                ?>
                            class="Reg";
                <?php
                        }elseif ($currentTeamNumber == 20){
                ?>
                            class="lastPlace";
                <?php
                        }elseif ($currentTeamNumber >= 7 && $currentTeamNumber <= 17){
                ?>
                            class="Rest"
                <?php

                        }
                ?>
                        >
                            <td><?php echo( $teamss ); ?></td>
                            <td><?php echo(  $score ); ?></td>
                        </tr>
            </section>
            <section>
                <?php
                    }
                }   /*two-dimensional array containing team names and their points from games played*/  
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

                        $teamNames = [];
                        $teampointsArray = [];
                        /*foreach statment to add teams points earned to get current points earned in total*/
                        foreach ( $teams as $team => $points ) {
                            $currentTeamPointsTotal = 0;
                            for( $currentTeamPointsIndex = 0; $currentTeamPointsIndex < count( $points ); $currentTeamPointsIndex++ ) {
                                $currentTeamPointsTotal = $currentTeamPointsTotal + $points[ $currentTeamPointsIndex ];
                            }
                        array_push($teampointsArray, $currentTeamPointsTotal);
                        array_push($teamNames, $team);
                        $final = array_combine($teamNames, $teampointsArray);}

                        arsort($final);
                ?>
                        <table>
                            <tr><th>Club</th><th>Points</th></tr>
                <?php
                            printOutSortedArray($final)
                ?>
                        </table>
            </section>
            <section>
                <!--added form to collect info-->
                <form>
                    <label for="Home">Home:</label>
                    <!-- input is text based-->
                    <input type="text"><br>
                    <label for="Away">Away:</label>
                    <!-- input is text based-->
                    <input type="text"><br>
                    <label for="Home score">Home score:</label>
                    <!--input is number based-->
                    <input type="number"><br>
                    <label for="Away score">Away score:</label>
                    <!--input is number based-->
                    <input type="number"><br>
                    <!--br to seperate submit button, input is submit based, info will be submited upon clicking button-->
                    <input type="submit" value="Submit">
                </form>
            </section>
            <footer> 
                <P>AGV21 Project</p>
            </footer> 
        </div>
    </body>
</html>