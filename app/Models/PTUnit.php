<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PTUnit extends Model
{
    use HasFactory;
    protected $table = "pt_unit";
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_pt_unit', 'nama_pt_unit'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_pt_unit');
    }

    public function mhsBaru(): HasMany
    {
        return $this->hasMany(Mhsbaru::class, 'id_pt_unit');
    }

    public function bebanDtpr(): HasMany
    {
        return $this->hasMany(BebanDTPR::class, 'id_pt_unit');
    }

    public function kependidikan(): HasMany
    {
        return $this->hasMany(TenagaKependidikan::class, 'id_pt_unit');
    }

    public function Aksesibilitas(): HasMany
    {
        return $this->hasMany(Aksesibilitas::class, 'id_pt_unit');
    }

    public function SaranaPrasarana(): HasMany
    {
        return $this->hasMany(SaranaPrasarana::class, 'id_pt_unit');
    }

    public function IPKLulusan(): HasMany
    {
        return $this->hasMany(IPKLulusan::class, 'id_pt_unit');
    }
}
