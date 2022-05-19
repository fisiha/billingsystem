<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\controllers\AdminController;
class Admin extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'username',
        'password',
    ];
    public function customer()
    {
      return $this->hasMany(customer::class);
    }
}
