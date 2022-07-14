<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['name','kategori_id','harga','jumlah','deskripsi'];
    /**
     * Get the kategori that owns the Barang
     *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
