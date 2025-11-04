<?php

namespace App\Filament\Resources\DoctorSchedules\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;
use App\Models\Doctor;

class DoctorScheduleForm
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
                Select::make('available_day')
                     ->options([
                        '1' => 'Sunday',
                        '2' => 'Monday',
                        '3' => 'Tuesday',
                        '4' => 'Wednesday',
                        '5' => 'Thursday',
                        '6' => 'Friday',
                        '7' => 'Saturday',
                     ])
                    ->required(),
                TimePicker::make('from')
                    ->required(),
                TimePicker::make('to')
                    ->required(),
            ]);
    }
}
