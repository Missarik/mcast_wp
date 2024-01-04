/**
 * @package Inline Spoilers
 */

jQuery(function () {
jQuery(".spoiler-head").removeClass("no-icon");
jQuery(".spoiler-head").on('click keypress', function (event) {
    event.preventDefault();
    
//expand current
$this = jQuery(this); 
    var control = $this.attr('aria-controls');
// close all

if ($this.data('group').length !== '-1') { 
   
var group = $this.data('group');  
jQuery(".div.accordion_group_body_"+group).not('#'+control).attr("aria-hidden", "true");
jQuery(".accordion_group_"+group).not('#'+control).attr("aria-expanded", "false");
jQuery(".accordion_group_"+group).not($this).removeClass("expanded");
jQuery(".accordion_group_"+group).not($this).addClass("collapsed");
jQuery("div.accordion_group_body_"+group).not('#'+control).slideUp("fast");
}
    
if ($this.hasClass("expanded")) {
$this.attr("aria-expanded", "false");
var control = $this.attr('aria-controls');

jQuery("#"+control).attr("aria-hidden", "true");
$this.removeClass("expanded");
$this.addClass("collapsed");

$this.next().slideUp("slow");
} else {
var control = $this.attr('aria-controls');

jQuery("#"+control).attr("aria-hidden", "false");
$this.attr("aria-expanded", "true");
$this.removeClass("collapsed");
$this.addClass("expanded");

$this.next().slideDown("slow");
}
});
});
