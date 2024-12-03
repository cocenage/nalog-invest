<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
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
use Illuminate\Validation\ValidationException;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    public static function getNavigationLabel(): string
    {
        return 'Контакты';
    }
    public static function getNavigationGroup(): string
    {
        return 'Контакты';
    }
    public static function getPluralLabel(): string
    {
        return 'Контакты';
    }
    protected static ?string $modelLabel = 'Контакты';
    protected static ?string $pluralModelLabel = 'Контакты';
    protected static ?string $recordTitleAttribute = "name";

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Контакты')->schema([
                    Grid::make(2)->schema([
                        TextInput::make('tel')
                            ->label('Номер телефона')
                            ->placeholder('+7 (922) 442-98-08')
                            ->maxLength(255)
                            ->required(),

                        TextInput::make('tel_link')
                            ->label('Ссылка на номер телефона')
                            ->placeholder('+79224229808')
                            ->maxLength(255)
                            ->required()
                            ->helperText('Обязательно указать как на примере'),

                        TextInput::make('mail')
                            ->label('Почта')
                            ->placeholder('info@nalog-invest.ru')
                            ->maxLength(255)
                            ->required()
                            ->columnSpan(2),
                        TextInput::make('tg')
                            ->label('Телеграм')
                            ->placeholder('@katerina_inv_nalog')
                            ->maxLength(255)
                            ->required(),

                        TextInput::make('tg_link')
                            ->label('Ссылка на телеграм')
                            ->placeholder('https://t.me/katerina_inv_nalog')
                            ->maxLength(255)
                            ->required()
                    ]),
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tel')
                    ->label('Номер телефона')
                    ->sortable()
                    ->searchable(),
                    TextColumn::make('mail')
                    ->label('Почта')
                    ->sortable()
                    ->searchable(),
                    TextColumn::make('tg')
                    ->label('Телеграм')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'tel',
            'mail',
            'tg',
        ];
    }
    public static function canCreate(): bool
    {
        return Contact::count() === 0;
    }
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        // Проверка на наличие записи
        if (Contact::exists()) {
            throw ValidationException::withMessages([
                'global' => 'Настройки сайта уже существуют. Вы можете редактировать существующую запись.',
            ]);
        }

        return $data;
    }
}
