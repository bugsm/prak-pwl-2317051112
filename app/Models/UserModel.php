<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserModel extends Model
{
    use HasFactory;
    protected $keyType = 'string';
public $incrementing = false;

    protected $table = 'user';
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function getUser()
{
    return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                ->get();
}
protected static function boot()
{
    parent::boot();

    static::creating(function ($model) {
        $model->id = (string) Str::uuid();
    });
}


}