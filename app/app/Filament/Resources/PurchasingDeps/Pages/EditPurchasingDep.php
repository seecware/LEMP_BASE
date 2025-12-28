<?php

namespace App\Filament\Resources\PurchasingDeps\Pages;

use App\Filament\Resources\PurchasingDeps\PurchasingDepResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPurchasingDep extends EditRecord
{
    protected static string $resource = PurchasingDepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
