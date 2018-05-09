<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * The model for the Message class.
 *
 * Class Messages
 * @package App
 */
class Messages extends Model
{
    protected $fillable = ['username', 'email', 'content'];
}
