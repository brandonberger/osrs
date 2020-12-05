
<html>
    <head>
        <title>About | Old School RuneScape RNG Simulator</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="/">Monster Drops</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>                
            </ul>
            <span class="navbar-text">
                <a href="https://www.buymeacoffee.com/bdonberger"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a nice cuppa tea&emoji=🍵&slug=bdonberger&button_colour=5F7FFF&font_colour=ffffff&font_family=Lato&outline_colour=000000&coffee_colour=FFDD00"></a>
            </span>
        </div>
        </nav>

        <div class="fluid-container main-container">
            <div class="row">
                <div class="col-12">
                    <p>
                        <h1>About</h1>
                        RNG Simulator is an application that allows you to play with different monster's drop rates. It uses a simple algorithim that takes in a list of items with weighted values and generates a random number, resulting in a "random" item drop.  
                        <br>
                        The rarity of items per monster replicates the exact rarity from Old School RuneScape. 
                        <br>
                        All drop table data is fetched via the <a target="_blank" rel="noopener" href="https://api.osrsbox.com/index.html">osrsbox API</a>.
                        <br>All images of monsters are from the <a target="_blank" rel="noopener" href="https://oldschool.runescape.wiki/">oldschoolrunescape.wiki</a>
                        <br>
                        For suggestions, feedback or concerns contact me at <a href="MAILTO:osrsrngsimulator@gmail.com">osrsrngsimulator@gmail.com</a>
                        <br><br>
                        If you really like this for some reason and feel the urge to buy me a nice cuppa tea, my umemployed self would very much appreciate it. 
                        <br><a href="https://www.buymeacoffee.com/bdonberger"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a nice cuppa tea&emoji=🍵&slug=bdonberger&button_colour=5F7FFF&font_colour=ffffff&font_family=Lato&outline_colour=000000&coffee_colour=FFDD00"></a>
                        <br><br>
                        <h2>Future Development</h2>
                            - Drop rates for things like clue scrolls and raids as well as the "Rare and Gem drop tables" and Pets will be added in the future.
                            <br>
                            - Grand exchange prices & total loot value will be added in the future.
                            <br>
                            - Item drops that currently contain a range in quantity will instead select a random quanity within the range.
                        <br><br>
                        <h2>Limitations:</h2>
                        Currently, the application does not take into account the "Rare and Gem drop table" or drops that should be multi-rolls. This will be addressed eventually.
                        <br>
                        Certain drops display a range in quantity, this may lead to undesired calculations.
                        <br>
                        Items with a 100% chance of receiving are not shown as well as some other unique items: 
                        <ul>
                            <li>Looting Bag</li>
                            <li>Bones from the Rag and Bone Man quests</li>
                            <li>Larrans key</li>
                            <li>Elite Reward Casket</li>
                            <li>Elite Clue Scroll</li>
                            <li>Dark Fishing Bait</li>
                            <li>Dark Totem Base</li>
                            <li>Dark Totem Top</li>
                            <li>Ancient Shard</li>
                            <li>Slayer's Enchantment</li>
                            <li>Dark Totem Middle</li>
                            <li>Feathers</li>
                            <li>Big Bones</li>
                            <li>Bones</li>
                            <li>Ashes</li>
                            <li>Zulrah Scales</li>
                            <li>Superior Dragon Bones</li>
                            <li>Blue Dragon Hide</li>
                            <li>Brimstone Key</li>
                            <li>Black Dragon Hide</li>
                            <li>Dragon Bones</li>
                            <li>Key (Elite)</li>
                            <li>Ecumenical key</li>
                        </ul> 
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>