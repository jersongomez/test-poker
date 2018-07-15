<?php
namespace App;

class Poker
{
    const POKER_CARDS_QUANTITY = 5;

    /**
     * @param array $cards
     * @return bool
     */
    public function isStraight(array $cards) : bool
    {
        if(!$this->validate($cards)) {
            return false;
        }

        if(!$this->isConsecutive($cards)) {
            return false;
        }

        return true;
    }

    private function validate(array $cards) : bool
    {
        $qty = count($cards);
        if($qty < 5 || $qty > 7) {
            return false;
        }

        foreach($cards as $c) {
            if($c < 2 || $c > 14) {
                return false;
            }
        }

        return true;
    }

    private function isConsecutive(array $cards)
    {
        sort($cards);

        $consecutiveNumbers = [];
        for($i = 0; $i < count($cards); $i++) {
            $c = $cards[$i];
            if (array_search($c + 1, $cards, true) !== false || array_search($c - 1, $cards, true) !== false) {
                if(!empty($consecutiveNumbers[$i - 1]) && $consecutiveNumbers[$i - 1] != $c - 1) {
                    $consecutiveNumbers = [];
                }
                $consecutiveNumbers[$i] = $c;
            }

            if ($c == 14 && min($consecutiveNumbers) == 2 && max($consecutiveNumbers) < 13) {
                $consecutiveNumbers[$i] = 14;
            }
        }

        return count($consecutiveNumbers) == Poker::POKER_CARDS_QUANTITY;
    }

}