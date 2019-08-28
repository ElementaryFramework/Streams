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
 * Seekable Stream Interface
 *
 * Interface with base methods to implement a
 * stream with seekable cursor capabilities.
 *
 * @package    Streams
 * @author     Axel Nana <ax.lnana@outlook.com>
 */
interface ISeekableStream extends IStream
{
    /**
     * Seeks the stream cursor to the given position.
     *
     * @param int $offset The offset to move the cursor.
     *
     * The stream cursor's final position will depend of `$whence`.
     * - If `$whence` is equal to `SEEK_SET`, `$offset` will represent
     * the amount of bytes from the start of the stream.
     * - If `$whence` is equal to `SEEK_CUR`, the final cursor position
     * will be the current position plus `$offset`.
     * - If `$whence` is equal to `SEEK_END`, the final cursor position
     * will be the last possible position in the stream plus `$offset`.
     *
     * To move backward from the end of the stream, set `$offset` to an
     * negative number and `$whence` to `SEEK_END`.
     *
     * @param int $whence The origin of `$offset`.
     *
     * Possible values are:
     * - `SEEK_SET` to start from the beginning.
     * - `SEEK_CUR` to start from the current position.
     * - `SEEK_END` to start from the last position.
     *
     * @return void
     */
    function seekTo(int $offset, int $whence = SEEK_SET) : void;

    /**
     * Seeks the stream cursor to the beginning.
     *
     * @return void
     */
    function seekToStart() : void;

    /**
     * Seeks the stream cursor to the end.
     *
     * @return void
     */
    function seekToEnd() : void;
}
