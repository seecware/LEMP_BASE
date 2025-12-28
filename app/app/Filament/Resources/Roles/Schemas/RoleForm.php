<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                Select::make('departament_id')
                    ->relationship('departament', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('hierarchy')
                    ->required()
                    ->numeric(),
                TextInput::make('salary')
                    ->required()
                    ->numeric(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('rank')
                    ->required()
                    ->numeric(),
                TextInput::make('permissions_group')
                    ->required()
                    ->numeric(),
                Toggle::make('can_approve_machinery_assignations')
                    ->required(),
                Toggle::make('can_approve_projects')
                    ->required(),
                Toggle::make('active')
                    ->required(),
                TextInput::make('status')
                    ->required(),
            ]);
    }
}
