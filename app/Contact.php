<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contact;


class Contact extends Model
{
    protected $guarded = ['created_at', 'deleted_at'];
}
