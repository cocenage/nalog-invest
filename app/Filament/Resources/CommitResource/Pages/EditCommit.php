<?php

namespace App\Filament\Resources\CommitResource\Pages;

use App\Filament\Resources\CommitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommit extends EditRecord
{
    protected static string $resource = CommitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
