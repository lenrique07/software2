<?php
?>

<style>
    .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
</style>

<meta charset="UTF-8">
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="vista/assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="vista/assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="vista/assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="vista/assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="vista/assets/images/icons/favicon.png">



<link rel="stylesheet" type="text/css" href="vista/assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="vista/assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="vista/assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="vista/assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="vista/assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="vista/assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="vista/assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="vista/assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="vista/assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="vista/assets/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="vista/assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="vista/assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="vista/assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="vista/assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="vista/assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="vista/assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="vista/assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="vista/assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="vista/assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="vista/assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="vista/assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="vista/assets/helpers/admin-responsive.css">

<!-- JS Core -->
<script type="text/javascript" src="vista/assets/js-core/jquery-core.js"></script>
<script type="text/javascript" src="vista/assets/js-core/jquery-ui-core.js"></script>
<script type="text/javascript" src="vista/assets/js-core/jquery-ui-widget.js"></script>
<script type="text/javascript" src="vista/assets/js-core/jquery-ui-mouse.js"></script>
<script type="text/javascript" src="vista/assets/js-core/jquery-ui-position.js"></script>
<!--<script type="text/javascript" src="vista/assets/js-core/transition.js"></script>-->
<script type="text/javascript" src="vista/assets/js-core/modernizr.js"></script>
<script type="text/javascript" src="vista/assets/js-core/jquery-cookie.js"></script>

<!--<link rel="stylesheet" type="text/css" href="vista/assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="vista/assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="vista/assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="vista/assets/widgets/datatable/datatable-tabletools.js"></script>
<script type="text/javascript" src="vista/assets/widgets/datatable/datatable-reorder.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#datatable-tabletools').DataTable();
        var tt = new $.fn.dataTable.TableTools( table );
        $( tt.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');
        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');
        $('.dataTables_filter input').attr("placeholder", "Search...");
    } );
    $(document).ready(function() {
        $('#datatable-reorder').DataTable( {
            dom: 'Rlfrtip'
        });
        $('#datatable-reorder_length').hide();
        $('#datatable-reorder_filter').hide();
    });
    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });
</script>

<div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
    <div id="theme-switcher-wrapper">
        <div class="scroll-switcher">
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                </li>
            </ul>
            <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
        </div>
    </div>
</div>

