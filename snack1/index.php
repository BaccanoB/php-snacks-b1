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
        $teams = $matches[$i]['homeTeam']."-".$matches[$i]['awayTeam'];
        $points = $matches[$i]['homeTeamPoints']."-".$matches[$i]['awayTeamPoints'];
        echo $teams." | ".$points."<br>";
    }

    
?>
