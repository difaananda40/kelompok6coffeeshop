<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';

    protected $fillable = [
        'transaction_id',
        'menu_id',
        'jumlah'
    ];

    protected $appends = [
        'total'
    ];

    public function transaction()
    {
        return $this->belongsTo('App\Models\Transaction');
    }

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    protected function total(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->menu->harga * $this->jumlah
        );
    }
}
