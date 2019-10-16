<?php

use function Teein\Html\Elements\div;
use function Teein\Html\Text\text;
use function Test\Components\layout;
use function Test\Components\grid;

return layout(
    div()(
        grid([
            div()(text('Column')),
            div()(text('Column')),
            div()(text('Column'))
        ])
    )
);
