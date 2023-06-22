<?php

namespace Lee1387\announcer\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginOwned;
use pocketmine\utils\TextFormat;
use Lee1387\announcer\Announcer;

class AnnouncerCommand extends Command implements PluginOwned {

    /** @var Announcer */
    private Announcer $plugin;

    public function __construct(Announcer $plugin) {
        parent::__construct("announcer", "Reload the Announcer configuration", "/autoannouncer", ["aa"]);
        $this->setPermission("autoannouncer.reload");
        $this->plugin = $plugin;
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool 
    {
        if(!$sender->hasPermission("autoannouncer.reload")) {
            $sender->sendMessage(TextFormat::RED . "You do not have sufficient permission to use this command!");
            return false;
        }

        $this->plugin->reloadConfig();
        $sender->sendMessage(TextFormat::GREEN . "Successfully reloaded configuration.");
        return true;
    }

    public function getOwningPlugin(): Announcer
    {
        return $this->plugin;
    }
}