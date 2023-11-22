<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RealisationResource\Pages;
use App\Filament\Resources\RealisationResource\RelationManagers;
use App\Models\Realisation;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;


class RealisationResource extends Resource
{
    protected static ?string $model = Realisation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Post & Realisation';

        public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->live(debounce: 2000)
                ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                    if (($get('slug') ?? '') !== Str::slug($old)) {
                        return;
                    }

                    $set('slug', Str::slug($state));
                }),

            TextInput::make('slug'),
            Forms\Components\Textarea::make('description')
                ->maxLength(65535)
                ->columnSpanFull(),
            //Forms\Components\TextInput::make('tags'),
            TiptapEditor::make('content')
            ->profile('simple')
                //->tools([]) // individual tools to use in the editor, overwrites profile
                ->disk('local') // optional, defaults to config setting
                ->directory('attachement') // optional, defaults to config setting
                //->acceptedFileTypes(['']) // optional, defaults to config setting
                ->maxFileSize('10000') // optional, defaults to config setting
                ->output(TiptapOutput::Html) // optional, change the format for saved data, default is html
                // ->maxContentWidth('5xl')

                ->required()
                ->columnSpanFull(),

             Forms\Components\Toggle::make('is_publish')
                    ->required(),
                     SpatieMediaLibraryFileUpload::make('images')
            ->collection('Realisation'),

                Forms\Components\DateTimePicker::make('published_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->words(20),


            Tables\Columns\TextColumn::make('description')
                ->limit(100)
                ->wrap(),

                Tables\Columns\IconColumn::make('is_publish')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListRealisations::route('/'),
            'create' => Pages\CreateRealisation::route('/create'),
            'view' => Pages\ViewRealisation::route('/{record}'),
            'edit' => Pages\EditRealisation::route('/{record}/edit'),
        ];
    }
}
