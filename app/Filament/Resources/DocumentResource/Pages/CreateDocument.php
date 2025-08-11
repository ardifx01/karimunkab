<?php

namespace App\Filament\Resources\DocumentResource\Pages;

use App\Filament\Resources\DocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateDocument extends CreateRecord
{
  protected static string $resource = DocumentResource::class;

  protected function mutateFormDataBeforeCreate(array $data): array
  {
    if (!Auth::user()->hasRole('admin')) {
      $data['user_id'] = Auth::id();
    }
    return $data;
  }
}
