<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Email;

class inquiry extends Model
{
    use HasFactory;

    protected $fillable =['name', 'mail'];

    public static $rules =array(
        'name' => 'required',
        'mail' => 'required|email',
    );
}
