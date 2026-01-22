<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required(),
                
                \Filament\Forms\Components\FileUpload::make('value_image')
                    ->hidden(fn ($get) => $get('type') !== 'image')
                    ->disk('public')
                    ->directory('settings')
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull(),

                Textarea::make('value_text')
                    ->hidden(fn ($get) => $get('type') === 'image')
                    ->columnSpanFull(),

                TextInput::make('group')
                    ->required()
                    ->default('general'),
                
                \Filament\Forms\Components\Select::make('type')
                    ->options([
                        'text' => 'Text',
                        'textarea' => 'Text Area',
                        'image' => 'Image',
                        'richtext' => 'Rich Text',
                    ])
                    ->required()
                    ->default('text')
                    ->live(),
            ]);
    }
}
