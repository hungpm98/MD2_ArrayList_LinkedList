<?php

class MyList
{

    public $size;
    public $elements;

    public function __construct($size)
    {
        $this->size = $size;
        $this->elements = [];
    }

    public function insert($index, $obj) // thêm phần tử vào vị trí index
    {
        if (array_key_exists($index,$this->elements)) {
            $this->elements[$index] = $obj;
            return $this->elements;
        }
    }

    public function add($obj) // add obj vào mảng
    {
//       if ($this->isEmpty()){
        return $this->elements[]= $obj;
//       } else{
//           echo "Đã đầy";
//       }
    }

    public function remove($index) // xóa phần tử có vị trí index
    {
        if (array_key_exists($index , $this->elements)) {
            unset($this->elements[$index]);
            return $this->elements;
        }

    }

    public function get($index) // hiện thị giá trị của vị trí Index
    {
        if (array_key_exists($index,$this->elements)){
            return $index;
        } else{
            echo 'Vị trí này không tồn tại';
        }
    }

    public function clear() // xóa toàn bộ
    {
        return $this->elements[] = [];
    }

    public function addAll($arr) // thêm 1 mảng vào mảng hiện tại
    {
        return array_merge($this->elements,$arr);
    }

    public function indexOf($obj) // tìm phần tử tại vị trí index
    {
        if (array_key_exists($obj,$this->elements)){
            return $this->elements[$obj];
        } else{
            echo 'Không tồn tại vị trí: '. $obj;
        }

    }

    public function isEmpty()
    {
        return $this->size() == $this->elements;
    }

    public function sort()
    {
        sort($this->elements);
        return $this->elements;
    }

    public function reset()
    {
        reset($this->elements);
        return $this->elements;
    }

    public function size() // độ dài của mảng
    {
        return count($this->elements);
    }


}