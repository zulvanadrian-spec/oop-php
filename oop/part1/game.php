<?php

class Hero {

    public string $name;
    public string $typeHero;
    public int $hp;
    public int $attack;
    public int $level = 1;
    public int $exp = 0;

    public const ATTACK_PER_LEVEL = 100;
    public const HP_PER_LEVEL = 200;

    public function gainExp(Hero $hero, int $addExp){
        $hero->exp += $addExp;

        while ($hero->exp >= 100) {
            $hero->exp -= 100;
            levelUp($hero);
    }
}

    public function levelUp(Hero $hero): void {
        $hero->level++;
        $hero->attack += Hero::ATTACK_PER_LEVEL;
        $hero->hp += Hero::HP_PER_LEVEL;
        
    }

    public function info() {
        return
        "$hero->name <br>";
        "Tipe : $hero->typeHero <br>";
        "HP : $hero->hp <br>";
        "Attack : $hero->attack <br>";
        "Level : $hero->level <br>";
        "Exp : $hero->exp <br>";
    }

}

$beatrix = new Hero();
$beatrix->name = "Beatrix";
$beatrix->typehero = "Marksman";
$beatrix->hp = 4000;
$beatrix->attack = 900;

$beatrix->info();