<!DOCTYPE html>
<html>
    <head> 
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="fontawesome-5/css/all.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include 'main-menu.php';
        ?>
        <div class="container" style="border: 1px solid #eee;min-height: 100px;overflow: hidden; text-align: center;">
            <div class="row">
                <div style="margin-bottom: 60px;padding:40px;text-align: center;">
                    <h2>Who was better: The Jacksons or the Partridge Family?</h2>
                </div>
                
                <div>
                    <h2>Matchups</h2>
                </div>
                
            </div> 
            <div class="row row-cols-auto justify-content-center"style="margin-bottom: 50px;">
                <?php for ($i = 1; $i <= 24; $i++) { ?>
                    <a href="http://argueer.gregsmithmusic.com/matchup.php">
                        <div class="col">
                            <div class="matchPreview">
                                <span class="fas fa-user" style="color: #eee;font-size: 4rem;margin: auto;"></span>
                                vs
                                <span class="fas fa-user" style="color: #eee;font-size: 4rem;margin: auto;"></span>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            
            <div>
                <h2>Challengers</h2>
            </div>
            
            <div class="row row-cols-auto justify-content-center">
                <?php for ($i = 1; $i <= 24; $i++) { ?>
                    <div class="col"><div class="partPhoto"><span class="fas fa-user" style="color: #eee;font-size: 4rem;margin: auto;"></span></div></div>
                        <?php } ?>
            </div>

        </div>
    </body>
</html>
