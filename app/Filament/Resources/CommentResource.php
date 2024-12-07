<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\ValidationException;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    public static function getNavigationLabel(): string
    {
        return 'Комментарии';
    }
    public static function getNavigationGroup(): string
    {
        return 'Карточки';
    }
    public static function getPluralLabel(): string
    {
        return 'Комментарии';
    }
    protected static ?string $modelLabel = 'Комментарии';
    protected static ?string $pluralModelLabel = 'Комментарии';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Комментарии')->schema([
                    Tabs::make('Основная информация')->tabs([
                        Tabs\Tab::make('Первый комментарий')->schema([
                            Grid::make(2)->schema([
                                TextInput::make('name')
                                ->label('Фио')
                                ->placeholder('Александр Игнатов')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            TextInput::make('title')
                                ->label('Должность')
                                ->placeholder('Финансовый консультант')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            TextInput::make('description')
                                ->label('Описание вида деятельности')
                                ->placeholder('Александр Игнатов - финансовый консультант по инвестициям в Долларах и Евро. Иностранные карты, валютные депозиты.')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            FileUpload::make('image')
                                ->image()
                                ->directory('/about/comments')
                                ->required(),
                        ]),

                        ]),
                        Tabs\Tab::make('Второй комментарий')->schema([
                            TextInput::make('name2')
                                ->label('Фио')
                                ->placeholder('Александр Игнатов')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            TextInput::make('title2')
                                ->label('Должность')
                                ->placeholder('Финансовый консультант')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            TextInput::make('description2')
                                ->label('Описание вида деятельности')
                                ->placeholder('Александр Игнатов - финансовый консультант по инвестициям в Долларах и Евро. Иностранные карты, валютные депозиты.')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            FileUpload::make('image2')
                                ->image()
                                ->directory('/about/comments')
                                ->required(),



                        ]),
                        Tabs\Tab::make('Третий комментарий')->schema([
                            TextInput::make('name3')
                                ->label('Фио')
                                ->placeholder('Александр Игнатов')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            TextInput::make('title3')
                                ->label('Должность')
                                ->placeholder('Финансовый консультант')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            TextInput::make('description3')
                                ->label('Описание вида деятельности')
                                ->placeholder('Александр Игнатов - финансовый консультант по инвестициям в Долларах и Евро. Иностранные карты, валютные депозиты.')
                                ->maxLength(255)
                                ->required()
                                ->columnSpan(2),
                            FileUpload::make('image3')
                                ->image()
                                ->directory('/about/comments')
                                ->required(),



                        ]),

                    ]),
                ])->columnSpanFull(),


            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('custom')
                ->label('Редактирование отзывов')
                ->getStateUsing(fn($record) => 'Отзывы')
                ->sortable(false),
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function canCreate(): bool
    {
        return Comment::count() === 0;
    }
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        // Проверка на наличие записи
        if (Comment::exists()) {
            throw ValidationException::withMessages([
                'global' => 'Настройки сайта уже существуют. Вы можете редактировать существующую запись.',
            ]);
        }
        return $data;
    }
}
