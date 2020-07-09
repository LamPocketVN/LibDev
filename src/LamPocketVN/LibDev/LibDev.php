<?php

/**
 * LibDev
 * @API: 3.14.0
 * @version dev2
 */

namespace LamPocketVN\LibDev;

use LamPocketVN\LibDev\LPlayer;
use LamPocketVN\LibDev\LItem;
use pocketmine\plugin\Plugin;
use pocketmine\Server;

class LibDev
{
    /**
     * @return \LamPocketVN\LibDev\LPlayer
     */
    public static function getLPlayer(): LPlayer
    {
        return new LPlayer();
    }
    
    public static function getLItem(): LItem
    {
        return new LItem();
    }

    /**
     * @param $name
     * @return Plugin|null
     */
    public static function getPluginByName($name): ?Plugin
    {
        Server::getInstance()->getPluginManager()->getPlugin($name);
    }
}
