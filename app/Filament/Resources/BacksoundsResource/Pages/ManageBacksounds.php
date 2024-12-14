<?php

namespace App\Filament\Resources\BacksoundsResource\Pages;

use App\Filament\Resources\BacksoundsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBacksounds extends ManageRecords
{
    protected static string $resource = BacksoundsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
