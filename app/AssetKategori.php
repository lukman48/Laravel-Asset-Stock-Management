<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetKategori extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'asset_kategori';

    protected $fillable = [
        'kategori_id',
        'nama_kategori',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
        'danger_level',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    // public function transactions()
    // {
    //     return $this->hasMany(Transaction::class, 'asset_id');
    // }
}
