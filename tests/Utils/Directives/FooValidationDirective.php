<?php

namespace Tests\Utils\Directives;

use Nuwave\Lighthouse\Schema\Directives\ValidationDirective;

class FooValidationDirective extends ValidationDirective
{
    /**
     * @return mixed[]
     */
    public function rules(): array
    {
        return [
            'foo' => ['alpha'],
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [];
    }
}
