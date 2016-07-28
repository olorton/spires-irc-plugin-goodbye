<?php
declare(strict_types=1);

namespace SpiresGoodbye;

class ServiceProvider extends \Spires\Core\ServiceProvider
{
    /**
     * Plugins provided.
     *
     * @return string[]
     */
    public function plugins()
    {
        return [
            Plugin::class
        ];
    }
}
