<?php

namespace App\Filament\Resources\Jabatans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class JabatanForm
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
