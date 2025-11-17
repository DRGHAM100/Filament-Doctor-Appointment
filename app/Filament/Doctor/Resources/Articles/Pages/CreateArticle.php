<?php

namespace App\Filament\Doctor\Resources\Articles\Pages;

use App\Filament\Doctor\Resources\Articles\ArticleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
}
