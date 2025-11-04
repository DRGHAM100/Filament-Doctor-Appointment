<?php

namespace App\Filament\Doctor\Resources\Appointments\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AppointmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('doctor_id')
                    ->numeric(),
                TextEntry::make('patient_id')
                    ->numeric(),
                TextEntry::make('appointment_date')
                    ->date(),
                TextEntry::make('appointment_time')
                    ->time(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
