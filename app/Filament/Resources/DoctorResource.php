<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoctorResource\Pages;
use App\Filament\Resources\DoctorResource\RelationManagers;
use App\Models\Doctor;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DoctorResource extends Resource
{
    protected static ?string $model = Doctor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email'),
                TextInput::make('phone'),
                TextInput::make('experience')->numeric(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('doctors'),
                TextInput::make('position'),
                Textarea::make('specialization'),
                RichEditor::make('description')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'table',
                        'undo',
                        'underline',
                        'alignment',
                        'color',
                        'backgroundColor',
                        'indent',
                        'outdent',
                        'blockType',
                    ])
                    ->columnSpan('full'),
                Repeater::make('location')
                    ->schema([
                        TextInput::make('name')
                            ->label('Clinic Name')
                            ->required(),
                        TextInput::make('address')
                            ->label('Address')
                            ->required(),
                        TextInput::make('map')
                            ->label('Google Map Link')
                            ->required()
                            ->url(),
                        FileUpload::make('mapimg')
                            ->label('Map Image')
                            ->image()
                            ->disk('public')
                            ->directory('doctors')
                            ->maxSize(2048),
                        Repeater::make('times')
                            ->schema([
                                TextInput::make('day')
                                    ->label('days')->default('Monday to Saturday')
                                    ->required(),
                                TextInput::make('time')
                                    ->label('time')->default('09:00 AM - 05:00 PM')
                                    ->required(),
                            ])
                    ])
                    ->columnSpan('full')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('experience')->label('Experience'),
                ImageColumn::make('image')->disk('public')->width(50)->height(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }
}
