<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\ValidationException;
use App\Filament\Resources\SiteSetting;
use Filament\Forms\Components\RichEditor;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    public static function getNavigationLabel(): string
    {
        return 'Обо мне';
    }
    public static function getNavigationGroup(): string
    {
        return 'Страницы';
    }
    public static function getPluralLabel(): string
    {
        return 'Обо мне';
    }
    protected static ?string $modelLabel = 'Обо мне';
    protected static ?string $pluralModelLabel = 'Обо мне';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Подробное описание услуги')->schema([
                    FileUpload::make('image')
                        ->image()
                        ->directory('/about/images')
                        ->required()
                ])->columnSpanFull(),
                Section::make('Подробное описание услуги')->schema([
                    Repeater::make('specifics')->label('')->schema([
                        TextInput::make('h1')
                            ->label('Заголовок')
                            ->placeholder('Анализ налоговой ситуации')
                            ->maxLength(255),
                            RichEditor::make('h2')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                                ])
                            ->label('Описание')
                            ->placeholder('Я предоставлю вам глубокий анализ вашей налоговой ситуации и предложить эффективные решения, соответствующие вашим уникальным потребностям.')
                            ->columnSpan(3),
                    ])->columnSpanFull(),
                ])->columnSpanFull(),
                Section::make('Подробное описание услуги')->schema([
                    TextInput::make('name')
                        ->label('Заголовок')
                        ->placeholder('Анализ налоговой ситуации')
                        ->maxLength(255),
                    Repeater::make('statistics')->label('')->schema([
                        TextInput::make('h3')
                            ->label('Заголовок')
                            ->placeholder('Анализ налоговой ситуации')
                            ->maxLength(255),
                        TextInput::make('h4')
                            ->label('Описание')
                            ->placeholder('Я предоставлю вам глубокий анализ вашей налоговой ситуации и предложить эффективные решения, соответствующие вашим уникальным потребностям.')
                            ->columnSpan(3),
                    ])->columnSpanFull(),
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                Tables\Columns\TextColumn::make('custom')
                    ->label('Редактирование страницы')
                    ->getStateUsing(fn($record) => 'Обо мне')
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return About::count() === 0;
    }
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        // Проверка на наличие записи
        if (About::exists()) {
            throw ValidationException::withMessages([
                'global' => 'Настройки сайта уже существуют. Вы можете редактировать существующую запись.',
            ]);
        }
        return $data;
    }
}
