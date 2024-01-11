<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AxeResource\Pages;
use App\Filament\Resources\AxeResource\RelationManagers;
use App\Models\Axe;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class AxeResource extends Resource
{
    protected static ?string $model = Axe::class;

    protected static ?string $navigationGroup = "Axes d'accompagnement";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([TextInput::make('title')
                ->live(debounce: 2000)
                ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                    if (($get('slug') ?? '') !== Str::slug($old)) {
                        return;
                    }

                    $set('slug', Str::slug($state));
                }),

            TextInput::make('slug')->unique(ignorable: fn ($record) => $record),
            Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpanFull(),

            Forms\Components\RichEditor::make('content')
                ->required()
                ->columnSpanFull(),
            Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                ->collection('axes')
                ->preserveFilenames()
                ->required(),
                Forms\Components\Toggle::make('is_publish')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('images')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_publish')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAxes::route('/'),
            'create' => Pages\CreateAxe::route('/create'),
            'view' => Pages\ViewAxe::route('/{record}'),
            'edit' => Pages\EditAxe::route('/{record}/edit'),
        ];
    }
}
