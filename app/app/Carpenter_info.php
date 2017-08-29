<?php

namespace App;
class Carpenter_info extends Model
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] =ucfirst($value);
    }
    public function getEmailAttribute($value)
    {
       // return "User: ".$value;
    	return ucfirst($value);
    }
    public function getNameAttribute($value)
    {
       // return "User: ".$value;
       return strtoupper($value);
    }
}
