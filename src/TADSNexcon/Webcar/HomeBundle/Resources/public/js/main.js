$(document).ready(function() {

    //$("html").niceScroll();
    var brandId, vehicleId, modelId, modelColorId, kitIds = [], 
    acessoriesIds = [], concessionaryIds  = [];
    
    var colorSrc, modelName, colorName, kitNames = [], acessoryNames = [], concessionaryNames = [];
    
    var modelPrice = 0, colorPrice = 0, kitsPrice = 0, acessoriesPrice = 0, totalPrice = 0;
    
    map = new GMaps({
        zoom: 10,
        el: '#map-canvas',
        lat: -23.549664, 
        lng: -46.635811
    });
    
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

//    $steps.click(function(){
//        var index = $(this).index();
//        if(index <= stepsUnlocked){
//            gotoPage($(this).index());
//        }
//    });

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
        $pages = $main.children('section.page');
        $pages.each(function() {
            var $page = $(this);
            $page.data('originalClassList', 'page container-fluid');
        });
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
            stepsUnlocked = current + 1;
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
        
        brandId = $(this).attr('data-id');
        $('#page-2').load('brand/' + brandId, function(){
            nextPage();
            
        });
        
    });
    
    //vehicles
    $("#page-2").on('click', 'article', function(event){
        var $this = $(event.target).closest('article');
        vehicleId = $this.attr('data-id');
        $('#page-3').load('vehicle/' + vehicleId, function(){
            nextPage();
        });
        
    });
    
    //models
    $("#page-3").on('click', 'article', function(){
        var $this = $(event.target).closest('article');
        modelId = $this.attr('data-id');
        modelName = $this.attr('data-name');
        modelPrice = $this.attr('data-price');
        $.get('model/' + modelId, function( data ){
            console.log("removing pages");
            $('#page-4').remove();
            $('#page-5').remove();
            $(data).insertAfter("#page-3");
            nextPage();
        });
        recalculateTotal();
    });
    
    //color
    $("#pt-main").on('click', '#page-4 article', function(){
        var $this = $(event.target).closest('article');
        colorSrc = $this.attr('data-src');
        modelColorId = $this.attr('data-id');
        colorPrice = $this.attr('data-price');
        colorName = $this.attr('data-name');
        $("#model-color").attr('src', colorSrc);
        $("#model-color").attr('data-id', modelColorId);
        $("#model-color").attr('data-price', colorPrice);
        $("#model-color").attr('data-name', colorName);
        recalculateTotal();
    });
    
    //color
    $("#pt-main").on('click', '#confirm-color', function(){
        colorSrc = $("#model-color").attr('src');
        modelColorId = $("#model-color").attr('data-id');
        colorPrice = $("#model-color").attr('data-price');
        colorName = $("#model-color").attr('data-name');
        nextPage();
        recalculateTotal();
    });
    
    //acessories
    $("#pt-main").on('click', '#confirm-acessories',function(){
        $.getJSON('api/concessionary/' + brandId)
        .done(function(data){
            map.removeMarkers();
            concessionaryIds = [];
            $("#concessionary-list").empty();
            var concessionaries = data.concessionaries;
            var i = 0;
            var count = concessionaries.length;
            var c;
            for (i = 0; i < count; i++){
                c = concessionaries[i];
                map.addMarker({
                    lat: c.lat,
                    lng: c.lng,
                    details: c,
                    infoWindow: {
                        content: "<h3>" + c.name + "</h3><button data-id='" + 
                                c.id + "' data-name='" + 
                                c.name + "' class='button select-concessionary'>Selecionar</button>"
                    }
                });
            }
            nextPage();
        });
        
    });
    
    
    $("#confirm-concessionaries").on('click', function(){
        $("#selected-model").html(modelName);
        $("#selected-color").html(colorName);
        var itens = "";
        var i = 0;
        var count = kitNames.length;
        for (i = 0; i < count; i++){
            itens += "<li>" + kitNames[i] + "</li>";
        }
        $("#selected-kits").html(itens);
        count = acessoryNames.length;
        itens = "";
        for (i = 0; i < count; i++){
            itens += "<li>" + acessoryNames[i] + "</li>";
        }
        $("#selected-acessories").html(itens);
        count = concessionaryNames.length;
        itens = "";
        for (i = 0; i < count; i++){
            itens += "<li>" + concessionaryNames[i] + "</li>";
        }
        $("#selected-concessionaries").html(itens);
        nextPage();
        
    });
    
    $("#map-canvas").on('click', '.select-concessionary',function(event){
       var $this = $(event.target).closest('.select-concessionary');
       if(concessionaryIds.length < 3){
           $("#concessionary-list").append("<h3>" + $this.attr("data-name") + "</h3>");
           concessionaryIds.push($this.attr("data-id"));
           concessionaryNames.push($this.attr("data-name"));
       }
       
    });
    
    
    $("#pt-main").on('click', '.acessory-block',function(event){
        var $this = $(event.target).closest('.acessory-block');
        toggleAcessoryBlock($this);
        if($this.hasClass('kit')){
            var acessoriesIds = $this.attr('data-acessories').split(",");
            var i = 0;
            var acessoriesCount = acessoriesIds.length;
            for (i = 0; i < acessoriesCount; i++){
                var acessoryId = acessoriesIds[i];
                $('.acessory-block').each(function(){
                    if($(this).attr('data-id') == acessoryId){
                        if(!$(this).hasClass('active')){
                            toggleAcessoryBlock($(this));
                        }
                    }
                });
            }
        }
        recalculateAcessoriesTotal();
        recalculateTotal();
    });
    
    function toggleAcessoryBlock($block){
        $block.toggleClass("active");
        if($block.hasClass("active")){
            $block.find(".btn-acessory-label").html("Remover");
        }
        else {
            $block.find(".btn-acessory-label").html("Adicionar");
        }
    }
    
    $("#btn-register").click(function(){
       $("#modal").fadeIn("fast"); 
    });
 
    // bind form using 'ajaxForm' 
    $('#form-register').ajaxForm({
        target:        '#modal-response',
        beforeSubmit: function(){
            console.log("sending form...");
        },
        success: function(){
            console.log("sucess");
            $("#modal").fadeOut("fast");
        }
    }); 
    
    function recalculateAcessoriesTotal(){
        
    }
    
    
    
    function recalculateTotal(){
        totalPrice = parseInt(modelPrice) + parseInt(colorPrice) + 
                     parseInt(acessoriesPrice) + parseInt(kitsPrice);
        $("#total-price").html(totalPrice);
    }
    
});
