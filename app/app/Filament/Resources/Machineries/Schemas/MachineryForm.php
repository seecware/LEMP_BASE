<?php

namespace App\Filament\Resources\Machineries\Schemas;

use App\Models\Enums\MachineryBrandEnum;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MachineryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('eco')
                    ->required(),
                TextInput::make('serial')
                    ->required(),
                Select::make('brand')
                    ->options(MachineryBrandEnum::class)
                    ->required(),
                TextInput::make('model')
                    ->required(),
                TextInput::make('description'),
                TextInput::make('horometer')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('model_year')
                    ->time(false)
                    ->placeholder('Click here and slect date')
                    ->native(false)
                    ->seconds(false)
                    ->required(),
            ]);
    }
}
