<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}