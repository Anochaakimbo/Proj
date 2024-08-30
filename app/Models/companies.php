<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    protected $table = "companies";
    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamp = true;
    public function users(){
        return $this->belongsTo(User::class, "id");
    }
}
