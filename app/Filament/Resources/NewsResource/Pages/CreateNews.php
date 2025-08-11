<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateNews extends CreateRecord
{
  protected static string $resource = NewsResource::class;

  protected function mutateFormDataBeforeCreate(array $data): array
  {
    if (!Auth::user()->hasRole('admin')) {
      $data['user_id'] = Auth::id();
    }
    return $data;
  }
}
