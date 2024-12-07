<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Filament\Resources\PartnerResource\RelationManagers;
use App\Models\Partner;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;


    public static function getNavigationLabel(): string
    {
        return 'Партнёры';
    }
    public static function getNavigationGroup(): string
    {
        return 'Карточки';
    }
    public static function getPluralLabel(): string
    {
        return 'Партнёры';
    }
    protected static ?string $modelLabel = 'Партнёры';
    protected static ?string $pluralModelLabel = 'Партнёры';
    protected static ?string $recordTitleAttribute = "name";
    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Партнёр')->schema([
                    Grid::make(2)->schema([
                        TextInput::make('name')
                            ->label('Фио')
                            ->placeholder('Александр Игнатов')
                            ->maxLength(255)
                            ->columnSpan(2)
                            ->required(),

                        TextInput::make('title')
                            ->label('Должность')
                            ->placeholder('Финансовый консультант')
                            ->maxLength(255)
                            ->columnSpan(2)
                            ->required(),

                        TextInput::make('description')
                            ->label('Описание вида деятельности')
                            ->placeholder('Александр Игнатов - финансовый консультант по инвестициям в Долларах и Евро. Иностранные карты, валютные депозиты.')
                            ->maxLength(255)
                            ->columnSpan(2)
                            ->required(),


                        TextInput::make('name_link')
                            ->label('Социальная сеть')
                            ->placeholder('@Ignatov_as')
                            ->maxLength(255)
                            ->required(),

                        TextInput::make('link')
                            ->label('Ссылка на социальную сеть')
                            ->placeholder('https://telegram.me/ignatov_as')
                            ->maxLength(255)
                            ->required(),

                        FileUpload::make('image')
                            ->image()
                            ->directory('/about/partners')
                            ->columnSpan(2)
                            ->required(),
                    ])
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
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([])
            ->paginated(false);
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }


    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
        ];
    }
}
