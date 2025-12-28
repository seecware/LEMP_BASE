<?php

namespace App\Filament\Resources\Personals\Schemas;

use App\Models\Enums\GenderEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PersonalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('lastname')
                    ->required(),
                TextInput::make('curp')
                    ->required(),
                TextInput::make('nss')
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Select::make('gender')
                    ->options(GenderEnum::class)
                    ->required(),
                Select::make('role_id')
                    ->relationship('role', 'name')
                    ->required(),
            ]);
    }
}
