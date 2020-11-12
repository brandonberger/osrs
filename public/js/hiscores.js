
var playerName = 'PHPBdon';

$.get('https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player='+ playerName, function() {
    console.log('Searching...');
}).then(function(res) {

    var data = {
        hiscores: res
    };

    $.get('/api/hiscoreParser', data, function() {
        console.log('Parsing...');
    }).then(function(hiscores) {
        $.get('/api/displayHiscores', {skills: JSON.parse(hiscores)}, function() {
            console.log('Painting...');
        }).then(function(results) {
            $('#hiscoreList').html(results);
        });
    });
});

