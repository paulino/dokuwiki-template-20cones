# 20Cones template for DokuWiki

20Cones is a template for DokuWiki based on default template. 

You can see a demo in <http://www.20cones.org>

Adicional documentacion for this template is avaliable at 
<http://dokuwiki.org/template:20cones>

(c) 2014 by Paulino Ruiz de Clavijo Vázquez <paulino@dte.us.es> 

See COPYING for license info.


## Main features

 * Topbar support 
 * Integrated with Translation Plugin <http://www.dokuwiki.org/plugin:translation>
 * Tablet and phone versions tested
 * Option to hide the DokuWiki title (hidden by default). It can be changed from configuration page
 * Some styles can be customized using the *style.ini* local file: header font and body font.
 

### Topbar

Default the topbar is rendered from **topbar.html** file. 
If you wish, a wiki page can be used as **topbar**. 
Use the DokuWiki configuration manager to select this option.
 
When wiki page is used, the plugin Traslation can be used to localize the topbar
page. For traslations you must create several topbar pages, one for each 
language using namespaces (es:topbar, en:topbar, etc..) 
 
## Changes in Default template

List of modifications for future easier maintenance

  * **tpl_header.php**: 

   * L26: Added code to show/hide H1 text after logo image
   * L74: Added plugin Traslation code
   * L90: Added custom topbar code


  * **top_footer.php**: Removed some footer icons
  
  * **print.css** L14: hidden topbar
 
  * All CSS styles are in one file *20cones.css* referenced from *style.ini*
 
  Modifications are marked in files with `@20cones-template@` string in the comments 
