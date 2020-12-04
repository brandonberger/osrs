let blackList = [
    11941, // looting bag
    7872, // firegiant bone
    532, // big bones
    526, // bones
    7812, // goblin skull
    592, // ashes
    7875, // ice giant ribs
    12934, // zulrah scales
    22124, // sup dragon bones
    1751, // blue d'hide
    23490, // Larrans key
    20543, // elite reward casket
    12073, // elite clue scroll 
    11940, // dark fishing bait
    19679, // dark totem base
    19683, // dark totem top
    19677, // ancient shard
    21257, // slayer's enchantment
    19681, // dark totem middle
    314, // feathers
    23083, // brimstone key
    1747, // black dragon hide
    536, // dragon bones
    19812, // key elite
    11942, // Ecumenical_key
    7884, // troll bone
    7869, // moss giant bone
];

function getDropTable(monster) {
    $.ajax({
        method: "GET",
        url: 'https://api.osrsbox.com/monsters?where={"name": "'+monster+'"}'
    }).done(function(res) {
        handleItemDrops(res._items[0].drops, monster);
    });
}

function handleItemDrops(dropTable, monster) {
    var item = roll(dropTable);
    addToLootBag(monster, item);
    paintLootBag(loot);
    // console.log(loot);
}


function findMin(table) {
    var min = 1;
    for (var i = 0; i < table.length; i++) {
        if (table[i].rarity < min) {
            min = table[i].rarity;
        } else {
            continue;
        }
    }
    return min;
}

function findMax(table) {
    var max = 0;
    for (var i = 0; i < table.length; i++) {
        if (table[i].rarity > max) {
            max = table[i].rarity;
        } else {
            continue;
        }
    }

    return max;
}


function getSumWeight(table) {
    var weightSum = 0;
    for (var i = 0; i < table.length; i++) {
        weightSum += table[i].rarity;
    }
    return weightSum;
}

function rng(min, max, sum) {
    // return (Math.random() * (max - min) + min).toFixed(3);
    return (Math.random() * sum).toFixed(3);
}

function shuffle(table) {
    for (var i = 0; i < table.length - 1; i++) {
        var j = i + Math.floor(Math.random() * (table.length - i));

        var temp = table[j];
        table[j] = table[i];
        table[i] = temp;
    }
    return table;
}

function roll(table) {
    itemFound = false;

    table = shuffle(table);
    // console.log(table);

    var countRolls = 0;

    while (!itemFound && countRolls < 100) {
        countRolls++;
        min = findMin(table);
        max = findMax(table);
        sum = getSumWeight(table);
        randomNumber = rng(min, max, sum);
        // console.log(min, max, randomNumber);
        item = searchItem(randomNumber, table);

        if (item) {
            itemFound = true;
        }
    }
    return item;
}

function searchItem(randomNumber, table) {
    search: for (var i = 0; i < table.length; i++) {
        if (randomNumber < table[i].rarity) {

            if (table[i].rarity == 1) continue search;

            for (var b = 0; b < blackList.length; b++) {
                if (table[i].id == blackList[b]) continue search;
            }
            return table[i];
        } else {
            randomNumber -= table[i].rarity;
        }
    }
}


var loot = [];

function monsterInLootBag(monster) {
    let search = loot.filter(obj => {
        return obj.monster == monster;
    });
    return search.length;
}

function addToLootBag(monster, item) {
    if (monsterInLootBag(monster)) {
        let index = loot.findIndex(x => x.monster == monster);
        var duplicate = false;
        for (var i = 0; i < loot[index].drops.length; i++) {
            if (item.id == loot[index].drops[i].id) {
                var newQuantity = (parseInt(loot[index].drops[i].quantity) + parseInt(item.quantity)).toString();
                loot[index].drops[i].quantity = newQuantity;
                duplicate = true;
                break;
            }
        }

        if (!duplicate) {
            loot[index].drops.push(item);
        }

        loot[index].kc += 1;
    } else {
        var obj = {
            monster: monster,
            kc: 1,
            drops: [item]
        };
        loot.push(obj);
    }
}

function paintLootBag(loot) {
    // #loot-bag

    var lootBag = document.getElementById('loot-bag');
    lootBag.innerHTML = '';

    for (var i = loot.length - 1; i >= 0; i--) {
        var lootMonster = document.createElement('div');
        lootMonster.setAttribute('class', 'row monsterLootBag');
        var lootMonsterName = document.createElement('h3');
        lootMonsterName.setAttribute('class', 'col-12');

        var monsterNameString = loot[i].monster;
        monsterNameString = monsterNameString.replace('%20', ' ');

        lootMonsterName.innerText = monsterNameString;

        lootMonsterKC = document.createElement('span');
        lootMonsterKC.innerText = ' x'+loot[i].kc;

        lootMonsterName.appendChild(lootMonsterKC);

        lootMonster.appendChild(lootMonsterName);
        lootBag.appendChild(lootMonster);

        for (var j = 0; j < loot[i].drops.length; j++) {
            var lootItem = document.createElement('div');
            lootItem.setAttribute('class', 'col-4');

            lootItemQuantity = loot[i].drops[j].quantity;

            $.ajax({
                method: "GET",
                async: false,
                url: 'https://api.osrsbox.com/items?where={"id": "'+loot[i].drops[j].id+'"}'
            }).done(function(res) {
                var lootItemHolder = document.createElement('div');
                lootItemHolder.setAttribute('class','lootItemHolder');
                var lootItemImage = document.createElement('img');
                lootItemImage.setAttribute('src', 'https://www.osrsbox.com/osrsbox-db/items-icons/'+res._items[0].id+'.png');
                
                var lootItemText = document.createElement('p');
                lootItemText.innerText = lootItemQuantity + ' ' + res._items[0].name;

                lootItemHolder.appendChild(lootItemImage);
                lootItemHolder.appendChild(lootItemText);

                lootItem.appendChild(lootItemHolder);
                lootMonster.appendChild(lootItem);
            });
            // lootItem.innerText = loot[i].drops[j].quantity + ' ' + loot[i].drops[j].name;
            // lootMonster.appendChild(lootItem);
        }
    }
}

function getItemIcon(id) {
    $.ajax({
        method: "GET",
        url: 'https://api.osrsbox.com/items?where={"id": "'+id+'"}'
    }).done(function(res) {
        handleItemDrops(res._items[0].drops, monster);
    });
}

$('body').on('click', '.monster', function() {
    var monster = $(this).attr('data-monster');
    getDropTable(monster);
});

