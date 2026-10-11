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
}

function gainExp(Hero $hero, int $addExp): void {
    $hero->exp += $addExp;

    while ($hero->exp >= 100) {
        $hero->exp -= 100;
        levelUp($hero);
    }
}

function levelUp(Hero $hero): void {
    $hero->level++;
    $hero->attack += Hero::ATTACK_PER_LEVEL;
    $hero->hp += Hero::HP_PER_LEVEL;
}

$hero = new Hero();

$hero->name = "Beatrix";
$hero->typeHero = "Marksman";
$hero->hp = 4000;
$hero->attack = 1500;

gainExp($hero, 100);

echo "Nama : $hero->name <br>";
echo "Tipe : $hero->typeHero <br>";
echo "HP : $hero->hp <br>";
echo "Attack : $hero->attack <br>";
echo "Level : $hero->level <br>";
echo "Exp : $hero->exp <br>";