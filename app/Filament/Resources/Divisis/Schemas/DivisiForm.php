<?php

namespace App\Filament\Resources\Divisis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class DivisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Section::make()
                    ->schema([
                        TextInput::make('nama')->required(),
                    ])
                    ->columns(1)
                    ->columnSpan(12),
            ]);
    }
}
