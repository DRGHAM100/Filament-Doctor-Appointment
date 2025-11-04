<?php

namespace App\Filament\Doctor\Resources\DoctorSchedules\Schemas;

use App\Models\Doctor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class DoctorScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
