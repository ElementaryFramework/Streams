<?php

/**
 * Streams
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category  Library
 * @package   Streams
 * @author    Axel Nana <ax.lnana@outlook.com>
 * @copyright 2019 Aliens Group.
 * @license   MIT <https://github.com/ElementaryFramework/Streams/blob/master/LICENSE>
 */

namespace ElementaryFramework\Core\Streams\Events;

use ElementaryFramework\Core\Events\IEvent;

/**
 * Stream Event
 *
 * Represent an event occurred in a stream.
 *
 * @package    Events
 * @author     Axel Nana <ax.lnana@outlook.com>
 */
abstract class StreamEvent implements IEvent
{
    /**
     * Represent an unknown event.
     */
    const EVENT_UNKNOWN = 0;

    /**
     * Represent a "error" event.
     */
    const EVENT_ERROR = 1;

    /**
     * Represent a "close" event.
     */
    const EVENT_CLOSE = 2;

    /**
     * Represent a "data" event.
     */
    const EVENT_DATA = 3;

    /**
     * Represent an "end" event.
     */
    const EVENT_END = 4;

    /**
     * Represent an "drain" event.
     */
    const EVENT_DRAIN = 5;

    /**
     * Represent an "pipe" event.
     */
    const EVENT_PIPE = 6;

    /**
     * The type of the raised event.
     *
     * @var integer
     */
    protected $_eventType;

    /**
     * Creates a new stream event
     *
     * @param integer $type The event type.
     */
    public function __construct(int $type)
    {
        $this->_eventType = $type;
    }

    /**
     * Returns the type of this event.
     *
     * @return integer
     */
    public function getEventType(): int
    {
        return $this->_eventType;
    }
}