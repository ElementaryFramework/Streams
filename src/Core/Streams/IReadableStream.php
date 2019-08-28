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

namespace ElementaryFramework\Core\Streams;

/**
 * Readable Stream Interface
 *
 * Interface with base methods to implement a
 * stream with read-only capabilities.
 *
 * @package    Streams
 * @author     Axel Nana <ax.lnana@outlook.com>
 */
interface IReadableStream extends IStream
{
    /**
     * Checks if the stream is in a readable state.
     *
     * @return boolean
     */
    function isReadable() : bool;

    /**
     * Pauses the stream and stop reading incoming data events.
     *
     * @return void
     */
    function pause() : void;

    /**
     * Resumes reading incoming data events.
     *
     * @return void
     */
    function resume() : void;

    /**
     * Pipes all data from this readable stream to a writable destination.
     *
     * @param IWritableStream $destination The writable stream destination.
     * @param boolean         $autoEnd     Define if the $destination stream must
     *                                     end at the same time of this readable stream.
     *
     * @return IReadableStream A readable stream from the destination.
     */
    function pipe(IWritableStream $destination, bool $autoEnd = true) : IReadableStream;

    /**
     * Reads the amount length of data from the stream.
     *
     * This method will emit a {@see StreamEvent::EVENT_DATA} event
     * with the read buffer as event data.
     *
     * @param integer $length The length of data to read.
     *
     * @return void
     */
    function read(int $length) : void;
}
