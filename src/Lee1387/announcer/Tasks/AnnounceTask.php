<?php

namespace Lee1387\announcer\Tasks;

use pocketmine\scheduler\Task;
use Lee1387\announcer\Announcer;

class AnnounceTask extends Task {

    /** @var Announcer */
    private Announcer $plugin;

    public function __construct(Announcer $plugin) {
        $this->plugin = $plugin;
    }

    public function onRun(): void {
        $this->plugin->broadcastNextMessage();
    }
}