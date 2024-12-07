<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainResource\Pages;
use App\Filament\Resources\MainResource\RelationManagers;
use App\Models\Main;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\ValidationException;

class MainResource extends Resource
{
    protected static ?string $model = Main::class;

    public static function getNavigationLabel(): string
    {
        return 'Как мы работаем';
    }
    public static function getNavigationGroup(): string
    {
        return 'Страницы';
    }
    public static function getPluralLabel(): string
    {
        return 'Как мы работаем';
    }
    protected static ?string $modelLabel = 'Как мы работаем';
    protected static ?string $pluralModelLabel = 'Как мы работаем';

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Описание блока')->schema([
                FileUpload::make('image')
                ->image()
                ->directory('/about/images')
                ->required(),
                Repeater::make('specifics')->label('')->schema([
                    TextInput::make('h1')
                        ->label('Заголовок')
                        ->placeholder('Первичная консультация')
                        ->maxLength(255),
                        Textarea::make('h2')
                        ->label('Заголовок')
                        ->placeholder('На первом этапе мы проводим детальную консультацию, в ходе которой изучаем вашу текущую налоговую ситуацию, определяем ключевые задачи и выявляем ваши ожидания. Этот этап помогает нам лучше понять ваши цели и потребности.')
                        ->maxLength(255),
                ])->columnSpanFull(),
        ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('custom')
                ->label('Редактирование блока "Как мы работаем"')
                ->getStateUsing(fn($record) => 'Как мы работае')
                ->sortable(false),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

            ])
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
            'index' => Pages\ListMains::route('/'),
            'create' => Pages\CreateMain::route('/create'),
            'edit' => Pages\EditMain::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return Main::count() === 0;
    }
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        // Проверка на наличие записи
        if (Main::exists()) {
            throw ValidationException::withMessages([
                'global' => 'Настройки сайта уже существуют. Вы можете редактировать существующую запись.',
            ]);
        }
        return $data;
    }
}
