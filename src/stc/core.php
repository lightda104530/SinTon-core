<?php

namespace core;

use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\listener;

class extends PluginBase implements listener{

public function onLoad(){
  $this->getServer->getLogger()->notice(">> SinTon-Core is loading...")
  }
  
  public function on Enable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->getServer()->getLogger(TEXTFORMAT::GOLD . ">> SinTon-Core is now enable!!")
      }
}
