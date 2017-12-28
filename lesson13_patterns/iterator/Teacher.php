<?php
class Teacher
{
    private $index = 0;
    public function __construct(School $school)
    {
        $this->teacher = $school->teacher;
    }

    public function current()
    {
        $value = isset($this->teacher[$this->index]) ? $this->teacher[$this->index] : '';
        $this->index += 1;
        return $value;
    }

    public function hasNext()
    {
        return isset($this->teacher[$this->index]);
    }
}