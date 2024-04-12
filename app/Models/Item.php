<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Number;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'quantity', 'last_updated_by'];
    public $timestamps = true;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'last_updated_by');
    }

    public function price() : string {
        return Number::format($this->price, 2);
    }
}
