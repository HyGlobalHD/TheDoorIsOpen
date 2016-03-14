<?php
namespace TDIO;
	
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent as PlayerKick;

class Main extends PluginBase implements Listener{
    public function onLoad() {
        $this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
    	$this->getLogger()->info(TextFormat::LIGHT_PURPLE . "TheDoorIsOpen!.");
    	$this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
    }
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
        $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "TheDoorIsOpen Is Enabled.");
        $this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
    }
    public function onPlayerKick(PlayerKick $event){
        if($event->getReason() === "disconnectionScreen.serverFull"){
            $event->setCancelled(true);
            $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "TheDoorIsOpen has been successfully activated.");
        }
    }
    public function onDisable(){
    	$this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
        $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "TheDoorIsOpen has been disabled. Thanks for using TheDoorIsOpen.");
        $this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
    }
}
