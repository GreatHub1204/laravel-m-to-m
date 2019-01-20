<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clan;

class Season extends Model
{
    protected $fillable = ['name', 'description', 'year'];

    public function clans() {
        return $this->belongsToMany(Clan::class, 'season_clan', 'season_id', 'clan_id');
    }
}
