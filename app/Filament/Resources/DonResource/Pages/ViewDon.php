<?php

namespace App\Filament\Resources\DonResource\Pages;

use App\Filament\Resources\DonResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDon extends ViewRecord
{
    protected static string $resource = DonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
