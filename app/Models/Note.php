<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $fillable = [ 'content','merchant_id'];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}
