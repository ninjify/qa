<?php

namespace Ninjify\Composer\Script;

use Composer\Script\Event;

final class Linter extends AbstractScript
{

    /** @var Event */
    private $event;

    /** @var array */
    private $config;

    /**
     * @param Event $event
     * @param array $config
     */
    public function __construct(Event $event, array $config)
    {
        $this->event = $event;
        $this->config = $config;
    }

    /**
     * API *********************************************************************
     * *************************************************************************
     */

    /**
     * @param Event $event
     * @return void
     */
    public static function execute(Event $event)
    {
        $extra = $event->getComposer()->getPackage()->getExtra();

        if (!isset($extra['ninjify'])) {
            $event->getIO()->writeError('You have to setup "ninjify" in "extra" section.');

            return;
        }

        if (!isset($extra['ninjify']['qa'])) {
            $event->getIO()->writeError('You have to setup "qa" in "extra.ninjify" section.');

            return;
        }

        if (!isset($extra['ninjify']['qa']['linter'])) {
            $event->getIO()->writeError('You have to setup "linter" in "extra.ninjify.qa" section.');

            return;
        }

        // Linter config
        $config = $extra['ninjify']['qa']['linter'];
        $script = new Linter($event, $config);
        $script->process();
    }

    /**
     * IMPLEMENTATION **********************************************************
     * *************************************************************************
     */

    /**
     * @return void
     */
    public function process()
    {
        if (!isset($this->config['folders']) || empty($this->config['folders'])) {
            $this->event->getIO()->writeError('You have to add any folders in "extra.ninjify.qa.linter.folders" section.');

            return;
        }

        $folders = $this->config['folders'];
        $binDir = $this->event->getComposer()->getConfig()->get('bin-dir');
        passthru(sprintf('%s/linter %s', $binDir, implode(' ', $folders)));
    }

}
