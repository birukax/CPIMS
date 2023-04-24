<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->maxLength(2048),

                TextInput::make('email')
                ->type('email')
                ->required()
                ->maxLength(2048),

                TextInput::make('password')
                ->password()
                ->required()
                ->minvalue(8)
                ->maxvalue(32)
                ->disableAutocomplete(),

                Select::make('role')
                ->options([
                    'police' => 'police',
                    'sl' => 'sl',
                    'co' => 'co',
                    'dc' => 'dc',
                    'admin' => 'admin',
                ]),

                DatePicker::make('birth_date'),


                Select::make('gender')
                ->options([
                    'male' => 'male',
                    'female' => 'female',
                ])
                ->required(),

                TextInput::make('phone')
                ->prefix('+251'),

                Toggle::make('status'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('role'),
                TextColumn::make('birth_date')->dateTime(),
                TextColumn::make('gender'),
                TextColumn::make('phone'),
                IconColumn::make('status')->boolean(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
