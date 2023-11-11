<?php
class Animal
{
    private int $age;
    private int $height;
    private int $length;
    private string $voise;
    private bool $hasTboolail;
    public function __construct(int $age, int $height, int $length, string $voise, bool $hasTail)
    {
        if($age < 0)
        {
            $age = 0;
        }
        $this->age = $age; 
    
    
        if($height < 0)
        {
            $height = 0;
        }
        $this->height = $height;
    
    
        if($length < 0)
        {
            $length = 0;
        }
        $this->length = $length;
        $this->voise = $voise;
       if ($hasTail === true){
        $hasTail = true;
       }
        $this->hasTail = true;
    }
    public function getAge():int
    {
        return $this->age;
    }
    public function getHeight():int
    {
        return $this->height;
    }
    public function getLength():int
    {
        return $this->length;
    }
    public function getVoise():string
    {
        return $this->voise;
    }
    public function getHasTail():bool
    {
        return $this->hasTail;
    }
}
