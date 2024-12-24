<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;

use App\Models\Product;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;


class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    public static function getNavigationLabel(): string
    {
        return 'Услуги';
    }
    public static function getNavigationGroup(): string
    {
        return 'Карточки';
    }
    public static function getPluralLabel(): string
    {
        return 'Услуги';
    }
    protected static ?string $modelLabel = 'Услугу';
    protected static ?string $pluralModelLabel = 'Услуги';
    protected static ?string $recordTitleAttribute = "name";
    protected static ?string $navigationIcon = 'heroicon-o-document-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Tabs::make('Основная информация')->tabs([
                        Tabs\Tab::make('Основная информация')->schema([
                            Grid::make(2)->schema([
                                TextInput::make('name')
                                    ->label('Название услуги')
                                    ->placeholder('Консультация')
                                    ->maxLength(255)
                                    ->live()
                                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                                    ->required(),
                                TextInput::make('slug')
                                    ->label('URL')
                                    ->disabled()
                                    ->maxLength(255)
                                    ->dehydrated()
                                    ->unique(Product::class, 'slug', ignoreRecord: true)
                                    ->required(),
                                TextInput::make('title')
                                    ->label('Короткое описание услуги')
                                    ->placeholder('Профессиональные консультации по вопросам налогообложения')
                                    ->maxLength(255)
                                    ->required()
                                    ->columnSpan(2),
                                Textarea::make('description')
                                    ->label('Полное описание услуги')
                                    ->placeholder('Наша цель — обеспечить вам уверенность в вашей налоговой отчетности и помочь вашему бизнесу успешно развиваться. Закажите консультацию сегодня и сделайте шаг к эффективному управлению налогами!')
                                    ->required()
                                    ->rows(5)
                                    ->columnSpan(2),
                            ]),
                        ]),
                        Tabs\Tab::make('Meta-поля')->schema([
                            TextInput::make('meta_title')
                                ->label('Meta-заголовок')
                                ->placeholder('Налоговые консультации от Nalog Invest – Профессиональная помощь для ваc!')
                                ->required(),
                            TextInput::make('meta_keywords')
                                ->label('Meta-ключевые слова')
                                ->placeholder('налоговый консалтинг, налоговые консультации, оптимизация налогов, налогообложение, налоговые риски, консультации по налоговым вопросам, помощь в налогообложении, налоговое планирование, консультации для бизнеса, налоговые услуги')
                                ->required(),
                            Textarea::make('meta_description')
                                ->rows(5)
                                ->placeholder('Консультации от Nalog Invest помогут вашим финансам. Получите экспертные рекомендации по налоговому планированию, оптимизации налоговых обязательств и соблюдению законодательства. Мы сделаем всё, чтобы ваш бизнес процветал!')
                                ->required(),
                        ]),
                    ])->columnSpanFull(),
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make('Стоимость')->schema([
                        TextInput::make('price')
                            ->numeric()
                            ->placeholder('15000')
                            ->inputMode('decimal')
                            ->label('Стоимость услуги')
                            ->suffix('₽')
                            ->required(),
                    ])->columnSpanFull(),
                    Section::make('Статус услуги')->schema([
                        Toggle::make('is_active')
                            ->default(true)
                            ->label('Отображать на сайте'),
                    ])->columnSpanFull(),
                ])->columnSpan(1),
                Section::make('Подробное описание услуги')->schema([
                    Repeater::make('specifics')->label('')->schema([
                        TextInput::make('h1')
                            ->label('Заголовок')
                            ->placeholder('Анализ налоговой ситуации')
                            ->maxLength(255),
                        Textarea::make('h2')
                            ->label('Описание')
                            ->placeholder('Я предоставлю вам глубокий анализ вашей налоговой ситуации и предложить эффективные решения, соответствующие вашим уникальным потребностям.')
                            ->rows(5)
                            ->columnSpan(2),
                    ])->columnSpanFull(),
                ])->columnSpan(2),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Название услуги')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Стоимость услуги')
                    ->money('RUB')
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Статус')
                    ->sortable()
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                //
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
        ];
    }
}
