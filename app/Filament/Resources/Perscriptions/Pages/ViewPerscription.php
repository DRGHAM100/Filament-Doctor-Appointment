<?php

namespace App\Filament\Resources\Perscriptions\Pages;

use App\Filament\Resources\Perscriptions\PerscriptionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPerscription extends ViewRecord
{
    protected static string $resource = PerscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
