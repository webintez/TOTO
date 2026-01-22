<?php

namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSetting extends EditRecord
{
    protected static string $resource = SettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if ($data['type'] === 'image') {
            $data['value_image'] = $data['value'];
        } else {
            $data['value_text'] = $data['value'];
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
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
