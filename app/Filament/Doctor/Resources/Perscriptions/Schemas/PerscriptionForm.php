<?php

namespace App\Filament\Doctor\Resources\Perscriptions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PerscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('doctor_id')
                    ->relationship('doctor', 'id')
                    ->required(),
                Select::make('patient_id')
                    ->relationship('patient', 'id')
                    ->required(),
                TextInput::make('medication_name'),
                TextInput::make('dosage'),
                TextInput::make('frequency'),
                Textarea::make('instructions')
                    ->columnSpanFull(),
                DatePicker::make('start_date'),
                DatePicker::make('end_date'),
            ]);
    }
}
