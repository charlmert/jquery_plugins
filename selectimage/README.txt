jQuery selectImage 

Description:
This plugin enables a standard list of images to become selectable components
capable of being submitted to the server.

Features:
 - Select and Highlight an image who's attributes including src gets submitted to the server.

TODO:
 - Enable single clickthrough directly on image to submit.
 - Add style and layout options.

Usage:

1. Simply put all your image tags in a div container with an id like:
    <div id="selectimage">
      <img src="http://gmail.com/image.jpg">
      <img id="the_image" src="http://gmail.com/image.jpg">
      <img id="the_image" src="http://gmail.com/image.jpg" alt="alt-text">
    </div>

2. Put this in the head section of you page:
    <script type="text/javascript">
      jQuery(document).ready(function(){
        jQuery('#selectimage').selectImage();
      });
    </script>

3. The default hidden inputs will be passed back to the server with all the 
   attributes and values for the selected image and it will look something like 
   selectimage_attr[src], selectimage_attr[alt], selectimage_attr[id] etc.

Notes:
- The script requires the images to have id's so if no id exists, a custom id is generated.
- This plugin will give all images a 10 px border on initialization as the border is used
  as the selection indicator.

