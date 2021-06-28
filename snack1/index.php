<?php 
    $matches=[
        [
            'homeTeam'=>'Lakers',
            'homeTeamPoints'=>'50',
            'awayTeam'=>'Bulls',
            'awayTeamPoints'=>'45'
        ],
        [
            'homeTeam'=>'Pacers',
            'homeTeamPoints'=>'35',
            'awayTeam'=>'Maveriks',
            'awayTeamPoints'=>'44'
        ],
        [
            'homeTeam'=>'Spurs',
            'homeTeamPoints'=>'80',
            'awayTeam'=>'Suns',
            'awayTeamPoints'=>'72'
        ]
    ]; 

    for ($i=0; $i < count($matches); $i++) {
        $match = $matches[$i];
        $teams = $match['homeTeam']."-".$match['awayTeam'];
        $points = $match['homeTeamPoints']."-".$match['awayTeamPoints'];
        echo $teams." | ".$points."<br>";
    }

    
?>
