<?php

namespace App\Filament\Doctor\Resources\Appointments\Pages;

use App\Filament\Doctor\Resources\Appointments\AppointmentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAppointment extends CreateRecord
{
    protected static string $resource = AppointmentResource::class;
}
