<?php
declare(strict_types=1);

namespace Test\Components;

use function Teein\Html\Text\text;
use function Teein\Html\Elements\{div,ul,li, span};
use function Teein\Html\Attributes\{class_};

function grid(array $children)
{
    return div(class_("grid"))(
        div(class_("grid__column")) (
            ...array_map(function ($child) {
                return $child;
            }, $children)
        )
    );
}
