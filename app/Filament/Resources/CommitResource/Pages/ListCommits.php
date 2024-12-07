<?php

namespace App\Filament\Resources\CommitResource\Pages;

use App\Filament\Resources\CommitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommits extends ListRecords
{
    protected static string $resource = CommitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
