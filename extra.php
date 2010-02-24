<?php 
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include("template/head.php")?>
<script type="text/javascript" src="js/nomCategoria.js"></script>
<script language="javascript" type="text/javascript" src="js/actb.js"></script>
<script language="javascript" type="text/javascript" src="js/common.js"></script>
<script>
</script><br>
  </head>
  <body>
    <div id="wrapper">
      <div id="wrapper-bgtop">
        <?php include("template/header.php")?>
        <!-- end #header -->

        <div id="page">
          <div id="content">
            <div class="post">
              <h2 class="title"><a href="#">Videos Anteriores del Compushow</a></h2>
<!-- ++Begin Video Bar Wizard Generated Code++ -->
  <!--
  // Created with a Google AJAX Search Wizard
  //   // http://code.google.com/apis/ajaxsearch/wizards.html
  //     -->

        <!--
          // The Following div element will end up holding the actual 
          videobar.
            // You can place this anywhere on your page.
              -->
                <div id="videoBar-bar">
                    <span 
                    style="color:#676767;font-size:11px;margin:10px;padding:4px;">Loading...</span>
                      </div>

                        <!-- Ajax Search Api and Stylesheet
                          // Note: If you are already using the AJAX 
                          Search API, then do not include it
                            //       or its stylesheet again
                              -->
                                <script 
                                src="http://www.google.com/uds/api?file=uds.js&v=1.0&source=uds-vbw"
                                    type="text/javascript"></script>
                                      <style type="text/css">
                                          @import 
                                          url("http://www.google.com/uds/css/gsearch.css");
                                            </style>

                                              <!-- Video Bar Code and 
                                              Stylesheet -->
                                                <script 
                                                type="text/javascript">
                                                    window._uds_vbw_donotrepair 
                                                    = true;
                                                      </script>
                                                        <script 
                                                        src="http://www.google.com/uds/solutions/videobar/gsvideobar.js?mode=new"
                                                            type="text/javascript"></script>
                                                              <style 
                                                              type="text/css">
                                                                  @import 
                                                                  url("http://www.google.com/uds/solutions/videobar/gsvideobar.css");
                                                                    </style>

                                                                      <style 
                                                                      type="text/css">
                                                                          .playerInnerBox_gsvb 
                                                                          .player_gsvb 
                                                                          {
                                                                                width 
                                                                                : 
                                                                                320px;
                                                                                      height 
                                                                                      : 
                                                                                      260px;
                                                                                          }
                                                                                            </style>
                                                                                              <script 
                                                                                              type="text/javascript">
                                                                                                  function 
                                                                                                  LoadVideoBar() 
                                                                                                  {

                                                                                                      var 
                                                                                                      videoBar;
                                                                                                          var 
                                                                                                          options 
                                                                                                          = 
                                                                                                          {
                                                                                                                  largeResultSet 
                                                                                                                  : 
                                                                                                                  !true,
                                                                                                                          horizontal 
                                                                                                                          : 
                                                                                                                          true,
                                                                                                                                  autoExecuteList 
                                                                                                                                  : 
                                                                                                                                  {
                                                                                                                                            cycleTime 
                                                                                                                                            : 
                                                                                                                                            GSvideoBar.CYCLE_TIME_MEDIUM,
                                                                                                                                                      cycleMode 
                                                                                                                                                      : 
                                                                                                                                                      GSvideoBar.CYCLE_MODE_LINEAR,
                                                                                                                                                                executeList 
                                                                                                                                                                : 
                                                                                                                                                                ["compushow"]
                                                                                                                                                                        }
                                                                                                                                                                              }

                                                                                                                                                                                  videoBar 
                                                                                                                                                                                  = 
                                                                                                                                                                                  new 
                                                                                                                                                                                  GSvideoBar(document.getElementById("videoBar-bar"),
                                                                                                                                                                                                                GSvideoBar.PLAYER_ROOT_FLOATING,
                                                                                                                                                                                                                                              options);
                                                                                                                                                                                                                                                  }
                                                                                                                                                                                                                                                      // 
                                                                                                                                                                                                                                                      arrange 
                                                                                                                                                                                                                                                      for 
                                                                                                                                                                                                                                                      this 
                                                                                                                                                                                                                                                      function 
                                                                                                                                                                                                                                                      to 
                                                                                                                                                                                                                                                      be 
                                                                                                                                                                                                                                                      called 
                                                                                                                                                                                                                                                      during 
                                                                                                                                                                                                                                                      body.onload
                                                                                                                                                                                                                                                          // 
                                                                                                                                                                                                                                                          event 
                                                                                                                                                                                                                                                          processing
                                                                                                                                                                                                                                                              GSearch.setOnLoadCallback(LoadVideoBar);
                                                                                                                                                                                                                                                                </script>
                                                                                                                                                                                                                                                                <!-- 
                                                                                                                                                                                                                                                                ++End 
                                                                                                                                                                                                                                                                Video 
                                                                                                                                                                                                                                                                Bar 
                                                                                                                                                                                                                                                                Wizard 
                                                                                                                                                                                                                                                                Generated 
                                                                                                                                                                                                                                                                Code++ 
                                                                                                                                                                                                                                                                -->
            </div>
          </div>
        </div>
        <!-- end #content -->
        <div style="clear: both;">&nbsp;</div>
      </div>
      <!-- end #page -->
    </div>
  </div>
  <?php include("template/footer.php")?>
  </body>
</html>
