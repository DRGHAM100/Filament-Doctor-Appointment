<?php

namespace App\Filament\Doctor\Resources\Perscriptions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PerscriptionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('doctor.id')
                    ->numeric(),
                TextEntry::make('patient.id')
                    ->numeric(),
                TextEntry::make('medication_name'),
                TextEntry::make('dosage'),
                TextEntry::make('frequency'),
                TextEntry::make('start_date')
                    ->date(),
                TextEntry::make('end_date')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
