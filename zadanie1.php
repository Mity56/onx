<?php
class Pipeline {
    public static function make(...$functions) {
        return function ($arg) use ($functions) {
            foreach ($functions as $functions1) {
                $arg = $functions1($arg);
            }
            return $arg;
        };
    }
}
$f1 = function ($arg) {
    return $arg + 4;
};
$f2 = function ($arg) {
    return $arg * $arg;
};
$f3 = function ($arg) {
    return $arg / 2;
};
$dia = Pipeline::make($f1, $f2, $f3);
$result = $dia(6); 
echo $result;
?>
