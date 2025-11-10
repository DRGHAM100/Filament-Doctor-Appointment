<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'appointment_date',
        'appointment_time',
        'status',
    ];

    public function scopeSearch($query, $value){
        $query->where('appointment_date','like',"%{$value}%")
                ->orWhere('appointment_time','like',"%{$value}%")
            ->orWhereHas('doctor.user', function($q) use ($value) {
                $q->where('name', 'like', "%{$value}%");
            })
            ->orWhereHas('patient', function($q) use ($value) {
                $q->where('name', 'like', "%{$value}%");
            });
    }

    /**
     * Get the doctor that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    /**
     * Get the doctor that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}
