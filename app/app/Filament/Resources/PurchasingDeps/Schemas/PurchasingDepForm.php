<?php

namespace App\Filament\Resources\PurchasingDeps\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PurchasingDepForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('purchase_code')
                    ->required(),
            ]);
    }
}
