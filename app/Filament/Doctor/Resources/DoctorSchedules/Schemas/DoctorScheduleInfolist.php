<?php

namespace App\Filament\Doctor\Resources\DoctorSchedules\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DoctorScheduleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('doctor.user.name')
                    ->numeric(),
                TextEntry::make('available_day')
                    ->numeric()
                    ->formatStateUsing(function ($state) {
                        return [
                            '1' => 'Sunday',
                            '2' => 'Monday',
                            '3' => 'Tuesday',
                            '4' => 'Wednesday',
                            '5' => 'Thursday',
                            '6' => 'Friday',
                            '7' => 'Saturday',
                        ][$state] ?? '-';
                    }),
                TextEntry::make('from')
                    ->time(),
                TextEntry::make('to')
                    ->time(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
