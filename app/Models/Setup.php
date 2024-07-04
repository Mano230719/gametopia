<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    use HasFactory;

    protected $fillable = [
        'setup_name',
        'motherboard',
        'graphics_card',
        'processor',
        'ram',
        'setup_category_id',
    ];

    public function category()
    {
        return $this->belongsTo(PcSetupCategory::class, 'setup_category_id');
    }
}
