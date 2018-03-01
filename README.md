# List Noun

A collection of lists of nouns. Useful for naming your array of external hard drives, codenaming your next project, experimenting with your sorting algorithm, or testing your naming conventions.

## Project Goals

To experiment with various lists of nouns, common or proper. Eventually, to generate these lists in various formats, with increasing levels of complexity. At the basic level, a list can be found in plaintext format, with each line containing a noun. As the complexity increases, metadata will be added. Additional data will require additional formats, such as single dimensional arrays, multidimensional arrays, and objects. A long-term goal is to create generators that will convert a plaintext list into an array or object in your language of choice.

## Uses

Lists can be used to name your:

- Hard Drives
- Next Project
- Home-brewed Beer
- Inventions
- Pets
- Children
- Found-territories (plant a flag!)
- Game Characters
- Raspberry Pi Devices
- Ice Cream Creations
- Color Mixtures
- Party Themes
- Databases (stick to your company's naming conventions)
- Vehicles

## Examples

Here are some things you can do with a list.

### Planets

Granted, even though there are a growing number of astronomers arguing that [Pluto isn't a planet](https://en.wikipedia.org/wiki/Planet#21st_century), we're counting it as one.

#### Plaintext (Command Line)
`cat planets.txt`

The above example will output:

```
Mercury
Venus
Earth
Mars
Jupiter
Saturn
Uranus
Neptune
Pluto
```

`sort planets.txt`

The above example will output:

```
Earth
Jupiter
Mars
Mercury
Neptune
Pluto
Saturn
Uranus
Venus
```

#### PHP

```
<?php

// $planets array found in file planets.php
$planets = $planets;

sort($planets);

foreach ($planets as $planet) {
    echo $planet . "\n";
}
```

The above example will output:

```
Earth
Jupiter
Mars
Mercury
Neptune
Pluto
Saturn
Uranus
Venus
```

## Getting Started

TL;DR Skip to the summary.

Clone the repository onto your local machine.

```
git clone https://github.com/broeneatsdinner/list-noun
```

### Summary

1. Fork the project & clone locally.
2. Create an upstream remote and sync your local copy before you branch.
3. Branch for each separate piece of work.
4. Do the work, write [good commit messages](https://chris.beams.io/posts/git-commit/), and read the CONTRIBUTING file if there is one.
5. Push to your origin repository.
6. Create a new Pull Request in GitHub.
7. Respond to any code review feedback.

## Inspiration

Constellations
[GitHub Repository](https://github.com/pirtleshell/constellations)

List of Last Names in PHP Array
[GitHub Gist](https://gist.github.com/subodhghulaxe/8148971)

## Contributing

Create a pull request.