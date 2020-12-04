
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- <script src="public/js/hiscores.js"></script> -->
        
        <!-- Base -->
        <!-- <script src="public/js/tables/herbs.js"></script>
        <script src="public/js/tables/megaRare.js"></script>
        <script src="public/js/tables/gems.js"></script>
        <script src="public/js/tables/rare.js"></script> -->

        <!-- Monsters -->
        <!-- <script src="public/js/tables/monsters/fireGiant.js"></script>
        <script src="public/js/tables/monsters/goblin.js"></script>
        <script src="public/js/tables/monsters/imp.js"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/styles.css">
    </head>

    <body>

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
                        <div class="d-flex align-items-center justify-content-center monster col-3" data-monster="<?=str_replace(' ', '%20', $monster)?>" style="background-image:url(public/img/monsters/<?=strtolower(str_replace("'", "", str_replace(' ','-',$monster)))?>.png), url(public/img/backgrounds/<?=$background['image']?>.jpg);">
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