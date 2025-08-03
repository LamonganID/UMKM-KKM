<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Photos;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PhotosResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PhotosResource\RelationManagers;

class PhotosResource extends Resource
{
    protected static ?string $model = Photos::class;
    protected static ?string $navigationLabel = 'Foto';

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('caption')
                    ->label('Caption')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('photo_path')
                    ->directory('photos/photo_path')
                    ->visibility('public')
                    ->image()
                    ->imagePreviewHeight(150)
                    ->imageResizeMode('cover')
                    ->maxSize(2048)
                    ->label('Foto'),
            ])->columns(1);
    }
public static function table(Table $table): Table
{
    return $table
        ->columns([
            //
            TextColumn::make('caption')
                ->label('Keterangan')
                ->searchable()
                ->sortable(),
            ImageColumn::make('photo_path')
                ->label('Foto')
                ->disk('public')
                ->height(50)
                ->width(50)
                ->square()
                ->defaultImageUrl(asset('storage/no-image.png')),
            TextColumn::make('created_at')
                ->label('Tanggal Dibuat')
                ->dateTime()
                ->sortable(),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListPhotos::route('/'),
            'create' => Pages\CreatePhotos::route('/create'),
            'edit' => Pages\EditPhotos::route('/{record}/edit'),
        ];
    }
}
