<?php
namespace Library;

class RNG {

    public $monsterId;

    public function getItem($id)
    {
        $item = \Models\DropsQuery::create()
            ->findPK($id);
        return $item;
    }

    public function getDrops($subTable)
    {
        if (!$subTable) {
            $monster = \Models\MonstersQuery::create()
            ->findPK($this->monsterId);
            return $monster->getMonsterDropss();
        } elseif ($subTable == 'HERBS') {
            return \Models\HerbsQuery::create()
                ->find();
        }
    }

    public function getWeightSum($dropsCollection)
    {
        $weightSum = 0;
        foreach ($dropsCollection as $drop) {
            $weightSum += $drop->getWeight();
        }
        return $weightSum;
    }

    public function roll($monsterId = null, $subTable = null)
    {   
        if ($monsterId) {
            $this->monsterId = $monsterId;
        }

        $dropsCollection = $this->getDrops($subTable);

        $itemFound = false;

        while (!$itemFound) {
            $randomNumber = $this->rng($this->getWeightSum($dropsCollection));
            $item = $this->searchItem($randomNumber, $dropsCollection, $subTable);

            if ($item) {
                $itemFound = true;
            }
        }
        return $item;
    }

    public function rng($weightSum)
    {
        return rand(0, $weightSum);
    }

    public function searchItem($randomNumber, $dropsCollection, $subTable = null) {
        for ($i = 0; $i < count($dropsCollection); $i++) {
            if ($randomNumber < $dropsCollection[$i]->getWeight()) {
                if (!$subTable && $this->getItem($dropsCollection[$i]->getDropId())->getSubTable()) {
                    return $this->roll($this->monsterId, $this->getItem($dropsCollection[$i]->getDropId())->getName());
                } else {
                    if (!$subTable) {
                        return $this->getItem($dropsCollection[$i]->getDropId())->getName();
                    } else {
                        return $dropsCollection[$i]->getName();
                    }

                }
            } else {
                $randomNumber -= $dropsCollection[$i]->getWeight();
            }
        }
    }
}