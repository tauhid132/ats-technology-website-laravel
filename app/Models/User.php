<?php

namespace App\Models;

use App\Models\ServiceArea;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'status',
        'customer_name',
        'responsible_person',
        'mobile_primary',
        'mobile_alternate',
        'email',
        'connection_address',
        'billing_address',
        'service_area_id',
        'billing_cycle',
        'monthly_bill',
        'current_due',
        'expire_day',
        'expire_date',
        'installation_date',
        'nid_no',
        'customer_type',
        'package',
        'reference',
        'physical_connectivity',
        'logical_connectivity',
        'ip_address',
        'onu_mac',
        'cable_code',
        'distribution_point',
        'api_status',
        'api_server',
        'auto_disconnect',
        'print_invoice',
        'send_sms',
        'send_email',
        'password',
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

    public function service_area(){
        return $this->belongsTo(ServiceArea::class);
    }

   

}
