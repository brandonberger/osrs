
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- <script src="public/js/hiscores.js"></script> -->
        
        <!-- Base -->
        <script src="public/js/tables/herbs.js"></script>
        <script src="public/js/tables/megaRare.js"></script>
        <script src="public/js/tables/gems.js"></script>
        <script src="public/js/tables/rare.js"></script>

        <!-- Monsters -->
        <script src="public/js/tables/monsters/fireGiant.js"></script>
        <script src="public/js/tables/monsters/goblin.js"></script>
        <script src="public/js/tables/monsters/imp.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/styles.css">
    </head>

    <body>

        <div class="fluid-container main-container">
            <div class="row">
                <div class="col-10 d-flex">
                    <div class="monster" data-monster="fireGiant" style="background-image:url(public/img/monsters/fire-giant.png), url(public/img/backgrounds/fire-giant.jpg);">

                    </div>
                    <div class="monster" data-monster="goblin" style="background-image:url(public/img/monsters/goblin.png), url(public/img/backgrounds/grass-path.jpg);">

                    </div>
                    <div class="monster" data-monster="imp" style="background-image:url(public/img/monsters/imp.png), url(public/img/backgrounds/grass-path.jpg);">

                    </div>
                </div>
                <div class="col-2">
                    <aside>
                        <div id="loot-bag">
                            
                        </div>
                    </aside>
                </div>
            </div>
            

            
        </div>

        


        <div id="rng">
            
        </div>

        <footer>
            <script src="public/js/rng.js"></script>
        </footer>
    </body>
</html>