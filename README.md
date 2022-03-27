# PHP dump
Awesome dump with colorful syntax highlighting for analyze any type of var.


<img src="https://github.com/JaxonRailey/php-dump/blob/main/dump.jpg?raw=true" width="700" alt="Weather Card" />

To use it, just include dump function in your project or include dump.php file.

:star: **If you liked what I did, if it was useful to you or if it served as a starting point for something more magical let me know with a star** :green_heart:

It is based on ``` var_export ``` function, you can use it instead of ``` print_r ```, ``` var_dump ```, ``` echo ```, and ``` var_export ```.
Any other output will be cleaned up.

An example of use:

```php
$data = (object)[
    'name'    => 'php-dump',
    'text'    => 'Awesome dump with colorful syntax highlighting for analyze any type of var.',
    'author'  => (object)[
        'name' => 'JaxonRailey',
        'job'  => 'programmer'
    ],
    'example-of-array' => [
        'aaa', 'bbb', 'ccc', 'ddd'
    ],
    'example-of-associative-array' => [
        'aaa' => 111,
        'bbb' => 222,
        'ccc' => 333,
        'ddd' => 444
    ]
];

dump($data);
```

Enjoy &#128521;
