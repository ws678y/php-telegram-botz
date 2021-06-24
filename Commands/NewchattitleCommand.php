<?php

/**
 * This file is part of the PHP Telegram Bot example-bot package.
 * https://github.com/php-telegram-bot/example-bot/
 *
 * (c) PHP Telegram Bot Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;

/**
 * New chat title command
 *
 * Gets executed when the title of a group or channel gets set.
 */
class NewchattitleCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'newchattitle';

    /**
     * @var string
     */
    protected $description = 'New chat Title';

    /**
     * @var string
     */
    protected $version = '1.1.0';

    /**
     * Command execute method
     *
     * @return \Longman\TelegramBot\Entities\ServerResponse
     * @throws \Longman\TelegramBot\Exception\TelegramException
     */
    public function execute()
    {
        //$message = $this->getMessage();
        //$new_chat_title = $message->getNewChatTitle();

        return parent::execute();
    }
}
