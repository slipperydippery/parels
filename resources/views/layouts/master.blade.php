<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link href="http://vjs.zencdn.net/5.17.0/video-js.css" rel="stylesheet">
    </head>
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
    <body ontouchstart class="pagina over-voion" itemscope itemtype="http://schema.org/WebPage">
        <div id="container" class="container">
            <div id="header" class="row">
                <div class="col-md-12">            
                    <a href="/" title="VOION Arbeidsmarkt &amp; Opleidingsfonds voortgezet onderwijs" id="logolink"><img src="/img/logo_voion.jpg" alt="Voion, Arbeidsmarkt &amp; opleidingsfonds voortgezet onderwijs" id="logo" /></a>
                    <a href="#MainNav" id="hamburger" class="showmmenu"><em>MENU</em><span></span></a>
                    <a href="#MainNav" id="zoek" class="showmmenu"><em>ZOEK</em><span class="glyphicon glyphicon-search"></span></a>
                    <div id="utils">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><a href="/contact">contact</a></li>
                            <li class="last"><a href="/sitemap">sitemap</a></li>
                        </ul>
                    </div>
                    <nav id="MainNav">
                        <ul>
                            <li><a href="/over-voion">Over Voion</a></li>
                            <li><a href="/home">Programmalijnen</a><ul>
                            <li><a href="/programmalijnen/arbeidsmarkt-en-mobiliteit">Arbeidsmarkt &amp; mobiliteit</a></li>
                            <li><a href="/programmalijnen/opleiding-en-professionalisering">Opleiding &amp; professionalisering</a></li>
                            <li><a href="/programmalijnen/veilig-gezond-en-vitaal-werken">Veilig, gezond &amp; vitaal werken</a></li></ul></li>
                            <li><a href="/publicaties">Publicaties</a></li>
                            <li><a href="/instrumenten">Instrumenten</a></li>
                            <li><a href="/agenda">Agenda</a></li>
                            <li><a href="/nieuws">Nieuws</a></li></ul>
                    </nav>
                </div>
        </div>
        <div id="contentcontainer">

            @yield('content')

            
        </div>

        <footer class="row">
            <div class="col-md-12">
                <div id="footer">
                    <ul id="leden" class="sprite">
                        <li><a target="_blank" href="http://www.aob.nl" title="Algemene Onderwijsbond" class="aob sprite"></a></li>
                        <li><a target="_blank" href="http://www.cnvonderwijs.nl" title="CNV Onderwijs" class="cnv sprite"></a></li>
                        <li><a target="_blank" href="http://www.fvov.nl" title="Federatie van Onderwijsvakorganisaties" class="fvov sprite"></a></li>
                        <li><a target="_blank" href="http://www.abvakabofnv.nl" title="Abvakabo FNV" class="fnv sprite"></a></li>
                        <li class="last"><a target="_blank" href="http://www.vo-raad.nl" title="VO-raad" class="voraad sprite"></a></li>
                    </ul>
                </div>
            </div>
        </footer>
<script src="/js/app.js"></script>
<script src="http://vjs.zencdn.net/5.17.0/video.js"></script>
<script src="/js/video.js"></script>
    </body>
</html>
