<?php

declare(strict_types=1);

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
    public static function addEffect(Player $player, Effect $effectType, ?int $duration = null, int $amplifier = 0, bool $visible = true, bool $ambient = false, ?Color $overrideColor = null)
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
    public static function addEffectById(Player $player, int $effectType = 0, ?int $duration = null, int $amplifier = 0, bool $visible = true, bool $ambient = false, ?Color $overrideColor = null)
    {
        $effect = new EffectInstance(Effect::getEffect($effectType), $duration, $amplifier, $visible, $ambient, $overrideColor);
        $player->addEffect($effect);
    }

    /**
     * @param Player $player
     */
    public static function clearAllInv(Player $player)
    {
        $player->getInventory()->clearAll();
        $player->getArmorInventory()->clearAll();
    }

    public static function clearAllEffect(Player $player)
    {
        if (!$player->hasEffects()) {
            return;
        }
        foreach ($player->getEffects() as $effect) {
            $effect->setDuration(0);
        }
    }

    public static function clearEffect(Player $player, int $effectid)
    {
        if (!$player->hasEffect($effectid))
        {
            return;
        }
        $player->getEffect($effectid)->setDuration(0);
    }
}
