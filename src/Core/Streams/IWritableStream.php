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
 * Writable Stream Interface
 *
 * Interface with base methods to implement a
 * stream with write-only capabilities.
 *
 * @package    Streams
 * @author     Axel Nana <ax.lnana@outlook.com>
 */
interface IWritableStream extends IStream
{
    /**
     * Checks if the stream is in a writable state.
     *
     * @return boolean
     */
    function isWritable() : bool;

    /**
     * Write data into this stream.
     *
     * @param mixed $data The data to write.
     *
     * @return boolean
     */
    function write($data) : bool;

    /**
     * End the stream with optional data.
     *
     * @param mixed $data The optional data to write before end.
     *
     * @return void
     */
    function end($data = null) : void;
}
