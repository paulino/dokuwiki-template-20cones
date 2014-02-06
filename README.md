
20Cones template for DokuWiki
==========================

20Cones is a template for DokuWiki based on default template. 

You can see a demo in <http://www.20cones.org>

Adicional documentacion for this template is avaliable at 
<http://dokuwiki.org/template:20cones>

(c) 2014 by Paulino Ruiz de Clavijo Vázquez <paulino@dte.us.es> 

See COPYING for license info.


Main features
------------

 * Topbar support 
 * Integrated with Translation Plugin <http://www.dokuwiki.org/plugin:translation>
 * Tablet and phone versions tested
 * Option to hide the DokuWiki title (hidden by default). It can be changed from configuration page
 

Topbar
-----

Default the topbar is rendered from **topbar.html** file. 
If you wish, a wiki page can be used as **topbar**. 
Use the DokuWiki configuration manager to select this option.
 
When wiki page is used, the plugin Traslation can be used to localize the topbar
page. For traslations you must create several topbar pages, one for each 
language using namespaces (es:topbar, en:topbar, ...) 
 
Changes in Default template
---------------------------

Set of changes for future easier maintenance

  * **tpl_header.php**: 

   * L25: Added code to show/hide H1 text after logo image
   * L75: Added plugin Traslation code
   * L91: Added custom topbar code


  * **top_footer.php**: Removed some footer icons
