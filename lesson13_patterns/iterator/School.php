<?php
class School
{
    public function addTeacher($value)
    {
        $this->teacher[] = $value;
    }

    public function getIterator()
    {
        return new Teacher($this);
    }
}