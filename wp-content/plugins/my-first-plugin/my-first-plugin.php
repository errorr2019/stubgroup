<?php
/*
plugin Name: my-first-plugin
Description: Child Theme For Divi
Author: sidra zehra
Version: 1.0.0
*/

function add_menu_item() {
	add_menu_page('Dashboard','Countdown','manage_options','dashboard','countdown_init');
	add_submenu_page('dashboard','View Countdown Timer','View Countdown Timer','manage_options','dashboard','countdown_init');
	add_submenu_page('dashboard','Add countdown Timer','Add Countdown Timer','manage_options','dashboard','add_countdown_timer');
}
function countdown_init(){
   $html = '' ;
   $timer_data = get_option('countdown_timer');

   $html .= '<table class="viewtimer" border=1>
   <thead>
   <tr>
   <th>Title</th>
   <th>Due Date</th>
   <th>After Explore</th>
   <th>message <small>(if notv explore)</small></th>
   </tr> 
   </thead>'
   ;
   $html.='<tbody>';
   foreach ($timer_data as $key => $value) {
    $html .= '<td>'.$value.'</td>';
   }
   $html .= 
             '</tbody>
             </table>';

             echo $html;
}

function Add_Countdown_Timer(){
	include 'add-timer.php';
}

add_action('admin_menu','add_menu_item')
?>



