<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class BorrowerPersonalDetails extends Model
{
    use Searchable;
   protected $fillable = [
       'title','fname','lname','sname','nationality','idNumber','pin','mobile','telephone','dob','address','office','home','marital','education'
   ];

   public function user(){

       return $this->belongsTo(User::class);
   }

    /**
     * check if number exist
     * @param $query
     * @param $number
     * @return bool
     */
    protected function ScopeAccountNumberExist($query, $number) {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return $query->whereColumn('account',$number)->first() > 0 ? true : false;
    }
}
