<?php

namespace App\Filament\Resources\Machineries\Pages;

use App\Filament\Resources\Machineries\MachineryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMachineries extends ListRecords
{
    protected static string $resource = MachineryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
