<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Camya\Filament\Forms\Components\TitleWithSlugInput;


class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationGroup = 'Articles and Pages';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $activeNavigationIcon = 'heroicon-s-document-text';
    
    protected static ?string $navigationLabel = 'Pages';
    
    protected static ?int $navigationSort = 3;

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 0 ? 'warning' : 'primary';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TitleWithSlugInput::make(
                    fieldTitle: 'name', 
                    fieldSlug: 'slug', 
                    urlPath: '/',
                    urlVisitLinkLabel: 'Visit Book',
                    titleLabel: 'Title',
                    titlePlaceholder: 'Insert the title...',
                    slugLabel: 'Link:',
                ),
                // Forms\Components\TextInput::make('name')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('slug')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\TextInput::make('featured_image')
                    ->maxLength(255),
              
                \Ekremogul\FilamentGrapesjs\Forms\Components\GrapesJs::make('body'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('featured_image'),
                Tables\Columns\TextColumn::make('body'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }    
}
