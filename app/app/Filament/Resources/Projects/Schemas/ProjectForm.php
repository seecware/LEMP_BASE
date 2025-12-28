<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('conutry')
                    ->required(),
                TextInput::make('state')
                    ->required(),
                TextInput::make('municipality')
                    ->required(),
                TextInput::make('location')
                    ->required(),
            ]);
    }
}
