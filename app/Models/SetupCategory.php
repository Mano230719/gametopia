<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupCategory extends Model
{
    use HasFactory;

    protected $table = 'setup_categories';
    protected $fillable = [
        'setup_category_name',
    ];

    public function setups()
    {
        return $this->hasMany(Setup::class, 'setup_category_id');
    }
}
