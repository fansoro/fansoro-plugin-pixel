# Pixel
Pixel plugin to create placeholder images for Fansoro

## Installation
See [this instruction](http://fansoro.org/documentation/plugins/plugins-installation)

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
| category | sports | Image category (abstract, animals, business, cats, city, food, night, life, fashion, people, nature, sports, technics, transport) |
| text | '' | Image text |

## License
See [LICENSE](https://github.com/fansoro/fansoro-plugin-pixel/blob/master/LICENSE)
