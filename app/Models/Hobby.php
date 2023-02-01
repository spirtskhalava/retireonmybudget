<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hobbies';

    /**
     * Users that belong to the hobby
     */
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
