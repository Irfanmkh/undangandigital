<?php

namespace App\Filament\Resources\GuestsResource\Pages;

use App\Filament\Resources\GuestsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGuests extends ManageRecords
{
    protected static string $resource = GuestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
