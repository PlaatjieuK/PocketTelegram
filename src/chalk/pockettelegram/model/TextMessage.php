<?php

/*
 * Copyright (C) 2015  ChalkPE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @author ChalkPE <chalkpe@gmail.com>
 * @since 2015-10-20 19:17
 */

namespace chalk\pockettelegram\model;

class TextMessage extends Message {
    /** @var string */
    private $text = "";

    /**
     * @param Message $message
     * @param string $text
     */
    public function __construct(Message $message, $text){
        parent::__construct($message->getMessageId(), $message->getDate(), $message->getChat(), $message->getFrom(), $message->getForwardFrom(), $message->getForwardDate(), $message->getReplyToMessage());

        $this->text = $text;
    }

    /**
     * @param array $array
     * @param Message $message
     * @return TextMessage
     */
    public static function create(array $array, Message $message){
        return new TextMessage($message, $array['text']);
    }

    /**
     * @return string
     */
    public function getText(){
        return $this->text;
    }
}