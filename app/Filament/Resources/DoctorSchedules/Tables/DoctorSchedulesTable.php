<?php

namespace App\Filament\Resources\DoctorSchedules\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DoctorSchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('doctor.user.name')
                    ->label('Doctor'),
                TextColumn::make('available_day')
                    ->sortable()
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
                TextColumn::make('from')
                    ->time()
                    ->sortable(),
                TextColumn::make('to')
                    ->time()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
