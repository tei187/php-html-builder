# **PHP-TO-HTML package**

## **About**
---
Scripts meant to help out with organizing HTML tag building through PHP, for a rather specific one case but makes sense enough to try out, if you really don't want/need Twig :D

### **Features:**
 * **Basic HTML** builder (content, forms, all the parts of HEAD you tend to google for),
 * **Bootstrap** equivalent builder,
 * **Constants** for Charset, Doctype and Vocabularies,
 * **OpenGraph** handling: namespaces, default types, Twitter.

<br>

## **Installation**
---
### **Composer**
```shell
    composer require tei187/php-html-builder
```

<br>

## **Examples**
---
### **Basic HTML**
#### *Input:*
```php
    use tei187\HTMLBuilder\Constants\Charset;
    use tei187\HTMLBuilder\HTML;
    use tei187\HTMLBuilder\Head;
    use tei187\HTMLBuilder\OpenGraph;
    use tei187\HTMLBuilder\OpenGraph\Prefixes;
    
    echo
        HTML::Doctype() . 
        HTML::Html( [ 'prefix' => Prefixes::og, 'lang' => "en-US" ],
            HTML::Head(
                Head::Charset( Charset::UTF8 ) . 
                Head::Title("Testing page") . 
                OpenGraph::Type('website') . 
                OpenGraph::Url('localhost') . 
                OpenGraph::SiteName("Testing page") .
                OpenGraph::Description("Just a testing page for HTML builder based on PHP") . 
                Head::StyleSheet("/assets/css/style.min.css")
            ) . 
            HTML::Body( [ 'class' => "main" ], 
                HTML::Heading( 1, [ 'class' => 'text-red' ], "Hello World!" ) .
                HTML::Paragraph( [], "Paragraph example" )
            )
        );
```
#### *Output:*
```html
<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#' lang='en-US'>
    <head>
        <meta charset='UTF-8'/>
        <title>Testing page</title>
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='localhost'/>
        <meta property='og:site_name' content='Testing page'/>
        <meta property='og:description' content='Just a testing page for HTML builder based on PHP'/>
        <link rel='stylesheet' href='/assets/css/style.min.css'/>
    </head>
    <body class='main'>
        <h1 class='text-red'>Hello World!</h1>
        <p>Paragraph example</p>
    </body>
</html>
```
---

### **Bootstrap**
#### *Input:*
```php
    use tei187\HTMLBuilder\HTML;
    use tei187\HTMLBuilder\Head;
    use tei187\HTMLBuilders\Bootstrap;

    echo
        HTML::Doctype() .
        HTML::Html([], 
            HTML::Head(
                Head::Charset() .
                Head::Viewport() . 
                Head::Title("Bootstrap Example") .
                Head::StyleSheet(
                    "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css", 
                    null,
                    [ 
                        'integrity' => "sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65", 
                        'crossorigin' => "anonymous",
                    ]
                )
            ) . 
            HTML::Body([], 
                Bootstrap::Container([], 
                    HTML::Heading(1, [], "Heading") . 
                    Bootstrap::Row([], 
                        Bootstrap::Col(['class' => 'col-12 col-md-6'],
                            HTML::Image(['alt' => 'Image alternative text'], "/assets/img/image.jpg") . 
                            HTML::Paragraph([], "Paragraph")
                        )
                    )
                ) . 
                HTML::Script(
                    [
                        'src' => "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js",
                        'integrity' => "sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4",
                        'crossorigin' => "anonymous",
                    ]
                )
            )
        );
```
#### *Output:*
```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'/>
        <meta name='viewport' content='width=device-width, initial-scale=1'/>
        <title>Bootstrap Example</title>
        <link rel='stylesheet' 
              href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' 
              integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' 
              crossorigin='anonymous' />
    </head>
    <body>
        <div class='container'>
            <h1>Heading</h1>
            <div class='row'>
                <div class='col col-12 col-md-6'>
                    <img src='/assets/img/image.jpg' alt='Image alternative text'/>
                    <p>Paragraph</p>
                </div>
            </div>
        </div>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' 
                integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' 
                crossorigin='anonymous'></script>
    </body>
</html>
```
<br>

## **Requires**
---
 - **UtilitiesPHP** : *tei187/utilities-php* ([GitHub](https://github.com/tei187/UtilitiesPHP) | [Packagist](https://packagist.org/packages/tei187/utilities-php))

<br>

## **Author**
---
 - [tei187](https://github.com/tei187)