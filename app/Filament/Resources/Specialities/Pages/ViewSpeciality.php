<?php

namespace App\Filament\Resources\Specialities\Pages;

use App\Filament\Resources\Specialities\SpecialityResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSpeciality extends ViewRecord
{
    protected static string $resource = SpecialityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
