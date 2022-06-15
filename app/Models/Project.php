<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }
    use HasFactory;

    #relaciononar la table projects con la table categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
