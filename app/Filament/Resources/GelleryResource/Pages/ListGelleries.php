<?php

namespace App\Filament\Resources\GelleryResource\Pages;

use App\Filament\Resources\GelleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGelleries extends ListRecords
{
    protected static string $resource = GelleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
