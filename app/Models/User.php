<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\enum\ProductStatusEnum;
use Illuminate\Database\Eloquent\Relations\HasMany;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */ 
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'tanggal'
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
        'No_Hp',
        'jumlah_pengunjung',
        'total_bayar',
        'status_id',
        'tanggal',
        'upload_pembayaran',
        'name_pembayaran',
        'extension',
        'size',
        'mime',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
   

    public function status()
    {
        return $this->belongsTo(status::class);       
    }
    public function customerTickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'customer_id');
    }
}
