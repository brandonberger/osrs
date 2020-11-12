<?php
namespace Library;

class HiscoreParser {

    private $skillArray = [
        'TOTAL',
        'ATTACK',
        'STRENGTH',
        'DEFENSE',
        'HITPOINTS',
        'RANGED',
        'PRAYER',
        'MAGIC',
        'COOKING',
        'WOODCUTTING',
        'FLETCHING',
        'FISHING',
        'FIREMAKING',
        'CRAFTING',
        'SMITHING',
        'MINING',
        'HERBLORE',
        'AGILITY',
        'THIEVING',
        'SLAYER',
        'FARMING',
        'RUNECRAFTING',
        'HUNTER',
        'CONSTRUCTION'
    ];


    public function parseHiscores($data)
    {
        $hiscores = str_replace(',',' ', $data['hiscores']);
        $hiscores = str_replace("\n", '@', $hiscores);
        $hiscores = str_replace(' ', '@', $hiscores);
        $hiscores = str_replace('@', ',', $hiscores);
        $hiscores = explode(',', $hiscores);

        $skills = [];
        for ($i = 0; $i < 24; $i++) {
            $skills[] = array_slice($hiscores, 0, 3);
            array_splice($hiscores, 0, 3);
        }

        foreach ($skills as $key => $level) {
            $skills[$key]['name'] = $this->skillArray[$key];
            $skills[$key]['rank'] = $level[0];
            $skills[$key]['level'] = $level[1];
            $skills[$key]['xp'] = $level[2];
            unset($skills[$key][0]);
            unset($skills[$key][1]);
            unset($skills[$key][2]);
        }

        return json_encode($skills);
    }
}


?>