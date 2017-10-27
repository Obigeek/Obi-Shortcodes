# Obi-Shortcodes

## About

Obi Shortcodes is a Wordpress Plugin developed for the Obigeek Website. It features several general shortcodes such as breakline and link; and some more advanced ones such as columns and warning boxes.

## Minified CSS

Obi-Shortcodes generates both Human Readable CSS and Compressed CSS, the plugin can load either of these depending on how you like to work. If the variable `$Obiminified` is set to true it will load the minified version. This is set to true for release versions and false for Develop Branch versions.

## Shortcodes

### General HTML

These shortcodes replicate HTML functions for easy addition in the visual editor.

| Shortcode | About  |
| --------- | :----: |
| [br]      | Inserts a `<br/>` tag |
| [break]   | Inserts a `<br/>` tag |
| [hr]      | Inserts the tags `<br/><hr/><br/>` to create a line with breaks either side |
| [line]    | Inserts the tags `<br/><hr/><br/>` to create a line with breaks either side |

### Comment

| Shortcode | About |
| --------- | ----- |
| [c]       | Prevents text from being returned |
| [comment] | Prevents text from being returned |

These shortcodes allow you to wrap a chunk of text and stop it from being returned to the visitors, essentially allowing for comments in the Wordpress admin.

### Columns

The columns system built into Obi-Shortcodes allows for columns up to a sixth. Every step has all steps, so for example, the sixth steps does have shortcodes for 1/6, 2/6, 3/6, 4/6, 5/6 however the CSS only references core parts to reduce the size of the style. Below is an example of each step for reference:

| Shortcode | About |
| --------- | ----- |
| [one_half] | Half of the original area |
| [one_third] | A third of the original area |
| [one_fourth] | A fourth of the original area |
| [one_fifth] | A fifth of the original area |
| [one_sixth] | A sixth of the original area |

Other Shortcodes:

| Shortcode | About |
| --------- | ----- |
| [clear_column] | Inserts a clear all full width column |

All of these can have the suffix `_last` added to change the float behaviour from left to right. The last suffix will also trigger the clear coloumn shortcode.

### Boxes

Obi-Shortcodes also includes three boxes, `warning`, `note`, and `info`. These are simple boxes designed to highlight certain information to the reader. The system includes three themes, `dark`, `light`, `boxed`. These themes can be added as a suffix to the box type shortcode or through the `theme` attribute.


| Shortcode | About |
| --------- | ----- |
| [warning] | A red warning box |
| [note] | A legal yellow pad note box |
| [info] | A light blue info box |


## Changelog

| Version | Info |
| --------- | ----- |
| V1.0.0 | Initial Release |
