<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function Package()
    {
        return $this->belongsTo(Package::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
