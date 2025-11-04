<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DoctorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('image')
                    ->label('Doctor Image')
                    ->circular()
                    ->imageHeight(100)
                    ->imageWidth(100)
                    ->columnSpanFull()
                    ->disk('public')
                    ->hidden(fn ($record) => blank($record->image)),

                TextEntry::make('user.name')
                    ->label('Doctor Name'),

                TextEntry::make('hospital_name')
                    ->label('Hospital Name')
                    ->hidden(fn ($record) => blank($record->hospital_name)),

                TextEntry::make('speciality.name')
                    ->label('Speciality'),

                TextEntry::make('experience')
                    ->label('Experience (Years)')
                    ->numeric(),

                IconEntry::make('is_featured')
                    ->label('Featured')
                    ->boolean(),

                TextEntry::make('created_at')
                    ->label('Created At')
                    ->dateTime(),

                TextEntry::make('updated_at')
                    ->label('Updated At')
                    ->dateTime(),
            ]);
    }
}
