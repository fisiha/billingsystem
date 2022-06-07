<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\controllers\customerController;
class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'sex',
        'phoneNo',
        'bank_account',
        'house_No',
   
        ];
        public function Admin()
        {
          return $this->belongsTo(Admin::class);
        }

}
