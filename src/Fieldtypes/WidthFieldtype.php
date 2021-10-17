<?php

namespace LuckyMedia\WidthField\Fieldtypes;

use Statamic\Fields\Fieldtype;

class WidthFieldtype extends Fieldtype
{
    protected $icon = 'button_group';

    public function preload()
    {
        return [
            'options' => config('widthfield.sizes')
        ];
    }

    protected function configFieldItems(): array
    {
        $fields = collect(config('widthfield.sizes'))->mapWithKeys(function ($option, $key) {
            return [
                $key => [
                    'type'    => 'toggle',
                    'display' => $option,
                    'width'   => 25,
                    'default' => true,
                ],
            ];
        })->toArray();

        $fields['default'] = [
            'type'    => 'select',
            'display' => 'Default',
            'width' => 50,
            'options' => collect(config('widthfield.sizes'))->mapWithKeys(function ($option, $key) {
                return [$key => $option];
            })->toArray(),
        ];

        return $fields;
    }
}
