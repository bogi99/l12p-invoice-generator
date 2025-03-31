<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceItems extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceItemsFactory> */
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'item',
        'qty',
        'price',
    ];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
