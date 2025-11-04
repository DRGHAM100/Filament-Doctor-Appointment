<?php

namespace App\Filament\Resources\DoctorSchedules\Pages;

use App\Filament\Resources\DoctorSchedules\DoctorScheduleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDoctorSchedule extends ViewRecord
{
    protected static string $resource = DoctorScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
