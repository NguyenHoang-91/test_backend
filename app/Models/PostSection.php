<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostSection extends Model
{
    protected $table = 'post_sections';

    protected $fillable = [
        'post_id',
        'subtitle',
        'section_type',
        'content',
        'order',
    ];
}
