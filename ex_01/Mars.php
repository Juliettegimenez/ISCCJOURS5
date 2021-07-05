<?php
class Mars {
    private $id;
    private static $nbr = 0;
    public function __construct(){
        $this->id = $Mars::$nbr++;
}
    public function __getId(){
        return $this->id;
    }
}
$rocks = new Mars();
$lite = new Mars();
$snack = new Mars();
echo $rocks->getId() . "\n";
echo $lite->getId() . "\n";
echo $snack->getId() . "\n";
?>