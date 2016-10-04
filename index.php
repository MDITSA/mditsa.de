<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Watch Dogs Font - Be ready to be hacked</title>
        <link rel="stylesheet" href="//dav.li/jquery/ui/jquery-ui.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="retroHackDialog/retroHackDialog.css"/>
    </head>
    <body>
        <header>
            <h2>Be ready to be <strong>hacked</strong></h2>
            <h1>watch_dogs font</h1>
        </header>
        
        <main>
            <div id="whiteborder"></div>
            <svg version="1.1" id="svg_v" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" enable-background="new 0 0 841.89 204.28" xml:space="preserve">
                <g>
	                <polygon <!--points="841.89,204.28 0,204.28 0,0 420.945,127.669 841.89,0"-->/>
                </g>
            </svg>

            <article>
                <h2>Discover the font</h2>
                <p><img src="img/watch_dogs_font_hacked_overview.jpg" alt="Hacked font overview"/></p>
            </article>

            <article>
                <h2>Explore the font</h2>
                <div>
                    <span id="dedsec_bg_vr"></span>
                    <span id="ghost_vr"></span>
                    <span id="screamer_vr"></span>
                    <a id="chatter_teeth_vr" href="vr" target="_blank"></a>
                </div>
                <p><br /><br /><br /><br /><br /><br /><br /></p>
            </article>

            <article>
                <h2>Scan and compare the font</h2>
                <header>
                    <h3>Original and official logo</h3><br />
                    <img src="img/vs-badge.png" alt="VS"/><br />
                    <h3>Logo recreated with the font</h3><br />
                    <span>0%</span>
                </header>
                <div id="comparator">
                    <div><span><img src="img/btn_drag.png" alt="Btn drag"/></span><img src="img/Watch_Dogs_logo_original.png" alt="Original Watch Dogs Logo"/></div>
                    <div><span><img src="img/btn_drag.png" alt="Btn drag"/></span><img src="img/Watch_Dogs_logo_font.png" alt="Recreated Watch Dogs Logo with the font"/></div>
                </div>
            </article>

            <article>
                <h2>Discover uses of the font</h2>
                <div>
                    <div>
                        <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Highly anticipated feature. We&#39;re glad you noticed. <a href="https://t.co/4zCeidVd5z">https://t.co/4zCeidVd5z</a></p>&mdash; Watch Dogs (@watchdogsgame) <a href="https://twitter.com/watchdogsgame/status/740609139215376384">8 juin 2016</a></blockquote>
                    </div>
                    <div>
                        <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">You can pet dogs in WATCH_DOGS 2<br><br>I am now calling the game PET_DOGS <a href="https://t.co/gOZNTluSQV">pic.twitter.com/gOZNTluSQV</a></p>&mdash; Luis Illingworth (@HeyRaguio) <a href="https://twitter.com/HeyRaguio/status/740580479829704704">8 juin 2016</a></blockquote>
                    </div>
                    <div>
                        <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">We have a winner <a href="https://twitter.com/hashtag/washdogs2?src=hash">#washdogs2</a> <a href="https://twitter.com/hashtag/watchdogs2?src=hash">#watchdogs2</a> <a href="https://t.co/DtqwfZ5Q94">https://t.co/DtqwfZ5Q94</a></p>&mdash; Watch Dogs (@watchdogsgame) <a href="https://twitter.com/watchdogsgame/status/740979664148140032">9 juin 2016</a></blockquote>
                    </div>
                    <div>
                        <blockquote class="twitter-tweet" data-lang="en"><p lang="fr" dir="ltr"><a href="https://twitter.com/hashtag/Dedseccreations?src=hash">#Dedseccreations</a> <a href="https://twitter.com/hashtag/WatchDogs2?src=hash">#WatchDogs2</a> R3qu3st3d by <a href="https://twitter.com/AssassinWill529">@AssassinWill529</a> c: <a href="https://t.co/Qw1zfynUnp">pic.twitter.com/Qw1zfynUnp</a></p>&mdash; R@y W0lf0rd (@Ray_Wolford) <a href="https://twitter.com/Ray_Wolford/status/760213299195707393">1 août 2016</a></blockquote>
                    </div>
                </div>
                
            </article>

            <article>
                <h2>Download the font</h2>
                <div id="download"><button><strong>Download</strong></button></div>
                <?php
                $ch = curl_init("http://www.dafont.com/hacked.font");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
                $content = curl_exec($ch);
                curl_close($ch);
                echo(strpos($content, "downloads"));
                ?>
            </article>

            <article>
                <h2>Create with the font</h2>
                <p>Test<br /><br /><br /><br /><br /><br /><br /></p>
            </article>

            <article>
                <h2>Share the font</h2>
                <p><br /><br /><br /><br /><br /><br /><br /></p>
            </article>
            
        </main>

        <footer>
            <p><a href="https://github.com/DavidLibeau/WatchDogsFont.com" target="_blank" style="color: black;">Website under development.</a></p>
        </footer>
        <script src="//dav.li/jquery/2.1.4.js"></script>
        <script src="//dav.li/jquery/ui/jquery-ui.js"></script>
        <script src="//dav.li/jquery/ui/jquery-ui.theme.min.css"></script>
        <script src="//dav.li/jquery/comp/touch.js"></script>
        <script src="//dav.li/jquery/plugins/isInViewport.min.js"></script>
        <script src="script.js"></script>

        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </body>
</html>