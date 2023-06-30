<?php
class TextInput {
    protected $x = '';
    public function add($text) {
        $this->x.=$text;
    }
     public function getValue() {
        return $this->x;
    }
}
class NumericInput extends TextInput {
    public function add($text) {
        if (is_numeric($text)) {
            $this->x.=$text;
        }
    }
}
?>