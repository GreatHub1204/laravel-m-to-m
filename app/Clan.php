<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Season;

class Clan extends Model
{
    protected $fillable = ['name', 'description', 'year'];

    public function seasons() {
        return $this->belongsToMany(Season::class, 'season_clan', 'clan_id');
    }
}
