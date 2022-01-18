<?php

use PHPUnit\Framework\TestCase;

include_once 'App/Ex3_StudentScore/Student.php';

class StudentTest extends TestCase
{
    public function testTotalStudentsFail()
    {
        $test = new Student();
        $test->insertFirst('abc', 9);
        $test->insertFirst('xyz', 4);
        $test->insertFirst('def', 7);
        $test->insertFirst('ghj', 10);
        $result = $test->totalStudentsFail();
        $expect = ["name" => "xyz",
            "score" => 4];
        $this->assertEquals($expect, $result);

    }
}