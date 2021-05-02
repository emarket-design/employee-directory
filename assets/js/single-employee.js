jQuery(document).ready(function($){
	showed_tab = 0;
	$('div.emd-container .nav-tabs li a').each(function() {
        tab_id = $(this).attr('id'); 
        tab_id = tab_id.replace('-tablink','');
        if($('#'+tab_id+ ' > div').length == 0){
                $(this).parent('li').hide();
        }
        else if(showed_tab == 0) {
                $(this).tab('show');
                showed_tab = 1;
        }
	});
});