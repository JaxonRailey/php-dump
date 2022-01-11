<?php

function dump($var = null) {

    ob_clean();

    echo '<style>
        html, body {
            margin: 0;
            padding: 8px 10px;
            font-family: monospace;
            font-size: 12.5px;
            line-height: 16px;
        }
    </style>';

    if (is_string($var) && @json_decode($var) && json_last_error() === 0) {
        $var = json_decode($var);
    }

    ini_set('highlight.comment', '#008000');
    ini_set('highlight.default', '#008800');
    ini_set('highlight.html', '#808080');
    ini_set('highlight.keyword', '#0000BB; font-weight: bold');
    ini_set('highlight.string', '#DD0000');
    highlight_string('<?php ' . var_export($var, true) . '?>');

    $output = ob_get_clean();
    $output = str_replace(['&lt;?php&nbsp;', '?&gt;'] , '', $output);
    $output = str_replace('(object)&nbsp;array', 'object ', $output);

    echo $output; die();
}
