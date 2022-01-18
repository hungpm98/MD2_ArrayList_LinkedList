<?php

use PHPUnit\Framework\TestCase;

include_once 'App\Practice2_LinkedListClass\LinkList.php';

class LinkedListTest extends TestCase
{
    public function test()
    {
        $test = new LinkedList();
        $test->insertFirst(22);
        $test->insertFirst(11);
        $test->insertLast(33);
        $test->insertLast(44);
        $totalNodes = $test->totalNodes();
        $linkData = $test->readList();
        $expect = [11,22,33,44];
        $this->assertEquals($expect,$linkData);

    }

}