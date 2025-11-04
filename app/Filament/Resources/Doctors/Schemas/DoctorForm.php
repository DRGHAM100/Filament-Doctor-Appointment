<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Doctor Details')
                    ->description('Fill in the main information for the doctor.')
                    ->schema([
                        Select::make('user_id')
                            ->relationship('user', 'name', fn($query) => $query->where('role', 'doctor'))
                            ->searchable()
                            ->preload()
                            ->required()
                            ->createOptionForm([
                                TextInput::make('name')->required(),
                                TextInput::make('email')->label('Email address')->email()->required(),
                                Select::make('role')
                                    ->options(['doctor' => 'Doctor'])
                                    ->required()
                                    ->default('doctor'),
                            ]),

                        Select::make('speciality_id')
                            ->relationship('speciality', 'name')
                            ->required(),

                        Textarea::make('bio')->columnSpanFull(),

                        TextInput::make('experience')->required()->numeric(),

                        TextInput::make('hospital_name'),

                        Toggle::make('is_featured')->label('Featured Doctor')->required(),

                        FileUpload::make('image')
                            ->label('Profile Image')
                            ->directory('doctors')
                            ->image()
                            ->maxSize(2048)
                            ->imagePreviewHeight('150')
                            ->downloadable()
                            ->disk('public')
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
