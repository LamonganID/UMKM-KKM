<?php

namespace App\Filament\Resources\StudiesResource\Pages;

use App\Filament\Resources\StudiesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudies extends ListRecords
{
    protected static string $resource = StudiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
