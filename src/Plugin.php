<?php
declare(strict_types=1);

namespace SpiresGoodbye;

use Spires\Irc\Connection;
use Spires\Plugins\ChannelOperations\Inbound\PartSystemMessage;

class Plugin
{
    /**
     * @param PartSystemMessage $message
     * @param Connection $connection
     */
    public function goodbye(PartSystemMessage $message, Connection $connection)
    {
        if (rand(0, 500) === 0) {
            send_to([$connection->channel()], $this->getText($message));
        }
    }

    /**
     * @param PartSystemMessage $message
     * @return string
     */
    private function getText(PartSystemMessage $message)
    {
        $texts = [
            "Thank goodness %s has gone.",
            "%s is so boring, I'm please they are gone",
            "It smells better in here now, right?",
            "Goodbye %s... oh, too late.",
            "Now that %s has gone, who wants to party?"
        ];

        return str_replace(
            "%s",
            $message->nickname(),
            $texts[rand(0, count($texts) - 1)]
        );
    }
}
