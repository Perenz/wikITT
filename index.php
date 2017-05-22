<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>wikITT</title>
        <link rel="icon" href="/common/image/icon.ico" type="image/x-icon">
                
        <!--Frameworks-->
        <!--Pace-->
        <link rel="stylesheet" type="text/css" href="/common/framework/pace/pace.min.css"/>
        <script src="/common/framework/pace/pace.min.js" type="text/javascript"></script>
        <!--Jquery-->
        <script src="/common/framework/jquery.min.js" type="text/javascript"></script>
        <!--Semantic-UI-->
        <link rel="stylesheet" type="text/css" href="/common/framework/semantic-UI/semantic.min.css"/>
        <script src="/common/framework/semantic-UI/semantic.min.js" type="text/javascript"></script>
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="/common/framework/bootstrap.min.css"/>
        <!--Popup-->
        <link rel="stylesheet" type="text/css" href="/common/framework/mfb/mfb.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <script src="/common/framework/mfb/mfb.min.js" type="text/javascript"></script>
        <!--END Framweworks-->
        <style>
            /*Form & Tab dimension*/
            #search-form .ui.icon.input,
            #tab {
                position: relative;
                width: 600px;
                vertical-align: middle;
                max-width: 100%;
            }
            
            /*wikITT Logo*/
            img.ui.large.image.center {
                margin-top: 20px;
            }
            /*Form*/
            #search-form {
                margin-top: 20px;
                text-align: center;
                position: relative!important;
                
            }
            /*Tab*/
            #tab {
                margin-top: 45px;
            }
            #tab .segment img {
                margin-top: 5px;
                margin-bottom: -5px;
            }
            
            /*Other*/
            .center {
                display: block;
                margin: 0 auto;
            }
            /*Hover effect*/
            .hvr-grow {
                display: inline-block;
                vertical-align: middle;
                transform: perspective(1px) translateZ(0);
                -webkit-transform: perspective(1px) translateZ(0);
                -moz-transform: perspective(1px) translateZ(0);
                -ms-transform: perspective(1px) translateZ(0);
                box-shadow: 0 0 1px transparent;
                transition-duration: 0.3s;
                -webkit-transition-duration: 0.3s;
                -moz-transition-duration: 0.3s;
                -o-transition-duration: 0.3s;
                transition-property: transform;
                -webkit-transition-property: transform;
                -moz-transition-property: transform;
                -o-transition-property: transform;
            }
            .hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
                -ms-transform: scale(1.1);
            }
            
            /*LiveSearch*/
            #livesearch{
                width: 600px!important;
                vertical-align: central;
                max-width: 100%;
                margin: auto!important;
                text-align: left;             
                border-radius: .28571429rem;
                display: none;
                font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.14);
                z-index: 2;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                opacity: 0.98;
            }
            
            /*Popup*/
            #popup a {
                color: #ffffff;
                opacity: 0.75;
                filter: alpha(opacity=75);
                transition: opacity 1s;
                -webkit-transition: opacity 1s;
                -moz-transition: opacity  1s;
                -o-transition: opacity 1s;
            }
            #popup a:hover {
                opacity: 1;
                filter: alpha(opacity=100);
            }
            #popup #social {
                background-color: #00b5ad;
            }
            #popup #facebook {
                background-color: #3b5998;
            }
            #popup #youtube {
                background-color: #cd201f;
            }
            #popup #github {
                background-color: #24292e;
            }
            #popup #help {
                background-color: #ff3d00;
            }
            @media screen and (max-width: 800px) {
                #popup { display: none;}
            }
            
            /*Livesearch */
            #livesearch .suggestion {
                margin: 0;
                padding: 0;
            }
            #livesearch .suggestion li {
                background-color: #ffffff;
                list-style: none;
                padding: 7px;
                transition:background 0.2s;
                display: flex;
                justify-content: space-between;
            }
            #livesearch .suggestion li:hover { background-color:  #f1f1f1;}
            #livesearch .suggestion li a {
                text-decoration: none;
                color: black;
                width: 100%;
                cursor: default;
                margin-left: 12px;
            }
        </style>
    </head>
    <body>
        <script>
            function showResult(str) {
                var liveSearch = document.getElementById("livesearch");
                $(liveSearch).empty();
                
                if (str.length === 0) { 
                    liveSearch.innerHTML="";
                    liveSearch.style.display="none!important";
                    return;
                }
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        $(liveSearch).empty();
                        createSuggestion(JSON.parse(this.response));
                    }
                };
                xmlhttp.open("POST","/common/php/livesearch.php?q="+str,true);
                xmlhttp.send();
            }
            
            function createSuggestion(data){
                var liveSearch = document.getElementById("livesearch");
                var ul = document.createElement("ul");
                ul.setAttribute("class", "suggestion");
                
                if(data.length > 0) {
                    for(var i=0; i<data.length; i++) {
                        var li = document.createElement("li");
                        var a = document.createElement("a");
                        a.setAttribute("href", "https://www.youtube.com/watch?v="+data[i].vId);
                        a.innerHTML = "<b>"+data[i].titolo+"</b>";
                        var span = document.createElement("span");
                        span.innerHTML = " - <i>"+data[i].materia+"</i>";
                        a.appendChild(span);
                        li.appendChild(a);
                        ul.appendChild(li);
                    }
                } else {
                    var li = document.createElement("li");
                    li.style.fontWeight = "bold";
                    li.innerHTML = "Nessun video trovato";
                    var i = document.createElement("i");
                    i.setAttribute("class", "rocket icon");
                    li.appendChild(i);
                    ul.appendChild(li);
                }
                liveSearch.appendChild(ul);
            }
            function checkSubmit(e) {
                if(e && e.keyCode === 13) {
                   document.getElementById('cerca').submit();
                }
            }          
            
        </script>
        <div class="wrapper">
            <?php include $_SERVER["DOCUMENT_ROOT"]."/common/component/header.html";?>
            <!--Logo-->
            <img class="ui large image center" src="/common/image/icon-large.png" alt="wikITT"/>
            <!--Search-bar-->
            <form id="search-form" action="/cerca/index.php" method="POST">
                <div class="ui icon input huge">
                        <input id="cerca" name="search" type="text" placeholder="Cerca..." autocomplete="off" onkeyup="showResult(this.value)" onfocus="showResult(this.value)" onkeypress="checkSubmit()">
                    <i class="circular search link icon"></i>
                </div>
                <div id="livesearch" style="display: block;"></div>
            </form>
            <!--Subjects-->
            <div id="tab" class="center">
                <div class="ui stackable three column grid">
                    <div class="column hvr-grow">
                        <div class="ui segment">
                            <a href="/informatica/index.php">
                                <div class="ui blue ribbon label">Informatica</div>
                                <img class="ui fluid image" src="/common/image/subjects/it.png" alt="informatica"/>
                            </a>
                        </div>
                    </div>
                    <div class="column hvr-grow">
                        <div class="ui segment">
                            <a href="/meccanica/index.html">
                                <div class="ui green ribbon label ">Meccanica</div>
                                <img class="ui fluid image" src="/common/image/subjects/mechanic.png" alt="meccanica"/>
                            </a>
                        </div>
                    </div>
                    <div class="column hvr-grow">
                        <div class="ui segment">
                            <a href="/chimica/index.html">
                                <div class="ui red ribbon label">Chimica</div>
                                <img class="ui fluid image" src="/common/image/subjects/chemistry.png" alt="chimica"/>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ui stackable three column centered grid">
                    <div class="column hvr-grow">
                        <div class="ui segment">
                            <a href="/elettrotecnica/index.html">
                                <div class="ui orange ribbon label">Elettrotecnica</div>
                                <img class="ui fluid image" src="/common/image/subjects/electrotech.png" alt="elettrotecnica"/>
                            </a>
                        </div>
                    </div>
                    <div class="column hvr-grow">
                        <div class="ui segment">
                            <a href="/costruzioni/index.html">
                                <div class="ui brown ribbon label">Costruzioni</div>
                                <img class="ui fluid image" src="/common/image/subjects/constructions.png" alt="costruzioni"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Menu popup-->
            <ul id="popup" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
                <li class="mfb-component__wrap">
                    <a class="mfb-component__button--main" id="social">
                        <i class="mfb-component__main-icon--resting ion-arrow-up-b"></i>
                        <i class="mfb-component__main-icon--active ion-arrow-down-b"></i>
                    </a>
                    <ul class="mfb-component__list">
                        <li>
                            <a href="https://github.com/carlocorradini/wikITT" target="_blank" data-mfb-label="Seguici su Github" class="mfb-component__button--child" id="github">
                                <i class="mfb-component__child-icon ion-social-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UC3CagkpTNwQNIyN51df7moA" data-mfb-label="Seguici su Youtube" target="_blank" class="mfb-component__button--child" id="youtube">
                                <i class="mfb-component__child-icon ion-social-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-mfb-label="Seguici su Facebook" target="_blank" class="mfb-component__button--child" id="facebook">
                                <i class="mfb-component__child-icon ion-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/help/index.html" data-mfb-label="Il sito è in beta, per problemi contatta qui gli amministratori" class="mfb-component__button--child" id="help">
                                <i class="mfb-component__child-icon ion-alert"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php include $_SERVER["DOCUMENT_ROOT"]."/common/component/advise-video.php";?>
        </div>
        <?php include $_SERVER["DOCUMENT_ROOT"]."/common/component/footer.html";?>
    </body>
</html>
