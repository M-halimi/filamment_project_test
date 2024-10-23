<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
        use HasFactory;
        protected $fillable = ['city_id','department_id','state_id','country_id','date_hired','date_of_birth','zib_code','address','last_name','first_name'];
            public function country():BelongsTo
        {
            return $this->belongsTo(Country::class);
        }
        public function state():BelongsTo
        {
            return $this->belongsTo(State::class);
        }
        public function city():BelongsTo
        {
            return $this->belongsTo(City::class);
        }
        public function department():BelongsTo
        {
            return $this->belongsTo(Department::class);
        }
}
