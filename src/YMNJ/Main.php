<?php
namespace YMNJ;
	
use pocketmine\plugin\PluginBase as Plugin;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent;

class Main extends Plugin implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("YouMayNowJoin Is Enabled.");
    }
    public function onPlayerKick(PlayerKickEvent $event) {
        if($event->getReason() === "disconnectionScreen.serverFull")
            $event->setCancelled(true);
        if($event->getReason() === "disconnectionScreen.invalidName")
            $event->setCancelled(true);
        if($event->getReason() === "disconnectionScreen.invalidSkin")
            $event->setCancelled(true);
        if($event->getReason() === "disconnectionScreen.noReason")
            $event->setCancelled(true);
    }
    public function onDisable() {
        $this->getServer()->getLogger()->info("YouMayNowJoin has been disabled. Thanks for using YouMayNowJoin.");
    }
}
