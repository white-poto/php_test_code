<?php

/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/10/31
 * Time: 11:00
 */
class OpenMoveTest extends PHPUnit_Framework_TestCase
{
    public function testSameFileSystem()
    {
        $file = '/tmp/open_move.test';
        $fp = fopen($file, 'w');

        $target = '/tmp/open_moved.test';
        $rename = rename($file, $target);
        if (!$rename) {
            throw new RuntimeException('rname failed');
        }

        $write = fwrite($fp, 'test');
        if ($write == 0) {
            throw new RuntimeException('write failed');
        }
        $content = file_get_contents($target);
        $this->assertEquals('test', $content);
    }

    public function testDifferentFileSystem()
    {
        $file = '/tmp/open_move.test';
        $fp = fopen($file, 'w');

        $target = '/dev/shm/open_moved.test';
        $rename = rename($file, $target);
        if (!$rename) {
            throw new RuntimeException('rname failed');
        }

        $write = fwrite($fp, 'test');
        if ($write == 0) {
            throw new RuntimeException('write failed');
        }
        $this->assertEquals(4, $write);
        $content = file_get_contents($target);
        $this->assertEquals('test', $content);
    }
}