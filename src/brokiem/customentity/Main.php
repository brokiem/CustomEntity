<?php

declare(strict_types=1);

namespace brokiem\customentity;

use brokiem\snpc\SimpleNPC;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        $entityName = "villager"; // this is used when using the SimpleNPC spawn command
        $force = false; // force register, if your entity not registered,  use true
        $saveNames = ["minecraft:villager"]; // save name (array)
        SimpleNPC::registerEntity(CustomVillager::class, $entityName, $force, $saveNames); // register the entity to SimpleNPC
        // NOTE: Use SimpleNPC::registerEntity();! NOT Entity::registerEntity();
    }
}