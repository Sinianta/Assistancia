<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'reponse',
        'user_id',
        'admin_Key',
        'status'
    ];

    /**
     * Get the user that owns the Demandes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
