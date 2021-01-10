<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parsedown;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $dateFormat = 'Y-m-d';

    /**
     * change content format
     * 
     * @param string $value
     * @return string
     */
    public function getContentAttribute($value)
    {
        $parseDown = new Parsedown();
        return $parseDown->text($value);
    }
}
