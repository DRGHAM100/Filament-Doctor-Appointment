<?php

namespace App\Filament\Doctor\Resources\Perscriptions\Pages;

use App\Filament\Doctor\Resources\Perscriptions\PerscriptionResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePerscription extends CreateRecord
{
    protected static string $resource = PerscriptionResource::class;
}
