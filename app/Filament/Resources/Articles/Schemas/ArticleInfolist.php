<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Components\Section;

class ArticleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Article Information')
                    ->columns(2)
                    ->schema([

                        TextEntry::make('title')
                            ->label('Title'),

                        TextEntry::make('author.name')
                            ->label('Author'),

                        TextEntry::make('category')
                            ->label('Category'),

                        ImageEntry::make('image')
                            ->label('Image')
                            ->size(120),

                        TextEntry::make('status'),

                        TextEntry::make('views')
                            ->numeric(),

                        TextEntry::make('likes')
                            ->numeric(),

                        TextEntry::make('created_at')
                            ->dateTime(),

                        TextEntry::make('updated_at')
                            ->dateTime(),
                    ]),
            ]);
    }
}
