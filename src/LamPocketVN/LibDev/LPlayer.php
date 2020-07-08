<?php

namespace LamPocketVN\LibDev;

use pocketmine\Player;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\utils\Color;

class LPlayer
{
    /**
     * @param Player $player
     * @param Effect $effectType
     * @param int|null $duration
     * @param int $amplifier
     * @param bool $visible
     * @param bool $ambient
     * @param Color|null $overrideColor
     */
    public static function addEffect(Player $player, Effect $effectType, ?int $duration=null, int $amplifier=0, bool $visible=true, bool $ambient=false, ?Color $overrideColor=null)
    {
        $effect = new EffectInstance($effectType, $duration, $amplifier, $visible, $ambient, $overrideColor);
        $player->addEffect($effect);
    }

    /**
     * @param Player $player
     * @param int $effectType
     * @param int|null $duration
     * @param int $amplifier
     * @param bool $visible
     * @param bool $ambient
     * @param Color|null $overrideColor
     */
    public static function addEffectById(Player $player, int $effectType = 0, ?int $duration=null, int $amplifier=0, bool $visible=true, bool $ambient=false, ?Color $overrideColor=null)
    {
        $effect = new EffectInstance(Effect::getEffect($effectType), $duration, $amplifier, $visible, $ambient, $overrideColor);
        $player->addEffect($effect);
    }

    /**
     * @param Player $player
     */
    public static function clearInv(Player $player)
    {
        $player->getInventory()->clearAll();
        $player->getArmorInventory()->clearAll();
    }
}
