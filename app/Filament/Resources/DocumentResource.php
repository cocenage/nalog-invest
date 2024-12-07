<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Filament\Resources\DocumentResource\RelationManagers;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use AppModelsDocument;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    public static function getNavigationLabel(): string
    {
        return 'Документы';
    }
    public static function getNavigationGroup(): string
    {
        return 'Контакты и документы';
    }
    public static function getPluralLabel(): string
    {
        return 'Документы';
    }
    protected static ?string $modelLabel = 'Документы';
    protected static ?string $pluralModelLabel = 'Документы';
    protected static ?string $recordTitleAttribute = "name";

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Документ')->schema([
                    TextInput::make('name')
                        ->label('Название документа')
                        ->placeholder('Политика конфиденциальности ')
                        ->maxLength(255)
                        ->required()
                        ->columnSpan(2),
                    FileUpload::make('path')
                        ->label('Загрузить документ')
                        ->required()
                        ->preserveFilenames()
                        ->storeFileNamesIn('name')
                        ->directory('documents')
                        ->disk('public'),

                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Название документа'),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }


    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
        ];
    }
}
