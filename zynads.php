<?php
/*
Plugin Name: ZYNADS
Plugin URI: http://www.zyntux.com
Description: Deutsch: Dieses Plugin bindet einen Werbebanner in euer System ein und gibt euch selbst die Moeglichkeit kostenlos innerhalb des Systems zu werben. Geht zu diesem <a href="http://www.zyntux.com/bannertausch/" target="_blank">Formular</a>, tragt die relevanten Daten ein und nach spaetestens 48 Stunden erscheint der Banner in unserem System. <br><br>English: This plugin binds a banner into your wordpress and gives you the chance to advertise for free within the system . Go to this <a href="http://www.zyntux.com/bannertausch/" target="_blank">Site</a>, transmits the relevant data and a maximal after 48 hours the banner appears in our and your system.
Version: 1.02
Author: zyntux.com
Author URI: http://www.zyntux.com
License: GPLv2
*/
function widget_zynads($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
            <?php echo $before_title
                . 'ZYNADS'
                . $after_title; ?>
            <!--/*
  *
  * Hier beginnt der ads.zyntux.com Code
  *
  */-->
<center>
<ins data-revive-zoneid="4" data-revive-id="a9abb3044dc4f126590dfe0b107e99d6"></ins>
<script async src="//ads.zyntux.com/www/delivery/asyncjs.php"></script>
        <?php echo $after_widget; ?>
</center>
<?php		
}
register_sidebar_widget('zynads',
    'widget_zynads');

function widget_zynads468($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
            <?php echo $before_title
                . 'ZYNADS'
                . $after_title; ?>
            <!--/*
  *
  * Hier beginnt der ads.zyntux.com Code
  *
  */-->  
<center>
<ins data-revive-zoneid="5" data-revive-id="a9abb3044dc4f126590dfe0b107e99d6"></ins>
<script async src="//ads.zyntux.com/www/delivery/asyncjs.php"></script>
        <?php echo $after_widget; ?>
</center>
<?php		
}
register_sidebar_widget('zynads468',
    'widget_zynads468');
	
function widget_zynadspop($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
            <?php echo $before_title
                . 'ZYNADS'
                . $after_title; ?>
            <!--/*
  *
  * Hier beginnt der ads.zyntux.com Code
  *
  */-->  
<center>
<ins data-revive-zoneid="6" data-revive-id="a9abb3044dc4f126590dfe0b107e99d6"></ins>
<script async src="//ads.zyntux.com/www/delivery/asyncjs.php"></script>
</center>
<?php		
}
register_sidebar_widget('zynadspop',
    'widget_zynadspop');