<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Step;
class Todo extends Model
{
    protected $fillable = ['title', 'completed', 'user_id', 'description'];


    public function Steps()
    {
        return $this->hasMany(Step::class);
    }
}
