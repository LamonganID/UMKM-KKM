<?php

namespace App\Filament\Resources\StudiesResource\Pages;

use App\Filament\Resources\StudiesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudies extends EditRecord
{
    protected static string $resource = StudiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
