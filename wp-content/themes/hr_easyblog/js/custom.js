jQuery(document).ready(function(){

	// News Ticker
	var ticker = function()
	{
		setTimeout(function(){
			$('#ticker li:first').animate( {marginTop: '-28px'}, 800, function()
			{
				$(this).detach().appendTo('ul#ticker').removeAttr('style');	
			});
			ticker();
		}, 4000);
	};
	ticker();
	$(window).load(function() {
		$('.flexslider').flexslider( {
			keyboardNav: 'true',
			smoothHeight: 'true',
			start: function(slider) {
			        slider.removeClass('loading');
			}				
		});
	});


	// Tabbed News
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	$("ul.tabs li").click(function() { 	//On Click Event
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});	
		
});