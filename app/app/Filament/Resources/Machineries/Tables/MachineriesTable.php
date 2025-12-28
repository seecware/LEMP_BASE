<?php

namespace App\Filament\Resources\Machineries\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MachineriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('eco')
                    ->searchable(),
                TextColumn::make('serial')
                    ->searchable(),
                TextColumn::make('brand')
                    ->badge()
                    ->searchable(),
                TextColumn::make('model')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                TextColumn::make('horometer')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('model_year')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
