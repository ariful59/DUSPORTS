<!DOCTYPE html>
<html lang="en">

<head>
    <title>Live Football</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
    <script src="//use.edgefonts.net/bebas-neue.js"></script>
    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lavenderTheme.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .change {
            margin-left: 30%;
            width: 100%;
        }
    </style>

</head>

<body>


<div class="rca-container">
    <div class="change">
        <!--Logo Holder-->
        <div class="rca-row">
            <div class="rca-column-12">
                <div class="rca-logo">
                    <h2>
                        <span><img src="img/football.png" style="width: 50px;"></span><span>Football Live Scores</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="rca-column-4">
            <!--Match Series-->
            <div class="rca-mini-widget rca-top-border rca-tab-simple">
                <ul class="rca-tab-list">
                    <li class="rca-tab-link active" data-tab="ltab-1" onclick="showTab(this);">Live</li>
                    <li class="rca-tab-link" data-tab="ltab-2" onclick="showTab(this);">Results</li>
                    <li class="rca-tab-link" data-tab="ltab-3" onclick="showTab(this);">Upcoming</li>
                </ul>






                <div id="ltab-1" class="rca-padding rca-tab-content rca-multi-season active">
                    <table class="table table-striped">
                        <p id="nolive"></p>
                        <thead>
                        <tr>
                            <th></th>
                            <th id="team1_header"></th>
                            <th id="score_header"></th>
                            <th id="team2_header"></th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td id="time"></td>
                            <td id="team1"></td>
                            <td id="score"></td>
                            <td id="team2"></td>
                        </tr>
                        </tbody>

                    </table>

                    <p id="goal">

                    </p>

                </div>




                <div id="ltab-2" class="rca-padding rca-tab-content">
                    <div class="rca-match-detail rca-padding">
                        <h3 class="rca-match-title">
                            <a>BAN vs ZIM</a>
                        </h3>
                        <p class="rca-duration">Bangaladesh Won by 20 runs</p>
                        <p class="rca-match-schedule">Sun, 31 Jan 2:10 pm IST</p>
                    </div>
                </div>





                <div id="ltab-3" class="rca-padding rca-tab-content">
                    <div class="rca-match-detail rca-padding">
                        <h3 class="rca-match-title">
                            <a>BAN vs ZIM</a>
                        </h3>
                        <p class="rca-duration">Start in 21hrs</p>
                        <p class="rca-match-schedule">Sun, 31 Jan 2:10 pm IST</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function load() {
        var team1=document.getElementById("team1");
        var team2=document.getElementById("team2");
        var score=document.getElementById("score");
        var time=document.getElementById("time");
        var team1_header=document.getElementById("team1_header");
        var team2_header=document.getElementById("team2_header");
        var score_header=document.getElementById("score_header");
        var nolive=document.getElementById("nolive");


        var xhttp=new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if(this.readyState==4 && this.status == 200){

                var jason=JSON.parse(this.responseText);
                console.log(jason);
                if(jason!=null){
                    team1_header.innerHTML="Team1";
                    team2_header.innerHTML="Team2";
                    score_header.innerHTML="Score";
                    team1.innerHTML=jason['Team1'];
                    team2.innerHTML=jason['Team2'];
                    time.innerHTML=jason['Time']+"'";
                    score.innerHTML=" "+jason['score_team1']+" - "+jason['score_team2']+" ";
                    //goal.innerHTML=""+jason['time']+"  "+jason['team_name']+"   "+jason['goal_giver'];
                    loadGoal();
                    nolive.innerHTML="";
                    console.log(jason);
                }
                else{
                    team1_header.innerHTML="";
                    team2_header.innerHTML="";
                    score_header.innerHTML="";
                    nolive.innerHTML="There is no Live match this moment";
                }
            }
        }
        xhttp.open("POST","get_football.php",true);
        xhttp.send();
    }
    //load();

    function loadGoal(){
        var goal=document.getElementById("goal");
        goal.innerHTML="";
        var jsStringFromPhp;
        jsStringFromPhp=<?php
        $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
        //$conn = new mysqli('localhost', 'root', '', 'WebProject');
        $sql="SELECT * FROM goal_giver";
        $result= $conn->query($sql);

        $output="";

        while($row = $result->fetch_assoc()){
            $output=$output."<br>".$row["Time"]."' ".$row["Team_name"]."  ".$row["Goal_giver"] ;
        }
        echo json_encode($output);

        ?>;

        goal.innerHTML=jsStringFromPhp;
    }
    setInterval(load,2000);
    //setInterval(loadGoal,2000);

</script>


<script>
    function showTab(event) {
        var sourceParent = event.parentElement.parentElement;
        var sourceChilds = sourceParent.getElementsByClassName("rca-tab-content");
        var sourceLinkParent = sourceParent.getElementsByClassName("rca-tab-link");
        for (var i=0; i < sourceChilds.length; i++) {
            sourceChilds.item(i).classList.remove("active");
        }
        for (var i=0; i < sourceLinkParent.length; i++) {
            sourceLinkParent.item(i).classList.remove("active");
        }
        var dataTab= event.getAttribute("data-tab");

        event.classList.add("active");
        // document.getElementById(dataTab).className = tabClass + ' active';
        document.getElementById(dataTab).className += ' active';
    }

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script type="text/javascript">
    $(function() {

        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

    });
</script>

</body>
</html>


