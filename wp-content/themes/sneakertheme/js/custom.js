function swapMenuIcon(x) 
{
    x.classList.toggle("change");
}

jQuery(document).ready(function(){
	jQuery('#nav-icon').click(function(){
		jQuery(this).toggleClass('open');

        jQuery('.mobile-menu-dropout ul').slideToggle(100);
  
        e.preventDefault();
	});
});