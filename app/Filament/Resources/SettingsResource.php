<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Models\Settings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'text' => 'Text',
                        'image' => 'Image',
                    ])
                    ->default('text')
                    ->live(),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\TextInput::make('value')
                            ->maxLength(255),
                    ])
                    ->visible(fn (Forms\Get $get) => $get('type') === 'text'),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\FileUpload::make('value')
                            ->image()
                            ->disk('public')
                            ->directory('settings')
                    ])
                    ->visible(fn (Forms\Get $get) => $get('type') === 'image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('value')
                    ->visible(fn ($record) => $record && $record->type === 'image'),
                Tables\Columns\TextColumn::make('value')
                    ->visible(fn ($record) => $record && $record->type === 'text')
                    ->searchable(),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function ($record) {
                        if ($record && $record->type === 'image' && $record->value) {
                            Storage::disk('public')->delete($record->value);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records) {
                            if ($records) {
                                foreach ($records as $record) {
                                    if ($record && $record->type === 'image' && $record->value) {
                                        Storage::disk('public')->delete($record->value);
                                    }
                                }
                            }
                        }),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}
