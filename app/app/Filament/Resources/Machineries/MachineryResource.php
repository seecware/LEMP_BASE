<?php

namespace App\Filament\Resources\Machineries;

use App\Filament\Resources\Machineries\Pages\CreateMachinery;
use App\Filament\Resources\Machineries\Pages\EditMachinery;
use App\Filament\Resources\Machineries\Pages\ListMachineries;
use App\Filament\Resources\Machineries\Pages\ViewMachinery;
use App\Filament\Resources\Machineries\Schemas\MachineryForm;
use App\Filament\Resources\Machineries\Schemas\MachineryInfolist;
use App\Filament\Resources\Machineries\Tables\MachineriesTable;
use App\Models\Machinery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MachineryResource extends Resource
{
    protected static ?string $model = Machinery::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'model';

    public static function form(Schema $schema): Schema
    {
        return MachineryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MachineryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MachineriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMachineries::route('/'),
            'create' => CreateMachinery::route('/create'),
            'view' => ViewMachinery::route('/{record}'),
            'edit' => EditMachinery::route('/{record}/edit'),
        ];
    }
}
