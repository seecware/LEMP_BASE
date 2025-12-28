<?php

namespace App\Filament\Resources\Machineries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MachineryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('eco'),
                TextEntry::make('serial'),
                TextEntry::make('brand')
                    ->badge(),
                TextEntry::make('model'),
                TextEntry::make('description')
                    ->placeholder('-'),
                TextEntry::make('horometer')
                    ->numeric(),
                TextEntry::make('model_year')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
