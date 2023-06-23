<?php

namespace Pterodactyl\Http\Requests\Admin\Extensions\bpidentifierreplace;

use Pterodactyl\Http\Requests\Admin\AdminFormRequest;

class bpidentifierreplaceSettingsFormRequest extends AdminFormRequest
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
