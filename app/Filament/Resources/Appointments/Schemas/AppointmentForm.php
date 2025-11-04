<?php

namespace App\Filament\Resources\Appointments\Schemas;

use App\Models\Doctor;
use App\Models\Patient;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AppointmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('doctor_id')
                    ->label('Doctor')
                    ->options(
                        Doctor::with('user')
                            ->get()
                            ->mapWithKeys(fn($doctor) => [$doctor->id => $doctor->user->name])
                    )
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('patient_id')
                    ->label('Patient')
                    ->options(
                        Patient::with('user')
                            ->get()
                            ->mapWithKeys(fn($doctor) => [$doctor->id => $doctor->user->name])
                    )
                    ->searchable()
                    ->preload()
                    ->required(),
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
