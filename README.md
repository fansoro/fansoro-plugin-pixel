# Pixel
Pixel plugin to create placeholder images for Morfy

## Installation
See [this instruction](http://morfy.org/documentation/plugins/plugins-installation)

## Usage in page content

Simple usage

```
![Image]({pixel})
```

Set width and height

```
![Image]({pixel width=200 height=200})
```

Set category name

```
![Image]({pixel width=200 height=200 category=city})
```

Set gray filter

```
![Image]({pixel width=200 height=200 category=city gray=true})
```

Set text

```
![Image]({pixel width=200 height=200 category=city gray=true text='Pixel'})
```

## Usage in template
```smarty
<img src="{pixel(['width' => 200, 'height' => 200, 'category' => 'city', 'gray' => 'true', 'text' => "Pixel"])}" alt="">
```

## Options

| name  | value | description |
|---|---|---|
| enabled | true | or `false` to disable the plugin |
| width | 300 | Image width |
| height | 200 | Image height |
| category | sports | Image category |
| text | '' | Image text |

## License
See [LICENSE](https://github.com/morfy-cms/morfy-plugin-pixel/blob/master/LICENSE)
