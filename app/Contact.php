<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'country_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}