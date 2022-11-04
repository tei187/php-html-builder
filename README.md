# Documentation

## Example
```php
    use tei187\HTMLBuilder\HTML as HTML;

    echo
        HTML::Body(['class' => "main"], 
            HTML::Heading(1, ['class' => "text-red"], "Hello World!") . 
            HTML::Paragraph([], "Paragraph example")
        );
```
will output
```html
<body class='main'>
    <h1 class='text-red'>Hello World!</h1>
    <p>Paragraph example</p>
</body>
```
...or something like that, without tabulation because who really does that anyway...

## Table of Contents

| Method | Description |
|--------|-------------|
| [**Bootstrap**](#Bootstrap) | Generates HTML for Bootstrap-specific elements. |
| [Bootstrap::_PairedBootstrapTags](#Bootstrap_PairedBootstrapTags) | Default paired tags for Bootstrap. |
| [Bootstrap::Button](#BootstrapButton) | Button render. |
| [Bootstrap::ButtonLink](#BootstrapButtonLink) | Button-style link render. |
| [Bootstrap::Col](#BootstrapCol) | Column-class render. |
| [Bootstrap::Container](#BootstrapContainer) | Container-class render. |
| [Bootstrap::ContainerFluid](#BootstrapContainerFluid) | Container-fluid-class render. |
| [Bootstrap::Icon](#BootstrapIcon) | Icon render (Fontawesome). |
| [Bootstrap::Nav](#BootstrapNav) | Nav-class render. |
| [Bootstrap::Row](#BootstrapRow) | Row-class render. |
| [Bootstrap::Table](#BootstrapTable) | Table-class render. |
| [Bootstrap::InputGroup](#BootstrapInputGroup) | Input group render. |
| [Bootstrap::InputGroupFile](#BootstrapInputGroupFile) | File input group render. |
| [Bootstrap::InputGroupSelect](#BootstrapInputGroupSelect) | Input group select render. |
| [Bootstrap::InputGroupWithBtn](#BootstrapInputGroupWithBtn) | File input group render with button. |
| [Bootstrap::_InputGroupAppend](#Bootstrap_InputGroupAppend) |  |
| [Bootstrap::_InputGroupAppendBtn](#Bootstrap_InputGroupAppendBtn) |  |
| [Bootstrap::_InputGroupInput](#Bootstrap_InputGroupInput) | Input group input render. |
| [Bootstrap::_InputGroupPrepend](#Bootstrap_InputGroupPrepend) | Input group prepend render. |
| [Bootstrap::_InputGroupResolveCenter](#Bootstrap_InputGroupResolveCenter) | Some kind of resolver, really. |
| [Bootstrap::_InputGroupSelectItem](#Bootstrap_InputGroupSelectItem) | Select input item render. |
| [Bootstrap::Modal](#BootstrapModal) | Modal render. |
| [Bootstrap::ButtonModalToggle](#BootstrapButtonModalToggle) | Button render, toggling a modal. |
| [**Form**](#Form) | Form-specific basic HTML elements. |
| [Form::Button](#FormButton) | Button HTML5 element. |
| [Form::Form](#FormForm) | Form HTML5 element. |
| [Form::Input](#FormInput) | Input HTML5 element. |
| [Form::Label](#FormLabel) | Label HTML5 element. |
| [Form::Option](#FormOption) | Option HTML5 element. |
| [Form::OptGroup](#FormOptGroup) | Option group HTML5 element. |
| [Form::Textarea](#FormTextarea) | Textarea HTML5 element. |
| [**HTML**](#HTML) | Basic HTML5 elements rendering. |
| [HTML::Body](#HTMLBody) | Body render. |
| [HTML::Details](#HTMLDetails) | Details render. |
| [HTML::Div](#HTMLDiv) | Div render. |
| [HTML::Heading](#HTMLHeading) | Heading render. |
| [HTML::Hr](#HTMLHr) | Horizontal rule render. |
| [HTML::Image](#HTMLImage) | Image render. |
| [HTML::Link](#HTMLLink) | Link render. |
| [HTML::List](#HTMLList) | List HTML5 element. |
| [HTML::ListItem](#HTMLListItem) |  |
| [HTML::Paragraph](#HTMLParagraph) | Paragraph render. |
| [HTML::Span](#HTMLSpan) | Span render. |
| [HTML::Table](#HTMLTable) | Table render. |
| [HTML::TableCell](#HTMLTableCell) | Table cell (td) render. |
| [HTML::TableHeadingCell](#HTMLTableHeadingCell) | Table header cell (th) render. |
| [HTML::TableRow](#HTMLTableRow) | Table row (tr) render. |
| [HTML::Custom](#HTMLCustom) | Custom / non-standard tag. |
| [HTML::a](#HTMLa) | Alias for `self::Link()`; |
| [HTML::h](#HTMLh) | Alias for `self::Heading()`. |
| [HTML::img](#HTMLimg) | Alias for `self::Image()`. |
| [HTML::p](#HTMLp) | Alias for `self::Paragraph()`. |
| [HTML::ol](#HTMLol) | Ordered list. Alias for `self::List(\\&#039;ol\\&#039;)`. |
| [HTML::ul](#HTMLul) | Unordered list. Alias for `self::List(&quot;ul&quot;)`. |

## Bootstrap

Generates HTML for Bootstrap-specific elements.



* Full name: \tei187\HTMLBuilder\Bootstrap


### Bootstrap::_PairedBootstrapTags

Default paired tags for Bootstrap.

```php
Bootstrap::_PairedBootstrapTags( string tag, string defaultClass, string|null content = null, array|null attributes = [], array|null limit = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `tag` | **string** | Opening tag. |
| `defaultClass` | **string** | Bootstrap-relevant class. |
| `content` | **string\|null** | Between tags. |
| `attributes` | **array\|null** | Self-explanatory. |
| `limit` | **array\|null** | ? |


**Return Value:**





---
### Bootstrap::Button

Button render.

```php
Bootstrap::Button( array|null attributes, string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::ButtonLink

Button-style link render.

```php
Bootstrap::ButtonLink( array|null attributes, string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::Col

Column-class render.

```php
Bootstrap::Col( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::Container

Container-class render.

```php
Bootstrap::Container( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** | If has [&#039;class&#039; =&gt; &quot;container-fluid&quot;] will switch to fluid container. |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::ContainerFluid

Container-fluid-class render.

```php
Bootstrap::ContainerFluid( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::Icon

Icon render (Fontawesome).

```php
Bootstrap::Icon( string|null name, array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string\|null** |  |
| `attributes` | **array\|null** |  |


**Return Value:**





---
### Bootstrap::Nav

Nav-class render.

```php
Bootstrap::Nav( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::Row

Row-class render.

```php
Bootstrap::Row( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::Table

Table-class render.

```php
Bootstrap::Table( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::InputGroup

Input group render.

```php
Bootstrap::InputGroup( array|null attributes = [], string|null prepend = null, array[]|string|null value = [['id' => null, 'name' => null, 'value' => null, 'type' => 'text', 'placeholder' => null]], string|null append = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `prepend` | **string\|null** | Prepend element. |
| `value` | **array[]\|string\|null** | Content. |
| `append` | **string\|null** | Append element. |


**Return Value:**





---
### Bootstrap::InputGroupFile

File input group render.

```php
Bootstrap::InputGroupFile( array attributes = [], string|null prepend = null, array value = ['id' => null, 'name' => null, 'value' => null, 'placeholder' => null], string|null append = null ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `prepend` | **string\|null** |  |
| `value` | **array** |  |
| `append` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::InputGroupSelect

Input group select render.

```php
Bootstrap::InputGroupSelect( array attributes = [], string|null prepend = null, array|null value = ['id' => null, 'name' => null, 'options' => [], 'selected' => null], string|null append = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `prepend` | **string\|null** |  |
| `value` | **array\|null** |  |
| `append` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::InputGroupWithBtn

File input group render with button.

```php
Bootstrap::InputGroupWithBtn( array attributes = [], string|null prepend = null, array value = [['id' => null, 'name' => null, 'value' => null, 'type' => 'text', 'placeholder' => null]], string|null append = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `prepend` | **string\|null** |  |
| `value` | **array** |  |
| `append` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::_InputGroupAppend



```php
Bootstrap::_InputGroupAppend( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::_InputGroupAppendBtn



```php
Bootstrap::_InputGroupAppendBtn( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::_InputGroupInput

Input group input render.

```php
Bootstrap::_InputGroupInput( array attributes = [], string|null value = null, string|null type = 'text' ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `value` | **string\|null** |  |
| `type` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::_InputGroupPrepend

Input group prepend render.

```php
Bootstrap::_InputGroupPrepend( array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::_InputGroupResolveCenter

Some kind of resolver, really.

```php
Bootstrap::_InputGroupResolveCenter( string|array values ): string
```

..

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `values` | **string\|array** | HTML string or array with items having keys &#039;value&#039; and &#039;type&#039;. |


**Return Value:**





---
### Bootstrap::_InputGroupSelectItem

Select input item render.

```php
Bootstrap::_InputGroupSelectItem( array attributes = [], mixed options = null, string|int|null selected = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |
| `options` | **mixed** |  |
| `selected` | **string\|int\|null** |  |


**Return Value:**





---
### Bootstrap::Modal

Modal render.

```php
Bootstrap::Modal( array|null attributes = [], string|null id = null, string|null title = null, string|null content = null, string|null footerContent = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `id` | **string\|null** |  |
| `title` | **string\|null** |  |
| `content` | **string\|null** |  |
| `footerContent` | **string\|null** |  |


**Return Value:**





---
### Bootstrap::ButtonModalToggle

Button render, toggling a modal.

```php
Bootstrap::ButtonModalToggle( array|null attributes, string|null content = null, string target ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |
| `target` | **string** |  |


**Return Value:**





---
## Form

Form-specific basic HTML elements.



* Full name: \tei187\HTMLBuilder\Form


### Form::Button

Button HTML5 element.

```php
Form::Button( string type = 'button', string|null id = null, string|null name = null, int|float|string|null content = null, array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **string** | Type attribute. |
| `id` | **string\|null** | Id attribute. |
| `name` | **string\|null** | Name attribute. |
| `content` | **int\|float\|string\|null** | Content. |
| `attributes` | **array\|null** | Other attributes. |


**Return Value:**





---
### Form::Form

Form HTML5 element.

```php
Form::Form( string|null method = 'POST', string|null action = null, int|float|string|null content = null, array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **string\|null** | Method attribute. |
| `action` | **string\|null** | Action attribute. |
| `content` | **int\|float\|string\|null** | Content. |
| `attributes` | **array\|null** | Other attributes. |


**Return Value:**





---
### Form::Input

Input HTML5 element.

```php
Form::Input( string type = 'text', string|null id = null, string|null name = null, array|null attributes = [], int|float|string|null value = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **string** | Type attribute. |
| `id` | **string\|null** | Id attribute. |
| `name` | **string\|null** | Name attribute. |
| `attributes` | **array\|null** | Other attributes. |
| `value` | **int\|float\|string\|null** | Value attribute. |


**Return Value:**





---
### Form::Label

Label HTML5 element.

```php
Form::Label( int|float|string|null content = null, string|null for = null, array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **int\|float\|string\|null** | Content. |
| `for` | **string\|null** | For attribute. |
| `attributes` | **array\|null** | Other attributes. |


**Return Value:**





---
### Form::Option

Option HTML5 element.

```php
Form::Option( mixed|null key = null, mixed|null label = null, bool|null selected = false ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed\|null** | Option value attribute. |
| `label` | **mixed\|null** | Option content. |
| `selected` | **bool\|null** | Selected control flag. |


**Return Value:**





---
### Form::OptGroup

Option group HTML5 element.

```php
Form::OptGroup( string|null label = null, string|array|null options = null, mixed|null selected = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `label` | **string\|null** | Name of option group. |
| `options` | **string\|array\|null** | Array of option or HTML5 string. |
| `selected` | **mixed\|null** | Selected id/key. |


**Return Value:**





---
### Form::Textarea

Textarea HTML5 element.

```php
Form::Textarea( string|null id = null, string|null name = null, array|null attributes = [], int|float|string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `id` | **string\|null** | Id attribute. |
| `name` | **string\|null** | Name attribute. |
| `attributes` | **array\|null** | Other attributes. |
| `content` | **int\|float\|string\|null** | Content. |


**Return Value:**





---
## HTML

Basic HTML5 elements rendering.



* Full name: \tei187\HTMLBuilder\HTML


### HTML::Body

Body render.

```php
HTML::Body( array|null attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::Details

Details render.

```php
HTML::Details( mixed|null summary = null, mixed|null content = null, array|null attributes = [] ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `summary` | **mixed\|null** |  |
| `content` | **mixed\|null** |  |
| `attributes` | **array\|null** |  |


**Return Value:**





---
### HTML::Div

Div render.

```php
HTML::Div( array|null attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::Heading

Heading render.

```php
HTML::Heading( int level = 1, array|null attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `level` | **int** |  |
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::Hr

Horizontal rule render.

```php
HTML::Hr( array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |


**Return Value:**





---
### HTML::Image

Image render.

```php
HTML::Image( array|null attributes = [], string|null source ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `source` | **string\|null** |  |


**Return Value:**





---
### HTML::Link

Link render.

```php
HTML::Link( string|null href = null, array attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `href` | **string\|null** |  |
| `attributes` | **array** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::List

List HTML5 element.

```php
HTML::List( string|null type = "ul", array|null attributes = [], string|array|null content = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **string\|null** | Type of list: `ul` for unordered or `ol` for ordered list. |
| `attributes` | **array\|null** |  |
| `content` | **string\|array\|null** | Two-value array, `0` being array with attributes, `1` being content. |


**Return Value:**





---
### HTML::ListItem



```php
HTML::ListItem( ?array attributes = null, ?string content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **?array** |  |
| `content` | **?string** |  |


**Return Value:**





---
### HTML::Paragraph

Paragraph render.

```php
HTML::Paragraph( array|null attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::Span

Span render.

```php
HTML::Span( array|null attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::Table

Table render.

```php
HTML::Table( array|null attributes = null, string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::TableCell

Table cell (td) render.

```php
HTML::TableCell( array|null attributes = null, string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::TableHeadingCell

Table header cell (th) render.

```php
HTML::TableHeadingCell( array|null attributes = null, string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::TableRow

Table row (tr) render.

```php
HTML::TableRow( array|null attributes = null, mixed cells = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `cells` | **mixed** |  |


**Return Value:**





---
### HTML::Custom

Custom / non-standard tag.

```php
HTML::Custom( string tag, array|null attributes = [], bool|string content = false ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `tag` | **string** | Tag name. |
| `attributes` | **array\|null** | Attributes. |
| `content` | **bool\|string** | If `false`, tag is treated as self-closing tag. If a `string` is passed, it&#039;s treated as paired tag. |


**Return Value:**





---
### HTML::a

Alias for `self::Link()`;

```php
HTML::a( string|null content = null, string|null href = null, array|null attributes = [] ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **string\|null** |  |
| `href` | **string\|null** |  |
| `attributes` | **array\|null** |  |


**Return Value:**





---
### HTML::h

Alias for `self::Heading()`.

```php
HTML::h( int level = 1, string|null content = null, array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `level` | **int** |  |
| `content` | **string\|null** |  |
| `attributes` | **array\|null** |  |


**Return Value:**





---
### HTML::img

Alias for `self::Image()`.

```php
HTML::img( ?string source, array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **?string** |  |
| `attributes` | **array\|null** |  |


**Return Value:**





---
### HTML::p

Alias for `self::Paragraph()`.

```php
HTML::p( array|null attributes = [], string|null content = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array\|null** |  |
| `content` | **string\|null** |  |


**Return Value:**





---
### HTML::ol

Ordered list. Alias for `self::List(\\'ol\\')`.

```php
HTML::ol( string|null content = null, array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **string\|null** |  |
| `attributes` | **array\|null** |  |


**Return Value:**





---
### HTML::ul

Unordered list. Alias for `self::List("ul")`.

```php
HTML::ul( string|null content = null, array|null attributes = [] ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **string\|null** |  |
| `attributes` | **array\|null** |  |


**Return Value:**





---
