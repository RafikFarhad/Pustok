<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function book()
    {
        return $this->hasOne('App\Book');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
    protected $fillable = [
        'loan_number', 'bookid', 'date', 'expire_date', 'user', 
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
