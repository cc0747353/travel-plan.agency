<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\JobApplication;
use App\Models\Message;
use App\Models\Location;


class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function messages()
    {
        return $this->morphToMany(Message::class, 'messagable');
    }


    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }

    // location
    // public function location()
    // {
    //     return $this->belongsTo(Location::class);
    // }

    //country
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
