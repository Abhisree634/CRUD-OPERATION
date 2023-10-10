<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $guarded =[]; //create method mass assignment
    protected $dates = ['date_of_birth'];
    protected $hidden = ['id'];
   
    public function scopeActive($query){
        return $query->where('status',1);
    }

    public function getDateOfBirthAttribute($value){  
        return date('d-M-Y',strtotime($value));
    }
    public function setDateOfBirthAttribute($value){
        $this->attributes['date_of_birth'] = date('Y-m-d',strtotime($value));
    }

    public function getStatusTextAttribute(){
        if($this->status ==1) return "Active";
        else return "Inactive";
    }
    protected $appends =['date_of_birth_formated','status_text'];
   
   
   
}
