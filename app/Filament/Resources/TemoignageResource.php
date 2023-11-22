<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemoignageResource\Pages;
use App\Filament\Resources\TemoignageResource\RelationManagers;
use App\Models\Temoignage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
//use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;

class TemoignageResource extends Resource
{
    protected static ?string $model = Temoignage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Pages administration';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               TiptapEditor::make('content')
                ->profile('simple')
                //->tools([]) // individual tools to use in the editor, overwrites profile
                ->disk('local') // optional, defaults to config setting
                ->directory('attachement') // optional, defaults to config setting
                //->acceptedFileTypes(['']) // optional, defaults to config setting
                ->maxFileSize('10000') // optional, defaults to config setting
                ->output(TiptapOutput::Html) // optional, change the format for saved data, default is html
                ->maxContentWidth('5xl')

                ->required()
                ->columnSpanFull(),
                Forms\Components\TextInput::make('auteur')
                    ->maxLength(255),
                Forms\Components\Toggle::make('published')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('auteur')
                    ->searchable(),
            Tables\Columns\TextColumn::make('content')
                ->wrap()
                ->html()
                ->limit(100),
                Tables\Columns\IconColumn::make('published')
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
            'index' => Pages\ListTemoignages::route('/'),
            'create' => Pages\CreateTemoignage::route('/create'),
            'view' => Pages\ViewTemoignage::route('/{record}'),
            'edit' => Pages\EditTemoignage::route('/{record}/edit'),
        ];
    }
}
