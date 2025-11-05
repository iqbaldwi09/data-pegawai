<?php

namespace App\Filament\Resources\Pegawais\Tables;

use App\Models\Pegawai;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PegawaisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->query(Pegawai::with(['jabatan', 'divisi'])) 
            ->columns([
                TextColumn::make('nama')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('no_telp')->searchable(),
                TextColumn::make('jabatan.nama')->searchable(),
                TextColumn::make('divisi.nama')->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
