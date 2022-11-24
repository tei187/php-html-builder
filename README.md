# Documentation

## Example
```php
<?php
    use tei187\HTMLBuilder\HTML as HTML;
    use tei187\HTMLBuilder\Head as Head;

    echo
        HTML::Doctype() .
        HTML::Html(['lang' => "en-us"],
            HTML::Head(
                Head::Charset() .
                Head::Title('test') .
                Head::Icon('assets/icon/favicon.ico') .
                Head::StyleSheets('assets/css/styles.min.css')
            ) .
            HTML::Body(['class' => "main"], 
                HTML::Heading(1, ['class' => "text-red"], "Hello World!") . 
                HTML::Paragraph([], "Paragraph example")
            )
        );
```
will output
```html
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset='utf-8'>
        <title>test</title>
        <link rel='icon' href='assets/icon/favicon.ico'>
        <link rel='stylesheet' href='assets/css/styles.min.css'>
    </head>
    <body class='main'>
        <h1 class='text-red'>Hello World!</h1>
        <p>Paragraph example</p>
    </body>
</html>
```
...or something like that, without tabulation because who really does that anyway...
