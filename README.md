# PHP dump
Awesome dump with colorful syntax highlighting for analyze any type of var.

![dump](https://github.com/JaxonRailey/php-dump/blob/main/dump.jpg?raw=true)

To use it, just include dump function in your project or include dump.php file.

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