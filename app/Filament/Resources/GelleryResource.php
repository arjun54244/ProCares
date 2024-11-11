<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GelleryResource\Pages;
use App\Filament\Resources\GelleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GelleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('title')->required(),
            FileUpload::make('attachments')
                ->label('Gallery Images')
                ->multiple()
                ->directory('galleries')
                ->image()
                ->storeFileNamesIn('attachments')
                ->maxFiles(10)
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')
            ->label('Title') // Set a custom label
            ->sortable() // Makes the column sortable
            ->searchable(), // Makes the column searchable
        ImageColumn::make('attachments')
            ->label('Gallery') // Display the gallery images in a column
            ->disk('public') // Define the storage disk
            ->sortable()
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
            'index' => Pages\ListGelleries::route('/'),
            'create' => Pages\CreateGellery::route('/create'),
            'edit' => Pages\EditGellery::route('/{record}/edit'),
        ];
    }
}
