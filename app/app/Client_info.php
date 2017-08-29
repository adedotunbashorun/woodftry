<?php

namespace App;
class Client_info extends Model
{
     protected $fillable = [
        'client_name', 'client_phone', 'client_email', 'client_delivery_address',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['client_name'] =ucfirst($value);
    }
    public function getEmailAttribute($value)
    {
       return strtok($value,'.');
    }
    public function getClientNameAttribute($value)
    {
       return strtoupper($value);
    }
}
