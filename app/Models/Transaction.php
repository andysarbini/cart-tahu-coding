<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_number'; // set primary key
    public $incrementing = false; // unset increment
    protected $keyType = 'string'; // set type data string
    protected $guarded = []; // semua colom unprotected jd bisa isi row, sebaiknya gunakan fillable

    public function product() {
        return $this->hasMany(ProductTransaction::class, 'invoice_number', 'invoice_number');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
