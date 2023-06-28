<?php

namespace Pterodactyl\Http\Requests\Admin\Extensions\__identifier__;

use Pterodactyl\Http\Requests\Admin\AdminFormRequest;

class __identifier__SettingsFormRequest extends AdminFormRequest
{
    /**
     * Return all the rules to apply to this request's data.
     */
    public function rules(): array
    {
        return [
            'table' => 'string',
            'item' => 'string',
            'value' => 'string',
        ];
    }

    public function attributes(): array
    {
        return [
            'table' => 'Database Table',
            'item' => 'Database Item',
            'value' => 'Database Value',
        ];
    }
}
