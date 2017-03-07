/*
 ** FancyBox
 */
jQuery(document).ready(function($) {
    $(".fancybox").fancybox();
});

/*
 ** Masonry
 */
jQuery(document).ready(function($) {

    var $container = $('.gallery');

    $container.imagesLoaded(function() {
        $container.masonry({
            itemSelector: 'dl.gallery-item'
        });
    });

});

/*
 ** Responsive Menu
 */
jQuery(document).ready(function($) {
    $('.openresponsivemenu').click(function() {
        $('.container-menu').toggleClass("responsivemenu");
    });
});

jQuery(document).ready(function($) {
    jQuery(".panel-title").on('click', function() {
        var href = $(this).find('a').attr('href');
        jQuery(".panel-collapse.collapse.in:not(" + href + ")").removeClass('in');
    });


    /**
     * Free text search at header menu
     * 
     */
    jQuery(".law-search").on('click', function() {

        if (jQuery("#key").val() === '') {
            alert("You need to fill out Search Field");
            return;
        }
        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'free_text_search',
                title: jQuery("#key").val()
            },
            function(data) {
                $(".free_text_search_result").html(data);
            }
        );
    });

    /**
     * JUDGEMENT SEARCHING
     * @param  {[type]} ) {                   var _judge [description]
     * @return {[type]}   [description]
     */
    jQuery("#judgement").on('click', function() {
        var _judge = jQuery("input[name='judge']").val(),
            _free = jQuery("input[name='judge-free-search']").val(),
            _judgment = jQuery("input[name='judgment']").val(),
            _case = jQuery("#judge-subject").val(),
            _court = jQuery("#court-subject").val(),
            _petitioner = jQuery("input[name='petitioner']").val(),
            _field = jQuery("input[name='judge-field']:checked").val(),
            _from = jQuery("input#from").val(),
            _to = jQuery("input#to").val();

        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'judge',
                judge: _judge,
                judgment: _judgment,
                free: _free,
                court: _court,
                caseNo: _case,
                field: _field,
                petitioner: _petitioner,
                from: _from,
                to: _to
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });

    jQuery("#acts").on('click', function() {
        var _acts_rules = jQuery("#acts-rules").val();
        var _year = jQuery("#act-year").val();
        var _section = jQuery("#section-no").val();
        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'act',
                acts: _acts_rules,
                year: _year,
                section: _section
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });


    jQuery("#rules").on('click', function() {
        var _rules = jQuery("#rules-no").val();

        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'rule',
                rules: _rules
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });

    jQuery("#trade-search").on('click', function() {
        var _ftpTrade = jQuery("#ftpTrade").val();
        var _TradeNoticesDate = jQuery("#TradeNoticesDate").val();
        var _trade_subject = jQuery("#trade-subject").val();
        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'trade',
                ftp: _ftpTrade,
                date: _TradeNoticesDate,
                subject: _trade_subject
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });

    jQuery("#regulation-search").on('click', function() {
        var _year = jQuery("#regulation-year").val();
        var _subject = jQuery("#regulation-subject").val();
        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'regulation',
                year: _year,
                subject: _subject
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });

    jQuery(".form-search").on('click', function() {
        var _form_no = jQuery("input[name='form-no']").val(),
            _des = jQuery("input[name='des']").val();
        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'form',
                form_no: _form_no,
                des: _des
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });
    jQuery("#circular_search").on('click', function() {
        var _circular_section_no = jQuery("input[name='circular_section_no']").val(),
            _circular_subject = jQuery("input[name='circular_subject']").val();
        _year_of_issue = jQuery("input[name='year_of_issue']").val();
        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'circular',
                circular_section_no: _circular_section_no,
                circular_subject: _circular_subject,
                year_of_issue: _year_of_issue,
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });
    jQuery("#noti_search").on('click', function() {
        var _noti_no = jQuery("input[name='noti_no']").val(),
            _noti_subject = jQuery("input[name='noti_subject']").val();
        _noti_date = jQuery("input[name='noti_date']").val();
        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'noti',
                noti_no: _noti_no,
                noti_subject: _noti_subject,
                noti_date: _noti_date,
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });


    jQuery("#policy_search").on('click', function() {
        var _policy = jQuery("input[name='policy']").val(),
            _policy_detail = jQuery("input[name='policy_detail']").val();
        jQuery.post(
            base_url + "search.php", {
                uid: _uid,
                action: 'policy',
                policy: _policy,
                detail: _policy_detail,
            },
            function(data) {
                $("#results").html(data);
            }
        );
    });
});
