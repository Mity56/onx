<?php
class RankingTable {
    private $players = array();
    public function __construct($player) {
        $this->players = array_combine($player, array_fill(0, count($player), 0));
    }
    public function recordResult($player, $wynik) {
        if (isset($this->players[$player])) {
            $this->players[$player] += $wynik;
        }
    }
     public function playerRank($rang) {
        arsort($this->players);
        $sortowanie = array_keys($this->players);
        return $sortowanie[$rang - 1];
    }
}
$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);
echo $table->playerRank(1);
?>