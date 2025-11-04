<?php

namespace App\Filament\Resources\Perscriptions\Pages;

use App\Filament\Resources\Perscriptions\PerscriptionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPerscriptions extends ListRecords
{
    protected static string $resource = PerscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
