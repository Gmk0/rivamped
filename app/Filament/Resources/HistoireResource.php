<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoireResource\Pages;
use App\Filament\Resources\HistoireResource\RelationManagers;
use App\Models\Histoire;
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

class HistoireResource extends Resource
{
    protected static ?string $model = Histoire::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Nos Histoires';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                TextInput::make('title')
                    ->live(debounce: 1000)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
            ->unique(ignorable: fn ($record) => $record)
                ->required(),
            Forms\Components\Textarea::make('description')
                ->columnSpanFull(),

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


            Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                ->collection('stories')
                ->multiple()
                ->preserveFilenames()
                ->required(),

            Forms\Components\Toggle::make('is_publish')
                    ->required(),
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
            Tables\Columns\ImageColumn::make('image')
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
            'index' => Pages\ListHistoires::route('/'),
            'create' => Pages\CreateHistoire::route('/create'),
            'view' => Pages\ViewHistoire::route('/{record}'),
            'edit' => Pages\EditHistoire::route('/{record}/edit'),
        ];
    }
}
