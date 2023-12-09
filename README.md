# 20Cones template for DokuWiki

20Cones is a template for DokuWiki based on default template.

You can see a demo in [https://www.20cones.org]

Additional documentation for this template is available at 
[http://dokuwiki.org/template:20cones]

(c) 2023 by Paulino Ruiz de Clavijo Vázquez [pruiz@us.es]

See COPYING for license info.

## Features summary

- Topbar support
- Integrated with [Translation Plugin](http://www.dokuwiki.org/plugin:translation)
- Option to hide the DokuWiki title (hidden by default). It can be changed from configuration page
- Some styles can be customized using the *style.ini* local file: header font and body font.

## Topbar

The top bar is split into two parts: the top links and the social icons.

By default, the topbar is rendered from the file **topbar.html** that can be
customized. To use multi-language topbar, you must create a topbar page for each
language using the instructions of translation plugin. For translations, you
must create multiple topbar pages, using one namespace for each language (e.g.
es:topbar, en:topbar, etc.)

These pages must only have a list of links, the social part is common for all
languages, and it is rendered from the file **social.html**. No support for
multi-language social part is provided.

This is an example of a topbar page:

``` text
  * [[en:about|]]
  * [[en:downloads|Downloads]]
  * [[en:contribute|Contribute]]
  * [[en:contact|Contact, bugs, ...]]
```

## Adicional notes

- Plugin *translation* is not supported in dropdown mode.
