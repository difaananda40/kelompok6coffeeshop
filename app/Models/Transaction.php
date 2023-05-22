<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'user_id',
        'paid'
    ];

    protected $appends = [
        'total',
        'total_harga'
    ];

    public function transaction_details()
    {
        return $this->hasMany('App\Models\TransactionDetail');
    }

    protected function total(): Attribute
    {
        return Attribute::make(
            get: function() {
                $total = 0;
                foreach($this->transaction_details as $td) {
                    $total++;
                }
                return $total;
            }
        );
    }

    protected function totalHarga(): Attribute
    {
        return Attribute::make(
            get: function() {
                $total = 0;
                foreach($this->transaction_details as $td) {
                    $total += $td->total;
                }
                return $total;
            }
        );
    }
}
