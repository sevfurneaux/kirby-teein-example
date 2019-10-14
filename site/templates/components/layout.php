<?php
declare(strict_types=1);

namespace Test\Components;

use function Teein\Html\Text\text;
use function Teein\Html\Document\document;
use function Teein\Html\Elements\{html,head,meta,title,body, script};
use function Teein\Html\Attributes\{lang,charset};

function layout($content)
{
    return document(
        html(lang('en'))(
            head()(
                meta(charset('utf8')),
                title()(
                    text('Hello World!')
                )
            ),
            body()($content)
        )
    );
}
