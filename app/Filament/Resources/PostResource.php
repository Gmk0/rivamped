<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
//use FilamentTiptapEditor\TiptapEditor;
//use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
class PostResource extends Resource
{
    protected static ?string $model = Post::class;

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

            TextInput::make('slug')->unique(ignorable: fn ($record) => $record),
            

                    Forms\Components\Select::make('category_id')
            ->options(Category::all()->pluck('intitule', 'id'))
                    ->createOptionForm([
                        Forms\Components\TextInput::make('intitule')
                            ->required(),

                    ])
            ->searchable()
            ->native(false)
            ->live(),

             Forms\Components\Select::make('tags')->label('Sous categorie')
                    ->options(fn (Get $get): Collection => Tag::query()
                        ->where('category_id', $get('category_id'))
                        ->pluck('tag', 'id')
                        )->multiple()
                    ->searchable()
                    ->native(false)
                ,


            Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpanFull(),

        Forms\Components\RichEditor::make('content')
                ->required()
                ->columnSpanFull(),
        Forms\Components\SpatieMediaLibraryFileUpload::make('image')
            
            ->collection('posts')
            
            ->preserveFilenames()
            ->required(),

                /*
                TiptapEditor::make('content')
                    ->profile('default')
                    //->tools([]) // individual tools to use in the editor, overwrites profile
                 // optional, defaults to config setting
                    //->acceptedFileTypes(['array of file types']) // optional, defaults to config setting
                    //->maxFileSize('integer in KB') // optional, defaults to config setting
                    ->output(TiptapOutput::Html) // optional, change the format for saved data, default is html
                    ->maxContentWidth('x5l')
                    ->required()
                    ->columnSpanFull(),

                    */
            Select::make('user_id')
            ->label('Author')
            ->options(User::all()->pluck('name', 'id'))
            ->searchable(),
                Forms\Components\Toggle::make('is_publish')
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('like')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
