<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * definis l'index qui doit être utilisé dans la recherche
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * renvoie l'attribut slug sous form de lien
     * @return string
     */
    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
