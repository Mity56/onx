<?php
class Thesaurus {
    private $sl;
    public function __construct($sl) {
        $this->sl = $sl;
    }
    public function getSynonyms($word) {
        if (array_key_exists($word, $this->sl)) {
            $synonyms = $this->sl[$word];
        } else {
            $synonyms = [];
        }
        $result = [
            'word' => $word,
            'synonyms' => $synonyms
        ];
        return json_encode($result);
    }
}
$BD = array(
    "market" => array("trade"),
    "small" => array("little", "compact")
);
$sl= new Thesaurus($BD);
echo $sl->getSynonyms("small");
echo $sl->getSynonyms("asleast");
?>