<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Privilege
 * @package App\Models
 *
 * @property $title
 * @property $server_id
 * @property $description
 * @property $server
 * @property $rates
 */
class Privilege extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'server_id',
        'title',
        'description',
        'flags',
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public function rates()
    {
        return $this->hasMany(PrivilegeRate::class);
    }
}
