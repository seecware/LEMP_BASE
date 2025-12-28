<?php

namespace App\Filament\Resources\PurchasingDeps\Pages;

use App\Filament\Resources\PurchasingDeps\PurchasingDepResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPurchasingDeps extends ListRecords
{
    protected static string $resource = PurchasingDepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
