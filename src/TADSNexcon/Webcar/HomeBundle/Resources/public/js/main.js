$(document).ready(function() {

    //$("html").niceScroll();
    
    var $main = $('#pt-main'),
        $pages = $main.children('section.page'),
        $steps = $('nav li'),
        price = 0;
        //$navIndicator = $("#nav-indicator"),
        $nextButton = $('#next-button'),
        $prevButton = $('#prev-button'),
        pagesCount = $pages.length,
        current = 0,
        stepsUnlocked = 0,
        isAnimating = false,
        endCurrPage = false,
        endNextPage = false,
        animEndEventNames = {
        'WebkitAnimation': 'webkitAnimationEnd',
        'OAnimation': 'oAnimationEnd',
        'msAnimation': 'MSAnimationEnd',
        'animation': 'animationend'
        },
        // animation end event name
        animEndEventName = animEndEventNames[ Modernizr.prefixed('animation') ],
        // support css animations
        support = Modernizr.cssanimations;
        
    $pages.each(function() {
        var $page = $(this);
        $page.data('originalClassList', $page.attr('class'));
    });

    $steps.click(function(){
        var index = $(this).index();
        if(index <= stepsUnlocked){
            gotoPage($(this).index());
        }
    });

    $steps.eq(current).addClass('active-step');
    $pages.eq(current).addClass('page-current');

    $nextButton.on('click', function() {
        if (isAnimating) {
            return false;
        }
        nextPage();
    });

    $prevButton.on('click', function(){
        if (isAnimating) {
            return false;
        }
        previousPage();
    });
    
    function gotoPage(pageNumber){
        
        if (isAnimating || pageNumber === current || pageNumber > stepsUnlocked) {
            return false;
        }

        isAnimating = true;

        var $currPage = $pages.eq(current);
        var $currStep = $steps.eq(current);
        
        $currStep.removeClass("active-step");
        
        var outClass = '', inClass = '';
        
        if(current > pageNumber){
            outClass = 'page-scaleDown';
            inClass = 'page-moveFromTop page-ontop';
        }
        else {
            outClass = 'page-scaleDown';
            inClass = 'page-moveFromBottom page-ontop';
        }

        current = pageNumber;

        var $nextPage = $pages.eq(current).addClass('page-current');
        $steps.eq(current).addClass('active-step');

        $currPage.addClass(outClass).on(animEndEventName, function() {
            $currPage.off(animEndEventName);
            endCurrPage = true;
            if (endNextPage) {
                onEndAnimation($currPage, $nextPage);
            }
        });

        $nextPage.addClass(inClass).on(animEndEventName, function() {
            $nextPage.off(animEndEventName);
            endNextPage = true;
            if (endCurrPage) {
                onEndAnimation($currPage, $nextPage);
            }
        });
        
        //TweenLite.to($navIndicator, 0.6, { y: 90 * current, ease:Power2.easeOut } );

        if (!support) {
            onEndAnimation($currPage, $nextPage);
        }
        
    }

    function nextPage() {
        if (current < pagesCount - 1) {
            stepsUnlocked = current + 1
            gotoPage(stepsUnlocked);
        }
        else {
            gotoPage(0);
            stepsUnlocked = 0;
        }
    }

    function previousPage() {
        if (current > 0) {
            gotoPage(current - 1);
            stepsUnlocked = current;
        }
        else {
            gotoPage(pagesCount - 1);
            stepsUnlocked = pagesCount -1;
        }
    }

    function onEndAnimation($outpage, $inpage) {
        endCurrPage = false;
        endNextPage = false;
        resetPage($outpage, $inpage);
        isAnimating = false;
    }

    function resetPage($outpage, $inpage) {
        $outpage.attr('class', $outpage.data('originalClassList'));
        $inpage.attr('class', $inpage.data('originalClassList') + ' page-current');
    }
    

    var $window = $(window);
    var $pageContainer = $("#pt-main");
    $window.resize(function() {
        var width = $window.width();
        var height = $window.height();
        console.log('W: ' + width + ' H: ' + height);
        var pageWidth = width - 150;
        $pageContainer.css("width", pageWidth + "px" );
        
    }).resize();
    
    //brands
    $("#page-1 article").click(function(){
        
        var brandId = $(this).attr('data-id');
        $('#page-2').load('brand/' + brandId, function(){
            nextPage();
            
        });
        
    });
    
    //vehicles
    $("#page-2").on('click', 'article', function(event){
        $this = $(event.target).closest('.article');
        var vehicleId = $this.attr('data-id');
        $('#page-3').load('vehicle/' + vehicleId, function(){
            nextPage();
        });
        
    });
    
    //models
    $("#page-3").on('click', 'article', function(){
        $this = $(event.target).closest('.article');
        var modelId = $this.attr('data-id');
        $.get('model/' + modelId, function( data ){
            $('#page-4').remove();
            $('#page-5').remove();
            $('#page-6').remove();
            $(data).insertAfter("#page-3");
            nextPage();
        });
//        var jqxhr = $.ajax( "example.php" )
//        .done(function() {
//            alert( "success" );
//        });
    });
    
    //color
    $("#pt-main").on('click', '#confirm-color', function(){
        nextPage();
    });
    
    //acessories
    $("#pt-main").on('click', '#confirm-acessories',function(){
        nextPage();
    });
    
    
    $("#pt-main").on('click', '.acessory-block',function(event){
        var $this = $(event.target).closest('.acessory-block');
        $this.toggleClass("active");
        if($this.hasClass("active")){
            $this.find(".btn-acessory-label").html("Remover");
        }
        else {
            $this.find(".btn-acessory-label").html("Adicionar");
        }
        
    });
    
//    $(".btn-acessory").click(function(){
//        $(this).parent().toggleClass("active");
//    });

    
    
    
    
});
