<?php

namespace App\Filament\Resources\Pegawais\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use App\Models\Jabatan;
use App\Models\Divisi;

class PegawaiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Section::make()
                    ->schema([
                        TextInput::make('nama')->required(),
                        TextInput::make('email')->required()->email()->unique(),
                        TextInput::make('no_telp')->required()->tel()->label('No. Handphone')->rules('regex:/^08[1-9][0-9]{6,11}$/')->maxLength(13),
                        DatePicker::make('tgl_lahir')->label('Tanggal Lahir')->displayFormat('d/m/Y')->required(),
                        Select::make('jenis_kelamin')->label('Jenis Kelamin')->required()->options(['L' => 'Laki-laki', 'P' => 'Perempuan',])->placeholder('Pilih Jenis Kelamin'),
                        Select::make('id_jabatan')->label('Jabatan')->required()->options(Jabatan::all()->pluck('nama', 'id'))->placeholder('Pilih Jabatan')->searchable(),
                        Select::make('id_divisi')->label('Divisi')->required()->options(Divisi::all()->pluck('nama', 'id'))->placeholder('Pilih Divisi')->searchable()
                    ])
                    ->columns(2)
                    ->columnSpan(12),
            ]);
    }
}
