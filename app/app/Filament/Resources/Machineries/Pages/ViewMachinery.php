<?php

namespace App\Filament\Resources\Machineries\Pages;

use App\Filament\Resources\Machineries\MachineryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMachinery extends ViewRecord
{
    protected static string $resource = MachineryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
