<?php

namespace App\Filament\Resources\Perscriptions;

use App\Filament\Resources\Perscriptions\Pages\CreatePerscription;
use App\Filament\Resources\Perscriptions\Pages\EditPerscription;
use App\Filament\Resources\Perscriptions\Pages\ListPerscriptions;
use App\Filament\Resources\Perscriptions\Pages\ViewPerscription;
use App\Filament\Resources\Perscriptions\Schemas\PerscriptionForm;
use App\Filament\Resources\Perscriptions\Schemas\PerscriptionInfolist;
use App\Filament\Resources\Perscriptions\Tables\PerscriptionsTable;
use App\Models\Perscription;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PerscriptionResource extends Resource
{
    protected static ?string $model = Perscription::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PerscriptionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PerscriptionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PerscriptionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPerscriptions::route('/'),
            'create' => CreatePerscription::route('/create'),
            'view' => ViewPerscription::route('/{record}'),
            'edit' => EditPerscription::route('/{record}/edit'),
        ];
    }
}
