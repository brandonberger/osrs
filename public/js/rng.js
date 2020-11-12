function getSumWeight(table) {
    var weightSum = 0;
    for (var i = 0; i < table.length; i++) {
        weightSum += table[i].weight;
    }
    return weightSum;
}

function rng(weightSum) {
    return Math.floor(Math.random() * (weightSum - 1));
}

function roll(table) {
    itemFound = false;

    while (!itemFound) {
        weightSum = getSumWeight(table);
        randomNumber = rng(weightSum);
        item = searchItem(randomNumber, table);

        if (item) {
            itemFound = true;
        }
    }
    return item;
}

function searchItem(randomNumber, table) {
    for (var i = 0; i < table.length; i++) {
        if (randomNumber < table[i].weight) {
            if (table[i].table) {
                return roll(table[i].table)
            } else {
                return table[i].name;
            }
        } else {
            randomNumber -= table[i].weight;
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
        loot[index].drops.push(item);
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

$('body').on('click', '.monster', function() {
    var monster = $(this).attr('data-monster');
    var dropTable = eval(monster+'_items');
    var item = roll(dropTable);
    $('#loot-bag').text(item);
    addToLootBag(monster, item);
    console.log(loot);
});

