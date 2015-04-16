////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Variables Start                                                                                    */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
var $ = jQuery.noConflict();
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Variables End                                                                                      */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/



/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Document Ready Function Starts                                                                     */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
jQuery(document).ready(function($){
			
	
	
	// initial settings start
	var mainMenuHeight = $('.mainMenuOuterWrapper').outerHeight();
	var shoppingCartHeight = $('.shoppingCartWrapper').outerHeight();
	
	var headerSectionAnimation = 'complete';
	var currentHeaderSection = 'none';
	var tempDelay = 0;
	
	$('.mainMenuOuterWrapper').css('margin-top', -mainMenuHeight);
	$('.shoppingCartWrapper').css('margin-top', -shoppingCartHeight);
	
	var windowWidth = $(window).width() - 48;
		
	var lightboxInitialWidth = windowWidth;
	var lightboxInitialHeight = 220;
	// initial settings end


     
	// main menu and shopping cart functions start
	function headerSection(section, sectionButton){
		
		mainMenuHeight =  $('.mainMenuOuterWrapper').outerHeight();
		shoppingCartHeight = $('.shoppingCartWrapper').outerHeight();
		
		if(headerSectionAnimation == 'complete' && currentHeaderSection != sectionButton){
			
			headerSectionAnimation = 'incomplete';
			
			if(currentHeaderSection == 'shoppingCart' && sectionButton == 'mainMenu'){
				
				tempDelay = 600;
				$('.shoppingCartWrapper').stop(true, true).animate({'margin-top': -shoppingCartHeight}, 600, 'easeOutQuart', function(){
					
					currentHeaderSection = 'none'; 
					$('.shoppingCartWrapper').css('display', 'none'); 
					$(section).css('display', 'block');
					$('.mainMenuOuterWrapper').css('margin-top', -mainMenuHeight);
					$('.shoppingCartWrapper').css('margin-top', -shoppingCartHeight);
					backToTop();
					
				});
			
			} else if(currentHeaderSection == 'mainMenu' && sectionButton == 'shoppingCart'){
			   
			    tempDelay = 600;
				$('.mainMenuOuterWrapper').stop(true, true).animate({'margin-top': -mainMenuHeight}, 600, 'easeOutQuart', function(){
					
					currentHeaderSection = 'none'; 
					$('.mainMenuOuterWrapper').css('display', 'none'); 
					$(section).css('display', 'block');
					$('.mainMenuOuterWrapper').css('margin-top', -mainMenuHeight);
					$('.shoppingCartWrapper').css('margin-top', -shoppingCartHeight);
					backToTop();
				
				});
			
			} else {
				tempDelay = 0;	
				$(section).css('display', 'block');
			}
			
			$(section).stop(true, true).delay(tempDelay).animate({'margin-top': 0}, 600, 'easeInQuart', function(){headerSectionAnimation = 'complete'; currentHeaderSection = sectionButton;});
		
		} else if(headerSectionAnimation == 'complete' && currentHeaderSection == sectionButton){
			
			headerSectionAnimation = 'incomplete';
			
			if(currentHeaderSection == 'mainMenu'){
				var tempSectionHeight = -mainMenuHeight;
			} else if(currentHeaderSection == 'shoppingCart'){
				var tempSectionHeight = -shoppingCartHeight;
			};
			
			$(section).stop(true, true).animate({'margin-top': tempSectionHeight}, 600, 'easeOutQuart', function(){headerSectionAnimation = 'complete'; currentHeaderSection = 'none'; backToTop();});
			
		};
		
	};	
	
	$('.mainMenuButton').click(function(){
		
		headerSection('.mainMenuOuterWrapper', 'mainMenu');
		
		return false;
		
	});

	// 取消购物车滑出效果  --by google
	// $('.shoppingCartButton').click(function(){
		
	// 	headerSection('.shoppingCartWrapper', 'shoppingCart');
		
	// 	return false;
		
	// });
	// main menu and shopping cart functions end
	
	
	
	// gallery functions start
	$('.singleProductGalleryMenu > li > a').click(function(){
		
		var galleryIndex = $(this).parent().index();
		
		$('.currentSingleProductGalleryMenuItem').removeClass('currentSingleProductGalleryMenuItem');
		$(this).parent().addClass('currentSingleProductGalleryMenuItem');
		
		$('.currentSingleProductGalleryItem').removeClass('currentSingleProductGalleryItem');
		$('.singleProductGallery > .singleProductGalleryItem').eq(galleryIndex).addClass('currentSingleProductGalleryItem');
		
		return false;
		
	});

	//liugu-详情页取消图片高度自适应
	
	function adaptSingleProductGallery(){
	
		$('.singleProductGallery').css('height', $('.singleProductGallery .currentSingleProductGalleryItem').outerHeight());
		
	};
	adaptSingleProductGallery();
	
	$('.singleProductGallery .currentSingleProductGalleryItem').load(function(){
		
		adaptSingleProductGallery();
		
	});
	// gallery functions end
	
	
	
	// adapt main menu function starts
	function adaptMainMenu(){
		
		if(currentHeaderSection == 'none'){
			
			$('.mainMenuOuterWrapper').css('margin-top', -$('.mainMenuOuterWrapper').height());
			$('.shoppingCartWrapper').css('margin-top', -$('.shoppingCartWrapper').height);
			
		};
		
	};
	// adapt main menu function ends
	
	
	//删除静态页面演示删除购物车功能
	// remove shopping cart/checkout product function starts
	// $('.shoppingCartRemoveProductButton, .checkoutRemoveProductButton').click(function(){
		
	// 	$(this).parent().parent().parent().fadeOut(300);
		
	// 	return false;
		
	// });
	// remove shopping cart/checkout product function ends
    
	
	
	// adapt portfolio function starts
	function adaptPortfolio(){
		
		$('.portfolioTwoItemsWrapper').css('width', $('.portfolioTwoPageWrapper').width() - 12 - 48);
		$('.portfolioTwoFilterableItemsWrapper').css('width', $('.portfolioTwoFilterablePageWrapper').width() - 12 - 48);
		
		var portfolioTwoItemWidth = ($('.portfolioTwoPageWrapper').width() - 96 - 36)/2;
		var portfolioTwoFilterableItemWidth = ($('.portfolioTwoFilterablePageWrapper').width() - 96 - 36)/2;
		
		$('.portfolioTwoItemWrapper').css('width', portfolioTwoItemWidth);
		$('.portfolioTwoFilterableWrapper .portfolioFilterableItemWrapper').css('width', portfolioTwoFilterableItemWidth);
		
	};
	
	adaptPortfolio();
	// adapt portfolio function ends
		
	
	
	// filterable portfolio functions start
	$('#portfolioMenuWrapper > li > a').click(function(){
		
		var filterVal = $(this).attr('data-type');
		
		if(filterVal != 'all'){
			
			$('.currentPortfolioFilter').removeClass('currentPortfolioFilter');
			
			$(this).addClass('currentPortfolioFilter');
			
			$('.portfolioFilterableItemWrapper').each(function(){
	            
				var itemCategories = $(this).attr("data-type").split(",");
				  
				if($.inArray(filterVal, itemCategories) > -1){
					
					$(this).addClass('filteredPortfolioItem');
					
					$('.filteredPortfolioItem').stop(true, true).animate({opacity:1}, 300, 'easeOutCubic');
					
				}else{
						
					$(this).removeClass('filteredPortfolioItem');
					
					if(!$(this).hasClass('filteredPortfolioItem')){
						
						$(this).stop(true, true).animate({opacity:0.3}, 300, 'easeOutCubic');
					
					};
					
				};
					
			});
		
		}else{
			
			$('.currentPortfolioFilter').removeClass('currentPortfolioFilter');
			
			$(this).addClass('currentPortfolioFilter');
			
			$('.filteredPortfolioItem').removeClass('filteredPortfolioItem');
			
			$('.portfolioFilterableItemWrapper').stop(true, true).animate({opacity:1}, 300, 'easeOutCubic');
			
		}
			
		return false;
	
	});
	// filterable portfolio functions end
	
	
	
	// drop-down widget function starts
	$('.drop-downText').click(function(){
		
		if(!($(this).parent().hasClass('drop-downActive'))){
		
			$('.drop-downWrapper').each(function(){
			
				if($(this).hasClass('drop-downActive')){
					$(this).removeClass('drop-downActive');
					$(this).find('> .drop-downItemsWrapper').stop(true, true).animate({height: 'hide'}, 300, 'easeOutCubic');
				};
			
			});
			
			$(this).parent().addClass('drop-downActive');
			
			$(this).parent().find('> .drop-downItemsWrapper').stop(true, true).animate({height: 'show'}, 300, 'easeOutCubic');
		
		} else {
			
			$(this).parent().find('> .drop-downItemsWrapper').stop(true, true).animate({height: 'hide'}, 300, 'easeOutCubic', function(){$(this).parent().removeClass('drop-downActive');});
			
		};
		
		return false;
		
	});
	
	$('.drop-downItem').click(function(){
		
		$(this).parent().parent().removeClass('drop-downActive');
			
		$(this).parent().parent().find('> .drop-downItemsWrapper').stop(true, true).animate({height:'hide'}, 300, 'easeOutCubic');
			
		$(this).parent().parent().find('.drop-downField').val($(this).attr('data-value'));
		
		var tempLabel = $(this).parent().parent().find('.drop-downText').attr('data-label');
		
		$(this).parent().parent().find('.drop-downText').text(tempLabel + ' (' + $(this).text() + ')');
		
	});
	// drop-down widget function ends
	
	
	
	// alert box widget function starts
	$('.alertBoxButton').click(function(){
		
		$(this).parent().fadeOut(300, function(){$(this).remove();});
		
		return false;
		
	});
	// alert box widget function ends
	
	
	
	// accordion widget function starts
	$('.accordionButton').click(function(e){
		 
		if($(this).hasClass('currentAccordion')){
			
			 $(this).parent().find('.accordionContentWrapper').stop(true, true).animate({height:'hide'}, 300, 'easeOutCubic', function(){$(this).parent().find('.accordionButton').removeClass('currentAccordion');});
			 
		}else{
			 
			$(this).parent().find('.accordionContentWrapper').stop(true, true).animate({height:'show'}, 300, 'easeOutCubic', function(){$(this).parent().find('.accordionButton').addClass('currentAccordion');});
		 
        };
		 
		return false;
		
	});
	// accordion widget function ends

	
	
	// back to top functions starts
	function backToTop(){
		
		$('body, html').stop(true, true).animate({scrollTop:0}, 1200,'easeOutCubic'); 
		
	};
	
	$('.backToTopButton').click(function(){
								   
	    backToTop();
		
		return false;
	
    });
	// back to top functions ends 
	
	
	
	// window resize functions start
	$(window).resize(function(){
		
		windowWidth = $(window).width() - 48;
		
		lightboxInitialWidth = windowWidth;
		
		lightbox();
		
		adaptMainMenu();
		
		adaptPortfolio();

		//liugu- 
		
		adaptSingleProductGallery();
									
	});
	// window resize functions end
	
	
	
	// nivo slider functions start
	$('#mainSlider').nivoSlider({
		
		controlNav: false,
		prevText: '',
        nextText: '' 
		
	});
	
	$('.previousSlideButton').click(function(){
		
		$('#mainSlider').find('a.nivo-prevNav').click();
		return false;
            
	});
	
	$('.nextSlideButton').click(function(){	
	
		$('#mainSlider').find('a.nivo-nextNav').click();
		return false;
			
	});
	// nivo slider functions end
	
	
	
	// lightbox functions start
	function lightbox(){
		
		$('.portfolioOneExpandButton, .portfolioFilterableExpandButton, .singleProjectExpandButton').colorbox({
		
			maxWidth: windowWidth,
			initialWidth: lightboxInitialWidth,
			initialHeight: lightboxInitialHeight
			
		});
		
	};
	
	lightbox();
	// lightbox functions end



});
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////// Document Ready Function Ends                                                                       */
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/