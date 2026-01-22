<?php

namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSetting extends CreateRecord
{
    protected static string $resource = SettingResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if ($data['type'] === 'image') {
            $data['value'] = $data['value_image'];
        } else {
            $data['value'] = $data['value_text'];
        }

        unset($data['value_image']);
        unset($data['value_text']);

        return $data;
    }
}
