<?php

namespace App\Filament\Doctor\Resources\Perscriptions\Pages;

use App\Filament\Doctor\Resources\Perscriptions\PerscriptionResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPerscription extends EditRecord
{
    protected static string $resource = PerscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
