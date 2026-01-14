<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('designation')
                    ->required(),
                Textarea::make('bio')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Textarea::make('social_links')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
