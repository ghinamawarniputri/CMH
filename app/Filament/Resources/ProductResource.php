<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;
use App\Models\Category;
use Filament\Support\RawJs;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationLabel = 'Produk';

    protected static ?string $modelLabel = 'Produk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('name')
                        ->label('Nama')
                        ->rules(['required']),

                    Select::make('category_id')
                        ->label('Kategori')
                        ->options(Category::all()->pluck('name', 'id'))
                        ->rules(['required']),

                    TextInput::make('price')
                        ->label('Harga')
                        ->prefix('Rp')
                        ->mask(RawJs::make('$money($input)'))
                        ->stripCharacters(',')
                        ->numeric()
                        ->rules(['required']),

                    TextInput::make('shopee_link')
                        ->label('Tautan Shoppe')
                        ->rules(['required']),

                    FileUpload::make('images')
                        ->label('Gambar')
                        ->required()
                        ->columns(1)
                        ->directory('products')
                        ->storeFileNamesIn('attachment_file_names')
                        ->image()
                        ->maxSize(1024)
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                            '4:3',
                            '1:1',
                        ]),

                    Textarea::make('whatsapp_default_message')
                        ->label('Pesan Bawaan Whatsapp')
                        ->rows(3),

                    Checkbox::make('visibility')
                        ->label('Status Dilihat'),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),

                ImageColumn::make('images')
                    ->label('Gambar'),

                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('price')
                    ->label('Harga')
                    ->numeric(
                        decimalPlaces: 0,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->prefix('Rp')
                    ->sortable()
                    ->searchable()
                    ->alignEnd(),

                TextColumn::make('shopee_link')
                    ->label('Tautan Shopee')
                    ->limit(50)
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('whatsapp_default_message')
                    ->label('Pesan Bawaan Whatsapp')
                    ->limit(50)
                    ->searchable()
                    ->placeholder('Tidak ada pesan bawaan.')
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('visibility')
                    ->label('Status Dilihat')
                    ->boolean()
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            // 'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
