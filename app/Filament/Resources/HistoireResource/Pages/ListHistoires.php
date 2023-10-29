<?php

namespace App\Filament\Resources\HistoireResource\Pages;

use App\Filament\Resources\HistoireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistoires extends ListRecords
{
    protected static string $resource = HistoireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
