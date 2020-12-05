
<html>
    <head>
        <title>Old School RuneScape RNG Simulator</title>
        <meta name="description" content="Simulate monster and boss drops with this RNG Simulator for Old School RuneScape.">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/styles.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <link rel="icon" type="image/png" href="/public/img/favicon.png"/>

        <meta property="og:title" content="Old School RuneScape RNG Simulator">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:url" content="https://rngsimulator.com/public/img/social.jpg">
        <meta property="og:image" content="https://rngsimulator.com/public/img/social.jpg">
        <meta property="og:image:width" content="1000">
        <meta property="og:image:height" content="500">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BD9D35VVC1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BD9D35VVC1');
        </script>

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><span class="font-weight-bold">RNG</span>Simulator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Monster Drops <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>                
            </ul>
            <span class="navbar-text">
                <a href="https://www.buymeacoffee.com/bdonberger"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a nice cuppa tea&emoji=🍵&slug=bdonberger&button_colour=5F7FFF&font_colour=ffffff&font_family=Lato&outline_colour=000000&coffee_colour=FFDD00"></a>
            </span>
        </div>
        </nav>

        <?php 

            $monsters = [
                'Fire giant' => [
                    'image' => 'cave'
                ],
                'Goblin' => [
                    'image' => 'grass-land'
                ],
                'Imp' => [
                    'image' => 'grass-land'
                ],
                'Dark wizard' => [
                    'image' => 'grass-land'
                ],
                'Dwarf' => [
                    'image' => 'mining'
                ],
                'Ice giant' => [
                    'image' => 'ice'
                ],
                'Lesser demon' => [
                    'image' => 'lava'
                ],
                'Zulrah' => [
                    'image' => 'swamp'
                ],
                'Vorkath' => [
                    'image' => 'ice'
                ],
                'Flesh Crawler' => [
                    'image' => 'cave'
                ],
                'Aberrant spectre' => [
                    'image' => 'cave'
                ],
                'Ankou' => [
                    'image' => 'cave'
                ],
                'Aviansie' => [
                    'image' => 'ice'
                ],
                'Kree\'arra' => [
                    'image' => 'ice'
                ],
                'King Black Dragon' => [
                    'image' => 'cave'
                ],
                'Dagannoth Rex' => [
                    'image' => 'water'
                ],
                'Chaos Elemental' => [
                    'image' => 'wildy'
                ],
                'Cerberus' => [
                    'image' => 'cave'
                ],
                'Kalphite Queen' => [
                    'image' => 'sand-cave'
                ],
                'Venenatis' => [
                    'image' => 'wildy'
                ],
                'Callisto' => [
                    'image' => 'wildy'
                ],
                'General Graardor' => [
                    'image' => 'ice'
                ],
                'K\'ril Tsutsaroth' => [
                    'image' => 'ice'
                ],
                'Cave horror' => [
                    'image' => 'cave'
                ],
                'Kraken' => [
                    'image' => 'water'
                ],
                'Mithril dragon' => [
                    'image' => 'cave'
                ],
                'Mogre' => [
                    'image' => 'water'
                ],
                'Locust rider' => [
                    'image' => 'sand-cave'
                ],
                'Skeletal Wyvern' => [
                    'image' => 'ice'
                ],
                'Mountain troll' => [
                    'image' => 'rock'
                ],
                'Corporeal Beast' => [
                    'image' => 'cave'
                ],
                'The Nightmare' => [
                    'image' => 'nightmare'
                ],
                'Commander Zilyana' => [
                    'image' => 'ice'
                ],
                'Zalcano' => [
                    'image' => 'volcano'
                ],
                'Colossal Hydra' => [
                    'image' => 'water'
                ],
                'Thermonuclear smoke devil' => [
                    'image' => 'cave'
                ],
                'Hespori' => [
                    'image' => 'grass-cave'
                ],
                'Demonic gorilla' => [
                    'image' => 'blue-cave'
                ],
                'Crazy archaeologist' => [
                    'image' => 'wildy'
                ],
                'The Mimic' => [
                    'image' => 'mimic'
                ],
                'Abyssal Sire' => [
                    'image' => 'nexus'
                ],
                'Scorpia' => [
                    'image' => 'wildy'
                ],
                'Vet\'ion' => [
                    'image' => 'wildy'
                ],
                'Giant Mole' => [
                    'image' => 'cave'
                ],
                'Deranged archaeologist' => [
                    'image' => 'tar-swamp'
                ],
                'Farmer' => [
                    'image' => 'grass-land'
                ],
                'Barbarian' => [
                    'image' => 'dirt-land'
                ],
                'Wizard' => [
                    'image' => 'grass-water-land'
                ],
                'Al-Kharid warrior' => [
                    'image' => 'palace'
                ],
                'Hill Giant' => [
                    'image' => 'cave'
                ],
                // 'Hobgoblin' => [
                //     'image' => 'grass-water-land'
                // ],
                'Black Knight' => [
                    'image' => 'grass-land'
                ],
                'White Knight' => [
                    'image' => 'grass-land'
                ],
                'Moss giant' => [
                    'image' => 'cave'
                ],
                'Ice warrior' => [
                    'image' => 'ice'
                ],
                'Greater demon' => [
                    'image' => 'lava'
                ],
                'H.A.M. Guard' => [
                    'image' => 'dirt-land'
                ],
                'Minotaur' => [
                    'image' => 'rock'
                ],
                'Giant frog' => [
                    'image' => 'swamp'
                ],
                'Rock Crab' => [
                    'image' => 'rock'
                ],
                'Rock Golem' => [
                    'image' => 'mining'
                ],
                // 'Tree spirit' => [
                //     'image' => 'grass-water-land'
                // ]
                'Wall beast' => [
                    'image' => 'rock'
                ],
                'Druid' => [
                    'image' => 'grass-land'
                ],
                'Cockatrice' => [
                    'image' => 'cave'
                ],
                'Sourhog' => [
                    'image' => 'cave'
                ],
                'Banshee' => [
                    'image' => 'tower'
                ],
                'Basilisk' => [
                    'image' => 'cave'
                ],
                'Black demon' => [
                    'image' => 'cave'
                ],
                'Bloodveld' => [
                    'image' => 'cave'
                ],
                'Blue dragon' => [
                    'image' => 'cave'
                ],
                'Dagannoth Supreme' => [
                    'image' => 'water'
                ],
                'Dagannoth Prime' => [
                    'image' => 'water'
                ],
                'Brine rat' => [
                    'image' => 'cave'
                ],
                'Bronze dragon' => [
                    'image' => 'cave'
                ],
                'Chaos druid' => [
                    'image' => 'cave'
                ],
                // 'Dagannoth' => [
                //     'image' => 'water'
                // ]
                'Dark beast' => [
                    'image' => 'cave'
                ],
                'Guardian Drake' => [
                    'image' => 'rock'
                ],
                'Dust devil' => [
                    'image' => 'cave-smoke'
                ],
                'Elf Archer' => [
                    'image' => 'elf-land'
                ],
                'Gargoyle' => [
                    'image' => 'tower'
                ],
                'Revenant imp' => [
                    'image' => 'wildy'
                ],
                'Revenant goblin' => [
                    'image' => 'wildy'
                ],
                'Revenant pyrefiend' => [
                    'image' => 'wildy'
                ],
                'Revenant hobgoblin' => [
                    'image' => 'wildy'
                ],
                'Revenant cyclops' => [
                    'image' => 'wildy'
                ],
                'Revenant hellhound' => [
                    'image' => 'vz'
                ],
                'Revenant demon' => [
                    'image' => 'wildy'
                ],
                'Revenant ork' => [
                    'image' => 'wildy'
                ],
                'Revenant dragon' => [
                    'image' => 'wildy'
                ],
                'Warped Jelly' => [
                    'image' => 'blue-purple-cave'
                ],
                'Jungle horror' => [
                    'image' => 'jungle'
                ],
                'Kalphite Guardian' => [
                    'image' => 'sand-cave'
                ],
                'Lizardman' => [
                    'image' => 'lizard'
                ],
                'Mammoth' => [
                    'image' => 'wildy'
                ],
                'Ancient Zygomite' => [
                    'image' => 'mushroom'
                ],
                'Ogre' => [
                    'image' => 'grass-water-land'
                ],
                'Pirate' => [
                    'image' => 'ice'
                ],
                'Infernal pyrelord' => [
                    'image' => 'cave'
                ],
                'Brutal red dragon' => [
                    'image' => 'blue-purple-cave'
                ],
                'Suqah' => [
                    'image' => 'grass-water-land'
                ]
            ];
            
            ksort($monsters);
        ?>


        <div class="fluid-container main-container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-8 col-12 d-flex">
                    <div class="row monster-holder">
                    <?php
                        foreach ($monsters as $monster => $background) { ?>
                        <div class="d-flex align-items-center justify-content-center monster col-lg-3 col-5" data-monster="<?=str_replace(' ', '%20', $monster)?>" style="background-image:url(public/img/monsters/<?=strtolower(str_replace("'", "", str_replace(' ','-',$monster)))?>.png), url(public/img/backgrounds/<?=$background['image']?>.jpg);">
                            <h2 class="text-center">
                                <?=$monster?>
                            </h2>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                </div>  
                <div class="col-lg-4 col-12">
                    <aside>
                        <h2 class="pt-4 px-4 text-white text-center">
                            Loot Bag
                            <hr style="background:white;">
                        </h2>
                        <div id="loot-bag">
                            <p class="text-center">
                                You're loot bag is empty
                            </p>
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