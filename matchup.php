
<!doctype html>
<html>

    <head>
        <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="fontawesome-5/css/all.css" rel="stylesheet">

    </head>
    <body>
  <?php   
  include 'main-menu.php';
  ?>
        <div class="container" style="border: 1px solid #eee;text-align: center;min-height: 100px;overflow: hidden;">
            <div class="row">

                <div style="margin-bottom: 150px;padding:40px;text-align: center;">
                    <h2>Who was better: The Jacksons or the Partridge Family?</h2>
                </div>
                <div class="col-12">
                    <div class="videobox" style="float: left;">
                        <video width="640" height="360" controls>
                            <source src="/video/lady2.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video> 
                    </div>
                    <div class="videobox" style="float: right;">
                        <video width="640" height="360" controls>
                            <source src="/video/man1.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video> 
                    </div>
                </div>
                <div class="col-12">
                    <div style="float:left;width: 50%;">
                        <div>
                            <h2>Jacksons (topic a pro)</h2>
                        </div> 
                        <div>
                            <h3>Sharon (St. Louis, MO)</h3>
                        </div>
                        <div>

                            <h3><i class="fas fa-check-circle" style="color: blue;font-size: 1.5rem;"></i> 62%</h3>
                        </div>
                    </div>
                    <div style="float:left;width: 50%;">
                        <div>
                            <h2>Partridge Family(topic b pro)</h2>
                        </div> 
                        <div>
                            <h3>Jimmie (Portland, OR)</h3>
                        </div>
                        <div>
                            <h3><i class="fas fa-check-circle" style="color: red;font-size: 1.5rem;"></i> 38%</h3>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin-bottom: 150px;margin-top: 150px;">
                    <div class="list-group list-group-horizontal col-12" style="text-align: left;">                            
                        <div class="col-6"><h3>Category: Entertainment</h3></div>                          
                    </div>
                    <?php
                    for ($x = 1; $x <= 25; $x++) {
                        ?>

                        <div class="list-group list-group-horizontal col-12" style="text-align: left;">
                            <div class="col-1 ">view</div>
                            <div class="col-1">join</div>
                            <div class="col-6">Description of topic <?php echo $x; ?></div>

                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>