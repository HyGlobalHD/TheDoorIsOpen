<?php
namespace YMNJ;
	
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent as PlayerKick;

class Main extends PluginBase implements Listener{
    public function onLoad() {
        $this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
    	$this->getLogger()->info(TextFormat::LIGHT_PURPLE . "YouMayNowLoad.... I mean Join!.");
    	$this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
    }
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
        $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "YouMayNowJoin Is Enabled.");
        $this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
    }
    public function onPlayerKick(PlayerKick $event){
        if($event->getReason() === "disconnectionScreen.serverFull"){
            $event->setCancelled(true);
            $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "YouMayMowJoin has been successfully activated.");
        }
    }
    public function onDisable(){
    	$this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
        $this->getLogger()->info(TextFormat::LIGHT_PURPLE . "YouMayNowJoin has been disabled. Thanks for using YouMayNowJoin.");
        $this->getServer()->getLogger()->info("");
        $this->getServer()->getLogger()->info("");
    }
}
