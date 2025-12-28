<?php

namespace App\Filament\Resources\PurchasingDeps;

use App\Filament\Resources\PurchasingDeps\Pages\CreatePurchasingDep;
use App\Filament\Resources\PurchasingDeps\Pages\EditPurchasingDep;
use App\Filament\Resources\PurchasingDeps\Pages\ListPurchasingDeps;
use App\Filament\Resources\PurchasingDeps\Schemas\PurchasingDepForm;
use App\Filament\Resources\PurchasingDeps\Tables\PurchasingDepsTable;
use App\Models\PurchasingDep;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PurchasingDepResource extends Resource
{
    protected static ?string $model = PurchasingDep::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'purchase_code';

    public static function form(Schema $schema): Schema
    {
        return PurchasingDepForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PurchasingDepsTable::configure($table);
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
            'index' => ListPurchasingDeps::route('/'),
            'create' => CreatePurchasingDep::route('/create'),
            'edit' => EditPurchasingDep::route('/{record}/edit'),
        ];
    }
}
