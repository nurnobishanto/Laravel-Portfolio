<?php

namespace App\Filament\Resources\PortfolioCategoryResource\Pages;

use App\Filament\Resources\PortfolioCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioCategories extends ListRecords
{
    protected static string $resource = PortfolioCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
