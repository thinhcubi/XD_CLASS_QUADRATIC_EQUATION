<?php
class Quadratic{
    private int $a;
    private int $b;
    private int $c;

public function __construct($a,$b,$c)
{
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
}
function getDiscriminant(){
    return ($this->b * $this->b) - (4*$this->a*$this->c);
}
function getRoot1(){
    return (-$this->b + sqrt(($this->b*$this->b)-(4*$this->a*$this->c))) / (2*$this->a);
}
function getRoot2(){
    return (-$this->b - sqrt(($this->b*$this->b)-(4*$this->a*$this->c))) / (2*$this->a);
}
}
