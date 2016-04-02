<?php

namespace Callan\Niouze\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //
    protected $table = 'niouze_entries';

    protected $guarded = ['id', 'user_id'];

    protected $dates = ['published_at', 'date'];

}
