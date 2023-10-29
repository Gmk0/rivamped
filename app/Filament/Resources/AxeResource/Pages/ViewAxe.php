<?php

namespace App\Filament\Resources\AxeResource\Pages;

use App\Filament\Resources\AxeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAxe extends ViewRecord
{
    protected static string $resource = AxeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
