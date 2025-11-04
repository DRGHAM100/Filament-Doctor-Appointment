<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name', function($query){
                        $query->where('role', 'patient');
                    })
                    ->searchable()
                    ->preload()
                    ->required()
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        Select::make('role')
                            ->options([
                                'patient' => 'Patient'
                            ])
                            ->required()
                            ->default('patient')
                    ]),
            ]);
    }
}
