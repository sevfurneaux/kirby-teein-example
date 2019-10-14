<?php

use function Teein\Html\Elements\{div, span};
use function Teein\Html\Attributes\{class_};
use function Teein\Html\Text\text;
use function Test\Components\layout;
use function Test\Components\grid;

// require __DIR__ . "/components/layout.php";

return layout(
    div()(
        grid([
            div()(text('Column')),
            div()(text('Column')),
            div()(text('Column'))
        ])
    )
);
