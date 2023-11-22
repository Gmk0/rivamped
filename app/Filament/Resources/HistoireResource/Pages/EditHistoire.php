<?php

namespace App\Filament\Resources\HistoireResource\Pages;

use App\Filament\Resources\HistoireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistoire extends EditRecord
{
    protected static string $resource = HistoireResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
