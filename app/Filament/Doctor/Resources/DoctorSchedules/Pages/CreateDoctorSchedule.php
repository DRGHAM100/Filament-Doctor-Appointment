<?php

namespace App\Filament\Doctor\Resources\DoctorSchedules\Pages;

use App\Filament\Doctor\Resources\DoctorSchedules\DoctorScheduleResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CreateDoctorSchedule extends CreateRecord
{
    protected static string $resource = DoctorScheduleResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['doctor_id'] = Auth::user()->doctor->id;
        return static::getModel()::create($data);
    }
}
