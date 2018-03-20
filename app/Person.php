<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    public function getDate()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }
}
