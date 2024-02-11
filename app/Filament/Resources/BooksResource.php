<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BooksResource\Pages;
use App\Filament\Resources\BooksResource\RelationManagers;
use App\Models\Books;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Closure;

class BooksResource extends Resource
{
    protected static ?string $model = Books::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('writer')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('size_book')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('book_page')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('years')
                    ->numeric(),
                Forms\Components\TextInput::make('isbn')
                    ->maxLength(255)
                    ->label('ISBN'),
                Forms\Components\Grid::make(1)
                    ->schema([
                        Forms\Components\Select::make('tag')
                            ->options([
                                '1' => 'New Books',
                                '2' => 'Coming Soon',
                                '3' => 'Old Books',
                            ]),
                    ]),
                Forms\Components\Grid::make(1)
                    ->schema([
                        Forms\Components\FileUpload::make('image_featured')
                            ->label('Upload Image')
                            ->disk('public')
                            ->image()
                            ->reactive()
                            ->directory('post-images'),
                    ]),
                Forms\Components\Grid::make(1)
                    ->schema([
                        Forms\Components\Textarea::make('desc')
                            ->minLength(2)
                            ->maxLength(1024)
                            ->autosize(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('writer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('size_book')
                    ->searchable(),
                Tables\Columns\TextColumn::make('book_page')
                    ->searchable(),
                Tables\Columns\TextColumn::make('years')
                    ->searchable(),
                Tables\Columns\TextColumn::make('isbn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('image_featured'),
                Tables\Columns\TextColumn::make('desc')
                    ->searchable()
                    ->limit(1000),
                Tables\Columns\TextColumn::make('tag')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBooks::route('/create'),
            'edit' => Pages\EditBooks::route('/{record}/edit'),
        ];
    }
}