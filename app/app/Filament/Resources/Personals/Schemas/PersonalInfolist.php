<?php

namespace App\Filament\Resources\Personals\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PersonalInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('lastname'),
                TextEntry::make('curp'),
                TextEntry::make('nss'),
                TextEntry::make('phone_number'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('gender')
                    ->badge(),
                TextEntry::make('role_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
