<?php
/**
 * @file
 */
?>

<div class="menu-wrap">
  
  <div class="full-wrap clearfix">   

    <nav id="main-menu"  role="navigation">
      <div class="menu-navigation-container">
        <?php $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
          print drupal_render($main_menu_tree);
        ?>
      </div>
      <div class="clear"></div>
    </nav>

  </div>

</div>

<div class="homebanner_wrapper_one">
  <div class="homebanner bgParallax">  
    <?php print render($page['home_banner_text']); ?>

     <div id="search_box_one_block">
                   <?php print render($page['search_box_one']); ?>
        </div>

    <div class="logo_wrap">
          <a href="/"><div id="runebeck_logo" class="logo_block">
          </div><!-- END LOGO BLOCK --></a>

          <div id="logo_name" class="logo_block">

                       <h1>
                       <div class="">
                        <div class="r letter_an">R</div>
                        <div class="u letter_an">U</div>
                        <div class="n letter_an">N</div>
                        <div class="e letter_an">E</div>
                        <div class="b letter_an">B</div>
                        <div class="e letter_an">E</div>
                        <div class="c letter_an">C</div>
                        <div class="k letter_an">K</div>
                      </div>


                       <div class="ease_up_block">CONSTRUCTION</div>

                       </h1>



            </div><!-- END LOGO NAME -->

    </div><!-- END LOGO WRAPPER-->

</div><!-- END HOMEBANNER -->
</div><!-- END HOMEBANNER WRAPPER ONE-->

 <div id="dissappear_wrap" class="clearfix">


                    <div id="think_block_one" class="logo_block_think">
                          <?php print render($page['logo_block_think']); ?>
                    </div><!-- END THINK LOGO BLOCK THINK -->

                    

</div><!-- END DISSAPPEAR WRAP -->



<div class="timer_dis_wrap">


     <div class="marketing_page_zero">
        

                 


      </div><!-- END MARKETING PAGE 0 -->


</div>






<div class="clearfix"></div>


<div id="container">
  <div class="container-wrap">




<div class="container_lg col-sm box_plate">
  <img class="icon_container" src="/sites/all/themes/runebeck_construction_theme/images/home_icon.png">
  <h2>Home Remodeling</h2>
  <div class="white_text">
  Runebeck Construction offers top quality home remodeling services for Midland and Odessa, Texas residents. Trust your home remodeling project with us today.</div>
</div>

<div class="container_lg col-sm box_plate">
  <img class="icon_container" src="/sites/all/themes/runebeck_construction_theme/images/carpet_roll.jpg">
  <h2>Carpet & Flooring</h2>
      <div class="white_text">
      Runebeck Construction provides the best carpet and flooring services for Midland and Odessa, Texas residents.</div>
</div>

<div class="container_lg col-sm box_plate">
  <img class="icon_container" src="/sites/all/themes/runebeck_construction_theme/images/light_bulb.png">
  <h2>Spec Construction</h2>
      <div class="white_text">
    Runebeck Construction is your local expert for custom spec home construction. Carrousel Construction will deliver you the home of your dreams.</div>
</div>




<div class="">
                   
                   </div>



<div class="">
                   <div class="autonomous_block">
                   <?php print render($page['auto_block_footer']); ?>
                    </div>
</div>



    </div>

  </div>

</div>