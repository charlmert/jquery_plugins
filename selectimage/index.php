<?PHP

  $img_src = $_POST['selectimage_src'];
  $img_alt = $_POST['selectimage_alt'];
  $img_title = $_POST['selectimage_title'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>jQuery &mdash; Select Image Plugin | KnowledgeTree</title>

    <!-- CSS Files. -->

           <link rel="stylesheet" type="text/css" href="resources/css/kt-framing.css" />
           <link rel="stylesheet" type="text/css" href="resources/css/kt-contenttypes.css" />
           <link rel="stylesheet" type="text/css" href="resources/css/kt-headings.css" />
        
       <link rel="stylesheet" type="text/css" href="resources/css/kt-print.css"
           media="print" />

    <link rel="icon" href="resources/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">

    <!-- evil CSS workarounds - inspired by Plone's approach -->
    <!-- Internet Explorer CSS Fixes -->

    <!--[if lt IE 7]>
                <style type="text/css" media="all">@import url(resources/css/kt-ie-icons.css);</style>
                    <![endif]-->

    <!-- Standalone CSS. -->
    
    <!-- Javascript Files. -->
    <script type="text/javascript" src="jquery-1.3.2.min.js"> </script>
    <script type="text/javascript" src="jquery.selectimage.js"> </script>

    <link rel="stylesheet" type="text/css" href="css/selectimage.css" />

    <!--[if IE 7]>
    <style type="text/css" media="all">@import url(resources/css/kt-ie-7.css);</style>
    <![endif]-->

    <script type="text/javascript">
      jQuery(document).ready(function(){
        jQuery('#selectimage_anime').selectImage();
      });
    </script>
</head>
<body>
<div id="wrapper">
<input type="hidden" name="kt-core-baseurl" id="kt-core-baseurl" value="/knowledgetree" />

    <div id="pageBody">
        <div id="bodyPad">
            <div id="logobar">
            	                	<a href="http://www.knowledgetree.com"><img src="resources/graphics/ktlogo-topbar-right.png" class="primary" title="KnowledgeTree"/></a>
                                                	<a href="http://www.google.com"><img src="resources/selectimage-logo.png" height="50px" width="313px" alt="cool beans!" title="cool beans!" class="secondary" /></a>
                                <div class="floatClear"></div>
            </div>
            			<div id="navbarBorder">
	                    <div id="navbar">

	                        <ul>
	                            <!-- area menu -->
                                <li><a href="http://localhost/knowledgetree/dashboard.php" onclick="">Select Image Demo</a></li>
 
	                            <li class="pref">

	                            	<div style="position: absolute;">

	                            	<form id=frmQuickSearch method=post action="/knowledgetree/search2.php?action=process">
	                            	<input id=txtQuery name=txtQuery type=hidden>
	                            	<input type=hidden name="cbQuickQuery" id="cbQuickQuery" value="1">
	                            	<input type=hidden name="cbQuickGeneral" id="cbQuickGeneral" value="1"></form>
	                            	
	                            	</div>




	                            	</li>

	                        </ul>
	                    </div>
	                    <div id="navbarLeft"></div>
	                    <div id="navbarRight"></div>
			</div>
                                        <div id="breadcrumbs">

                	<table width="100%">
                    <tr>
                    <td valign=top align=left width="100">
                    <span class="additional"><nobr>You are here: </span>
                    </td>
					<td valign=top align=left width="100%">
                        <a href="http://www.knowledgetree.com" class="primary">KnowledgeTree</a>
                          &raquo;
                            <a href="http://knowledgetree.com/jquery_plugins/selectimage">jQuery Select Image Plugin</a>
<?PHP
if ($img_src != '') {
?>
                            &raquo;
                              <a href="http://knowledgetree.com/jquery_plugins/selectimage">You Selected:</a>
<?
}
?>
                    </td>
                    <td width="5px">&nbsp;</td>
                    <td valign=top align=right width="100">
                	   <div></div>
                	</td>
                	<td id="add-dashlet"></td>

                	</tr>
                	</table>
                </div>
                    </div>
        <div id="kt-wrapper">
          <div id="content">

<?PHP
if ($img_src != '') {
  ?>


      <fieldset>
      <field>

      <table>
        <tr>
          <td width="310px">&nbsp;</td>
          <td>


            <table width="100%">
                <tr>
                   <td width="250px"> 
                      <img src="<?=$img_src?>" style="border:10px solid #d9d9d9"/>
                   </td>
                   <td>
                      <table> 
                        <tr> 
                          <td colspan="2">Image Attributes:</td>
                        </tr>
                        <tr> 
                          <td>Src</td>
                          <td>: <?=$img_src?></td>
                        </tr>
                        <tr> 
                          <td>Alt</td>
                          <td>: <?=$img_alt?></td>
                        </tr>
                        <tr> 
                          <td>Title</td>
                          <td>: <?=$img_title?></td>
                        </tr>
                      </table>
                   </td>
                </tr>
            </table>


          </td>
        </tr>
      </table>

      </field>
      </fieldset>
  <?
}
?>


          <form action="index.php" method="post">

        	<table width="100%">
                <tr>
                    <td>
                        <table class="kt_collection" cellspacing="0" name="browseForm">
                            <tr>
                                <td>
                                    <p class="descriptiveText">
                                      1. Select an image by clicking on it. <br/>
                                      2. Click the "Select Image" button to see it submit the image to the form.
                                    </p>
                                    <input type="submit" name="submit" value="Select Image" style="margin:10px 10px 0px 10px;"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
<div id="selectimage_anime" style="width:600px;clear:right;display:block">

  <div class="selectimage_row" style="float:left;clear:right">
  <img src="anime/warofgenesis_12_1024.jpg" title="anime/warofgenesis_12_1024.jpg" alt="anime/warofgenesis_12_1024.jpg">
  <img src="anime/warofgenesis_13_1024.jpg" title="anime/warofgenesis_13_1024.jpg" alt="anime/warofgenesis_13_1024.jpg">
  <img src="anime/warofgenesis_14_1024.jpg" title="anime/warofgenesis_14_1024.jpg" alt="anime/warofgenesis_14_1024.jpg">
  <img src="anime/warofgenesis_16_1024.jpg" title="anime/warofgenesis_16_1024.jpg" alt="anime/warofgenesis_16_1024.jpg">
  <img src="anime/warofgenesis_17_1024.jpg" title="anime/warofgenesis_17_1024.jpg" alt="anime/warofgenesis_17_1024.jpg">
  <img src="anime/warofgenesis_1_1024.jpg" title="anime/warofgenesis_1_1024.jpg" alt="anime/warofgenesis_1_1024.jpg">
  </div>

  <div class="selectimage_row" style="float:left;clear:right">
  <img src="anime/warofgenesis_18_1024.jpg" title="anime/warofgenesis_18_1024.jpg" alt="anime/warofgenesis_18_1024.jpg">
  <img src="anime/warofgenesis_2_1024.jpg" title="anime/warofgenesis_2_1024.jpg" alt="anime/warofgenesis_2_1024.jpg">
  <img src="anime/warofgenesis_23_1024.jpg" title="anime/warofgenesis_23_1024.jpg" alt="anime/warofgenesis_23_1024.jpg">
  <img src="anime/warofgenesis_28_1024.jpg" title="anime/warofgenesis_28_1024.jpg" alt="anime/warofgenesis_28_1024.jpg">
  <img src="anime/warofgenesis_30_1024.jpg" title="anime/warofgenesis_30_1024.jpg" alt="anime/warofgenesis_30_1024.jpg">
  <img src="anime/warofgenesis_3_1024.jpg" title="anime/warofgenesis_3_1024.jpg" alt="anime/warofgenesis_3_1024.jpg">
  </div>

  <div class="selectimage_row" style="float:left;clear:right">
  <img src="anime/noir_6_1024.jpg" title="anime/noir_6_1024.jpg" alt="anime/noir_6_1024.jpg">
  <img src="anime/scryed_3_1024.jpg" title="anime/scryed_3_1024.jpg" alt="anime/scryed_3_1024.jpg">
  <img src="anime/scryed_4_1024.jpg" title="anime/scryed_4_1024.jpg" alt="anime/scryed_4_1024.jpg">
  <img src="anime/scryed_7_1024.jpg" title="anime/scryed_7_1024.jpg" alt="anime/scryed_7_1024.jpg">
  <img src="anime/transformers_2_1024.jpg" title="anime/transformers_2_1024.jpg" alt="anime/transformers_2_1024.jpg">
  <img src="anime/trigun_26_1024.jpg" title="anime/trigun_26_1024.jpg" alt="anime/trigun_26_1024.jpg">
  </div>

  <div class="selectimage_row" style="float:left;clear:right">
  <img src="anime/warofgenesis_35_1024.jpg" title="anime/warofgenesis_35_1024.jpg" alt="anime/warofgenesis_35_1024.jpg">
  <img src="anime/warofgenesis_4_1024.jpg" title="anime/warofgenesis_4_1024.jpg" alt="anime/warofgenesis_4_1024.jpg">
  <img src="anime/warofgenesis_46_1024.jpg" title="anime/warofgenesis_46_1024.jpg" alt="anime/warofgenesis_46_1024.jpg">
  <img src="anime/warofgenesis_5_1024.jpg" title="anime/warofgenesis_5_1024.jpg" alt="anime/warofgenesis_5_1024.jpg">
  <img src="anime/warofgenesis_54_1024.jpg" title="anime/warofgenesis_54_1024.jpg" alt="anime/warofgenesis_54_1024.jpg">
  <img src="anime/warofgenesis_6_1024.jpg" title="anime/warofgenesis_6_1024.jpg" alt="anime/warofgenesis_6_1024.jpg">
  </div>

  <div class="selectimage_row" style="float:left;clear:right">
  <img src="anime/warofgenesis_7_1024.jpg" title="anime/warofgenesis_7_1024.jpg" alt="anime/warofgenesis_7_1024.jpg">
  <img src="anime/warofgenesis_9_1024.jpg" title="anime/warofgenesis_9_1024.jpg" alt="anime/warofgenesis_9_1024.jpg">
  <img src="anime/x_1_1024.jpg" title="anime/x_1_1024.jpg" alt="anime/x_1_1024.jpg">
  <img src="anime/itachi.jpg" title="anime/itachi.jpg" alt="anime/itachi.jpg">
  <img src="anime/naruto_2_1024.jpg" title="anime/naruto_2_1024.jpg" alt="anime/naruto_2_1024.jpg">
  <img src="anime/naruto_23_1024.jpg" title="anime/naruto_23_1024.jpg" alt="anime/naruto_23_1024.jpg">
  </div>

  <div class="selectimage_row" style="float:left;clear:right">
  <img src="anime/naruto_46_1024.jpg" title="anime/naruto_46_1024.jpg" alt="anime/naruto_46_1024.jpg">
  <img src="anime/naruto_49_1024.jpg" title="anime/naruto_49_1024.jpg" alt="anime/naruto_49_1024.jpg">
  <img src="anime/naruto_53_1024.jpg" title="anime/naruto_53_1024.jpg" alt="anime/naruto_53_1024.jpg">
  <img src="anime/naruto_75_1024.jpg" title="anime/naruto_75_1024.jpg" alt="anime/naruto_75_1024.jpg">
  <img src="anime/noir_1_1024.jpg" title="anime/noir_1_1024.jpg" alt="anime/noir_1_1024.jpg">
  <img src="anime/noir_17_1024.jpg" title="anime/noir_17_1024.jpg" alt="anime/noir_17_1024.jpg">
  </div>

  <div class="selectimage_row" style="float:left;clear:right">
  <img src="anime/noir_2_1024.jpg" title="anime/noir_2_1024.jpg" alt="anime/noir_2_1024.jpg">
  <img src="anime/noir_22_1024.jpg" title="anime/noir_22_1024.jpg" alt="anime/noir_22_1024.jpg">
  <img src="anime/noir_23_1024.jpg" title="anime/noir_23_1024.jpg" alt="anime/noir_23_1024.jpg">
  <img src="anime/noir_24_1024.jpg" title="anime/noir_24_1024.jpg" alt="anime/noir_24_1024.jpg">
  <img src="anime/noir_27_1024.jpg" title="anime/noir_27_1024.jpg" alt="anime/noir_27_1024.jpg">
  <img src="anime/noir_4_1024.jpg" title="anime/noir_4_1024.jpg" alt="anime/noir_4_1024.jpg">
  </div>

</div>
    
                                    <p style="clear:right">
                                
                                    <input type="hidden" id="selectimage_src" name="selectimage_src" value="">
                                    <input type="hidden" id="selectimage_alt" name="selectimage_alt" value="">
                                    <input type="hidden" id="selectimage_title" name="selectimage_title" value="">
                                    <input type="hidden" id="selectimage_name" name="selectimage_name" value="">
                                    <input type="hidden" id="selectimage_id" name="selectimage_id" value="">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Select Image" style="margin:0px 10px 10px 10px;"/>
                                </td>
                            </tr>
                        </table>
    
                        <div class="floatClear"></div>
		        	</td>
	        	</tr>
        	</table>
          </form>
        </div>
          </div>
    <!-- Start footer -->

    <div id="copyrightbarBorder">
        <table width="98%">
            <tr>
                <td width="10%">
                    <a href="/knowledgetree"><img src="resources/powered-by-kt.png" border="0" alt="Powered by KnowledgeTree" title="Powered by KnowledgeTree"/></a>
                </td>
                <td>
										    						<br>					                </td>

                <td align="right">
                    &copy; 2008, 2009 <a href="http://www.knowledgetree.com/about/legal" target="_blank">KnowledgeTree Inc.</a>					All rights reserved.					                </td>
            </tr>
            <!-- Display custom disclaimer if set -->
                                </table>
        <div class="floatClear"></div>

    </div>
    <!-- End Footer -->
</div>
</body>
</html>


