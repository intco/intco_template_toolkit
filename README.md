# intco Template Toolkit

A class to programmatically output Contao Modules and Content Elements.

## Requirements

- Contao 4.7.x, 4.4.x, 3.5.x

## Why?

It's the simplest way to reuse content elements and modules in every template.
Take a look at the [Event Gallery Example][example-event-gallery] for an implementation.

## What it does?

Export contents elements and modules as PHP code, so you can reuse them in your template.
Also provide a new module named "Content template". The module will act as the "file" insert tags but let you use insert tags inside the template.

## Getting Started

- Download and copy the `intco_template_toolkit` folder inside Contao `system/modules` folder.
- Clear the cache 
- Under `Contao Settings` flag the `Enable intco template toolkit` checkbox
- Browse your content elements or modules and click the ![](./docs/assets/exportcode.gif) icon to obtain the PHP code.
- Take a look at the [example-event-gallery] for an implementation.

## Getting Help

Feel free to open an issue using the `question` tag

## License

This project is released under the [MIT License](LICENSE)

[example-event-gallery]: ./docs/EventGalleryExample.md "Example Event Gallery"

