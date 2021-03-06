<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'number',
        'id_user'
    ];

    protected $guarded = ['id'];

    protected $hidden = ['created_at','updated_at'];

    public function agenda()
    {
        return $this->hasMany(Photo::class);
    }
}
