<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participates extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'event_id',
        'user_id',
        'present',
    ];

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('event_id', '=', $this->getAttribute('event_id'))
            ->where('user_id', '=', $this->getAttribute('user_id'));
 
        return $query;
    }

}
