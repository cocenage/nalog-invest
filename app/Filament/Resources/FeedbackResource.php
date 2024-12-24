<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;
    public static function getNavigationLabel(): string
    {
        return 'Обратная связь';
    }

    public static function getPluralLabel(): string
    {
        return 'Обратная связь';
    }
    public static function getNavigationGroup(): string
    {
        return 'Обратная связь';
    }
    protected static ?string $recordTitleAttribute = "name";
    protected static ?string $navigationIcon = 'heroicon-o-envelope-open';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Заявка')->schema([
                    TextInput::make('name')
                        ->label('Имя')
                        ->maxLength(255),
                    TextInput::make('mail')
                        ->maxLength(255)
                        ->label('Почта'),
                    Textarea::make('description')
                        ->label('Комментарий'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Имя')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('mail')
                    ->label('Почта')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Сообщение')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListFeedback::route('/'),
            'create' => Pages\CreateFeedback::route('/create'),
            'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
