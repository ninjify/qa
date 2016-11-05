<?php

namespace Ninjify\Composer\Script;

use Composer\Script\Event;

final class CodeFixer extends AbstractScript
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

        if (!isset($extra['ninjify']['qa']['codefixer'])) {
            $event->getIO()->writeError('You have to setup "codefixer" in "extra.ninjify.qa" section.');

            return;
        }

        // CodeFixer config
        $config = $extra['ninjify']['qa']['codefixer'];
        $script = new CodeFixer($event, $config);
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
            $this->event->getIO()->writeError('You have to add any folders in "extra.ninjify.qa.codefixer.folders" section.');

            return;
        }

        $folders = $this->config['folders'];
        $binDir = $this->event->getComposer()->getConfig()->get('bin-dir');
        passthru(sprintf('%s/codefixer %s', $binDir, implode(' ', $folders)));
    }

}
