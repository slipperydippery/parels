<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
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
            <div id="headerimage">
                <img src="/img/pagehead.jpg" alt="Voion | Arbeidsmarkt &amp;amp; opleidingsfonds voortgezet onderwijs" />
            </div>

            <div id="zoekveldContainer" class="sprite">
                <form action="/zoeken" method="post">
                    <label for="q"></label>
                    
                    <input type="text" placeholder="Zoek naar informatie" name="q" id="q" />
                    <input type="submit" value="Zoek" class="zoek_btn sprite" />

                </form>
                <div id="search-progress">
                    <h4>Er wordt gezocht op <strong>{0}</strong> <span id="progress"></span></h4>
                </div>
                <img src="/Content/images/loader.gif" id="searchLoader" />
            </div>

            <div id="addthis">
                <ul>
                    <li><a class="addthis_button_print"></a></li>
                    <li><a class="addthis_button_linkedin"></a></li>
                    <li><a class="addthis_button_twitter"></a></li>
                    <li><a class="addthis_button_email"></a></li>
                    <li><a class="addthis_button_compact"></a></li>
                </ul>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-50128ced27ad18c1&async=1"></script>
            </div>

            <div id="breadcrumbs" >
                <ul><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Home</span></a></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">Over Voion</li></ul>
            </div>

            @yield('content')

            
        </div>

        <footer class="row">
            <div class="col-md-12">
                <div id="footer">
                    <div class="kolom first col-md-3">
                        <ul>
                            <li><a href="/over-voion"><span>Over Voion</span></a>
                                <ul>
                                    <li><a href="/over-voion/voion-vo-in-ontwikkeling">Voion - VO in ontwikkeling</a></li>
                                    <li><a href="/over-voion/uw-uitdagingen-onze-uitgangspunten">Uw uitdagingen - onze uitgangspunten</a></li>
                                    <li><a href="/over-voion/voor-wie">Voor wie?</a></li>
                                    <li><a href="/over-voion/producten-en-diensten">Producten &amp; diensten</a></li>
                                    <li><a href="/over-voion/bestuur-voion">Bestuur Voion</a></li>
                                    <li><a href="/over-voion/bureau-voion">Bureau Voion</a></li>
                                    <li><a href="/over-voion/cao-a-en-o-fonds-vo">CAO A&amp;O-fonds VO</a></li>
                                    <li><a href="/over-voion/nieuwsbrieven">Nieuwsbrieven</a></li>
                                    <li><a href="/over-voion/magazine-vo-in-ontwikkeling">Magazine VO in ontwikkeling</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li><span>Juridisch</span>
                                <ul>
                                    <li><a href="/juridisch/leveringsvoorwaarden">Leveringsvoorwaarden</a></li>
                                    <li><a href="/juridisch/disclaimer">Disclaimer</a></li>
                                    <li><a href="/juridisch/cookiepolicy">Cookiepolicy</a></li>
                                    <li><a href="/juridisch/kvk-nummer">KvK nummer</a></li>
                                </ul>
                            </li>
                        </ul>
                    &nbsp;
                    </div>
                    <div class="kolom second col-md-3">
                        <ul>
                            <li><a href="/nieuws"><span>Nieuws</span></a></li>
                            <li><span class="tussen">&nbsp;</span></li>
                            <li><a href="/programmalijnen"><span>Programmalijnen</span></a>
                                <ul>
                                    <li><a href="/programmalijnen/arbeidsmarkt-en-mobiliteit">Arbeidsmarkt &amp; mobiliteit</a></li>
                                    <li><a href="/programmalijnen/opleiding-en-professionalisering">Opleiding &amp; professionalisering</a></li>
                                    <li><a href="/programmalijnen/veilig-gezond-en-vitaal-werken">Veilig, gezond &amp; vitaal werken</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li><a href="/publicaties"><span>Publicaties</span></a></li>
                            <li><span class="tussen">&nbsp;</span></li>
                            <li><a href="/instrumenten"><span>Instrumenten</span></a></li>
                            <li><span class="tussen">&nbsp;</span></li>
                            <li><a href="/agenda"><span>Agenda</span></a></li>
                        </ul>
                    </div>
                    <div class="kolom third col-md-3">
                        <h3><span>Voion</span></h3>
                        <p>Postbus 556<br />2501 CN Den Haag<br />T 070-3 765 756<br /><a href="mailto:info@voion.nl">info@voion.nl</a></p>
                        <p>Servicecenter Veilig, gezond &amp; vitaal werken:<br />T 045-579 6024</p>
                        <br />
                        <h3><span class="volg">Volg ons</span></h3>
                        <ul id="socialmedia">
                            <li class="volg-ons-op-twitter"><a href="https://twitter.com/voion_aenofonds" class="sprite">Volg ons op Twitter</a></li>
                            <li class="volg-ons-op-linkedin"><a href="https://www.linkedin.com/company/3082156" class="sprite">Volg ons op LinkedIn</a></li>
                            <li class="volg-ons-op-youtube"><a href="https://www.youtube.com/user/voiononderwijs" class="sprite">Volg ons op Youtube</a></li>
                        </ul>
                    </div>
                    <div class="kolom last col-md-3">
                        <h3><span>Nieuwsbrief</span></h3>
                        <p>Bekijk ons <a href="/over-voion/nieuwsbrieven">nieuwsbrief-archief</a>.</p>
                        <p>Meld je aan voor onze digitale nieuwsbrief.</p>
                        <a class="btn" href="/aanmelden">Aanmelden nieuwsbrief</a>
                    </div>
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
    </body>
</html>
