$(document).ready(function() {

    //$("html").niceScroll();
    
    var $main = $('#pt-main'),
        $pages = $main.children('section.page'),
        $steps = $('nav li'),
        //$navIndicator = $("#nav-indicator"),
        $nextButton = $('#next-button'),
        $prevButton = $('#prev-button'),
        pagesCount = $pages.length,
        current = 0,
        stepsUnlocked = 6,
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
       gotoPage($(this).index());
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
            gotoPage(current + 1);
        }
        else {
            gotoPage(0);
        }
    }

    function previousPage() {
        if (current > 0) {
            gotoPage(current - 1);
        }
        else {
            gotoPage(pagesCount - 1);
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
    
    $("#page-1 article").click(function(){
        nextPage();
    });
    
    $("#page-2 article").click(function(){
        nextPage();
    });
    
    $("#page-3 article").click(function(){
        nextPage();
    });
    
    $("#confirm-color").click(function(){
        nextPage();
    });
    $("#confirm-acessories").click(function(){
        nextPage();
    });
    
    $(".acessory-block").click(function(){
        var $this = $(this);
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
