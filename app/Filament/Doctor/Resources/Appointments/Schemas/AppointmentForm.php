<?php

namespace App\Filament\Doctor\Resources\Appointments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AppointmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('doctor_id')
                    ->required()
                    ->numeric(),
                TextInput::make('patient_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('appointment_date')
                    ->required(),
                TimePicker::make('appointment_time')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('in-complete'),
            ]);
    }
}
