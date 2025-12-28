<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('sku')
                    ->label('SKU')
                    ->required(),
                TextInput::make('barcode')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('notes')
                    ->required(),
                TextInput::make('max_inventory')
                    ->required()
                    ->numeric(),
                TextInput::make('min_inventory')
                    ->required()
                    ->numeric(),
            ]);
    }
}
