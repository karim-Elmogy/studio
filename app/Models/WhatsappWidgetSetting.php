<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatsappWidgetSetting extends Model
{
    protected $fillable = [
        'is_enabled',
        'phone',
        'default_message',
        'horizontal_position',
    ];

    protected function casts(): array
    {
        return [
            'is_enabled' => 'boolean',
        ];
    }

    public function phoneDigits(): string
    {
        return preg_replace('/\D+/', '', (string) $this->phone);
    }

    public function waUrl(): ?string
    {
        $digits = $this->phoneDigits();
        if ($digits === '') {
            return null;
        }

        $url = 'https://wa.me/' . $digits;
        $message = trim((string) $this->default_message);
        if ($message !== '') {
            $url .= '?text=' . rawurlencode($message);
        }

        return $url;
    }

    public static function getSettings(): self
    {
        $row = self::first();
        if (!$row) {
            $row = self::create([
                'is_enabled' => false,
                'phone' => null,
                'default_message' => null,
                'horizontal_position' => 'right',
            ]);
        }

        return $row;
    }
}
