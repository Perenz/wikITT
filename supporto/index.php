<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Supporto</title>
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
        <!--END Framweworks-->
        
        <!--Custom-->
        <link rel="stylesheet" type="text/css" href="style-support.min.css"/>
        <script src="script-support.min.js" type="text/javascript"></script>
        <style>
            section, h1 {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            #titolo{
                height: 200px;
                line-height: 200px;
                margin: 0;
                font-size: 2.5em;
                color: #000;
                font-family: Lato;
                text-align: center;
                position: relative;
            }
            
            .cd-faq-content p {
                font-size: 1.1em;
            }
            
            .cd-faq-trigger{
                color: #37474f;
                background-color: #f3f3f5;
                margin: 0 25px 0 25px;
            }
            .cd-faq-content{
                background-color: #f3f3f5;
                margin: 0 25px 0 25px;
            }
            .cd-faq-title{
                margin: 2em 2em 1em;        
            }
            .cd-faq-trigger::before, .cd-faq-trigger::after{
                background: #3b5998;
            }
            .cd-faq-categories a::before{
                background-color: #0091ea;
            }
            .cd-faq-items{
                padding-left: 0px;
            }
            .cd-faq-group > li{
                box-shadow: none;
            }
            .cd-faq{
                max-width: 800px;
                width: 100%;
            }
            h2{
                margin: 0 25px 0 25px;
            }
            #email-support {
                color: #0091ea;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <?php include $_SERVER["DOCUMENT_ROOT"]."/common/component/header.html";?>
            <h1 id="titolo">SUPPORTO</h1>
            <section class="cd-faq">
                <div class="cd-faq-items">
                    <ul id="wikITT" class="cd-faq-group">
                        <li class="cd-faq-title"><h2>Il sito</h2></li>
                        <li>
                            <a class="cd-faq-trigger" href="#0">Cos'è wikITT?</a>
                            <div class="cd-faq-content">
                                <p>wikITT è un sito creato dagli studenti della classe 5INA dell'anno scolastico 2016/2017.
                                Il progetto è stato fatto per mostrare brevi video lezioni a chi abbia intezione di imparare
                                le basi delle materie delle categorie.</p>
                            </div>
                        </li>
                        <li>
                            <a class="cd-faq-trigger" href="#0">I video</a>
                            <div class="cd-faq-content">
                                <p>I video presenti nel sito trattano di svariati argomenti di diverse materie:
                                informatica, meccanica, elettronica, chimica e costruzioni.<br>
                                Le lezioni introducono gli argomenti principali della materia e ne mettono in risalto le
                                caratteristiche fornendo definizione e descrizione.</p>
                            </div> 
                        </li>
                    </ul>
                </div>
                
                <br/>

                <div class="cd-faq-items">
                    <ul id="contattaci" class="cd-faq-group">
                        <li class="cd-faq-title"><h2>Contatto</h2></li>
                        <li>
                            <a class="cd-faq-trigger" href="#0">Contattaci</a>
                            <div class="cd-faq-content">
                                <p>Per segnalare anomalie del sito, malfunzionamenti o errori riguardo al sito contatta uno 
                                    degli amministratori al seguente indirizzo mail: <a href="mailto:wikITT.admin@gmail.com" id="email-support">Supporto tecnico</a> <!--<br>
                                Se i video presentano imprecisioni o sono poco chiari, fai riferimento ai seguenti gestori: <br>
                                Informatica: <a href="mailto:wikITT.informatica@gmail.com">Segnalazione ad informatica</a> <br>
                                Meccanica: <a href="mailto:wikITT.meccanica@gmail.com?">Segnalazione a meccanica</a> <br>
                                Elettronica: <a href="mailto:wikITT.elettronica@gmail.com">Segnalazione a elettronica</a> <br>
                                Chimica: <a href="mailto:wikITT.chimica@gmail.com">Segnalazione a chimica</a> <br>
                                Costruzioni: <a href="mailto:wikITT.costruzioni@gmail.com">Segnalazione a costruzioni</a>-->
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <br/>

                <div class="cd-faq-items">
                    <ul id="domande" class="cd-faq-group">
                        <li class="cd-faq-title"><h2>Domande frequenti</h2></li>
                        <li>
                            <a class="cd-faq-trigger" href="#0">Come funzionano le categorie?</a>
                            <div class="cd-faq-content">
                                <p>Nella pagina home sono presenti diverse categorie che rappresentano le materie disponibili.
                                Ciascuna categoria contiene dei video che spiegano brevemente degli argomenti che riguardano studi
                                compiti durante il triennio tecnico all'istituto Buonarroti-Pozzo.</p>
                            </div>
                        </li>
                        <li>
                            <a class="cd-faq-trigger" href="#0">Come faccio a pubblicare un mio contenuto?</a>
                            <div class="cd-faq-content">
                                <p>Nessun contenuto di terze parti può essere caricato su questo sito.<br>
                                Per contribuire ad espandere la wiki è però possibile inviare il video ai gestori della materia
                                in argomento, che procederà alla verifica dell'idoneità del video. Nel caso venga selezionato
                                ti verrà comunicato via mail e potrai vedere il tuo contenuto sul sito pochi giorni.</p>
                            </div> 
                        </li>
                        <li>
                            <a class="cd-faq-trigger" href="#0">Come faccio ad inviare il mio video?</a>
                            <div class="cd-faq-content">
                                <p>Il video può essere caricato su un qualsiasi sito di video hosting (ad esempio YouTube).
                                Basterà inviare per mail l'URL al gestore per attendere una risposta.</p>
                            </div> 
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <?php include $_SERVER["DOCUMENT_ROOT"]."/common/component/footer.html";?>
    </body>
</html>