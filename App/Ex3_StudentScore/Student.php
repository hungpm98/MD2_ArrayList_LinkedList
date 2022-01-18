<?php

class Student
{
    public $name;
    public $score;
    public $array;

    public function __construct()
    {
        $this->array = [];
    }

    public function insertFirst($name, $score)
    {
        $list = [
            "name" => $name,
            "score" => $score
        ];
        array_unshift($this->array, $list);
    }

    public function insertLast($name, $score)
    {
        $list = [
            "name" => $name,
            "score" => $score
        ];
        $this->array[] = $list;
    }

    public function showList()
    {
        return $this->array;
    }

    public function totalStudentsFail()
    {
        foreach ($this->array as $value) {
            if ($value['score'] <= 5) {
                return $value;
            }
        }
    }

    public function listStudentMaxScore()
    {
        $max = $this->array[0];
        foreach ($this->array as $value) {
            if ($max['score'] < $value['score']) {
                $max = $value;
            }
        }
        return $max;
    }

    public function findByName($name)
    {
        foreach ($this->array as $value) {
            if ($value['name'] == $name) {
                return $value;
            }
        }
    }
}

