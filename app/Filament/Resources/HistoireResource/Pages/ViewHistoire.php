<?php

namespace App\Filament\Resources\HistoireResource\Pages;

use App\Filament\Resources\HistoireResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHistoire extends ViewRecord
{
    protected static string $resource = HistoireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
