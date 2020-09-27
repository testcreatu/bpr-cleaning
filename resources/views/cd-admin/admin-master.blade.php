<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>BPR CLEANING | Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/css/adminstyle.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{url('public/cd-admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{url('public/cd-admin/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{url('public/cd-admin/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{url('public/cd-admin/assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/cd-admin/assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{url('public/cd-admin/assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> 
</head>



<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">

    <div class="page-wrapper">

        @include('cd-admin.header.header')

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        

        <!-- BEGIN CONTAINER -->
        <div class="page-container">

            @include('cd-admin.header.sidebar')

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    @yield('content')

                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

        </div>
        <!-- END CONTAINER -->


        @include('cd-admin.footer.footer')
    </div>

</body>


    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{url('public/cd-admin/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/js/adminjs.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('public/cd-admin/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/amcharts/amstockcharts/amstock.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/global/plugins/jquery-repeater/jquery.repeater.js')}}" type="text/javascript"></script>

<script src="{{url('public/cd-admin/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{url('public/cd-admin/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('public/cd-admin/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/pages/scripts/components-editors.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/pages/scripts/form-validation.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/pages/scripts/ui-modals.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/pages/scripts/form-repeater.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/pages/scripts/components-bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{url('public/cd-admin/assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/cd-admin/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote();
  });
</script>

<script>
  $(document).ready(function(){
    $('.add_another_benifits').click(function() {
     var random = Math.ceil(Math.random()*100) << 0;
     $("#card_benifits").append('<div class="group{{ $errors->has('benifits[]') ? ' has-error' : '' }}" id="benifits'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Benifits</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="benifits[]" value="" value="" placeholder="Enter Benifits" ></div></div></div><label class="col-sm-8 control-label"></label><input type="button" class="remove btn btn-danger"  onclick="removeDynamic(\'benifits'+random+'\')" id="close" value="Delete Card"/></div>');

     $('.group').on('click','.remove',function() {
        $(this).parent().remove();
    });

 });
})
</script>


<script>
  $(document).ready(function(){
    $('.add_another_features').click(function() {
     var random = Math.ceil(Math.random()*100) << 0;
     $("#card_features").append('<div class="group{{ $errors->has('features[]') ? ' has-error' : '' }}" id="features'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Features</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="features[]" value="" value="" placeholder="Enter Feature" ></div></div></div><label class="col-sm-8 control-label"></label><input type="button" class="remove btn btn-danger"  onclick="removeDynamic(\'features'+random+'\')" id="close" value="Delete Card"/></div>');

     $('.group').on('click','.remove',function() {
        $(this).parent().remove();
    });

 });
})
</script>

<script>
    $(document).ready(function(){
        $('.add_another').click(function() {
            var random = Math.ceil(Math.random()*100) << 0;
            $("#card").append('<div class="group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}" id="'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Title</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="sub_title[]" value="{{old('sub_title[]')}}" value="" placeholder="Enter Title" ></div></div></div><div class="form-group{{ $errors->has('sub_description[]') ? ' has-error' : '' }}"><label class="col-sm-3 control-label"> Description</label><div class="col-sm-6"><textarea type="text" name="sub_description[]" class="form-control summernote" rows="5" id="inputDescription3" value="" placeholder="Enter Description">{{old('sub_description[]')}}</textarea></div></div></div><input type="button" class="remove btn btn-danger" onclick="removeDynamic('+random+')" id="close" value="Delete Card" style="margin-left:'+'315px'+';"/></div><label class="col-sm-8 control-label"></label></div>');



        });
    })
</script>

<script>
    $(document).ready(function(){
        $('.add_another_measures').click(function() {
            var random = Math.ceil(Math.random()*100) << 0;
            $("#card_measures").append('<div class="group {{ $errors->has('measures_title[]') ? ' has-error' : '' }}" id="measures'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Measures Title</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="measures_title[]" value="{{old('measures_title[]')}}" value="" placeholder="Enter Measures Title" ></div></div></div><div class="form-group{{ $errors->has('measures_summary[]') ? ' has-error' : '' }}"><label class="col-sm-3 control-label">Summary</label><div class="col-sm-6"><textarea type="text" name="measures_summary[]" class="form-control "  rows="5" id="inputDescription3" value="" placeholder="Enter Measures Summary" value="{{old('measures_summary[]')}}"></textarea></div></div><input type="button" class="remove btn btn-danger" onclick="removeDynamic(\'measures'+random+'\')" id="close" value="Delete Card" style="margin-left:'+'315px'+';"/></div><label class="col-sm-8 control-label"></label></div>');
        });
    })
</script>

<script>
    $(document).ready(function(){
        $('.add_another_faq').click(function() {
            var random = Math.ceil(Math.random()*100) << 0;
            $("#faqCard").append('<div class="group {{ $errors->has('name[]') ? ' has-error' : '' }}" id="'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Question</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="question[]" value="{{old('question[]')}}" value="" placeholder="Enter Question" ></div></div></div><div class="form-group{{ $errors->has('answer[]') ? ' has-error' : '' }}"><label class="col-sm-3 control-label"> Answer</label><div class="col-sm-6"><textarea type="text" name="answer[]" class="form-control "  rows="5" id="inputDescription3" value="" placeholder="Enter  Answer" value="{{old('answer[]')}}"></textarea></div></div><input type="button" class="remove btn btn-danger" onclick="removeDynamicMilestone('+random+')" id="close" value="Delete Card" style="margin-left:'+'315px'+';"/></div><label class="col-sm-8 control-label"></label></div>');
        });
    })
</script>


<script>
    $(document).ready(function(){
        $('.add_another_feature').click(function() {
            var random = Math.ceil(Math.random()*100) << 0;
            $("#featureCard").append('<div class="group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}" id="'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Title</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="sub_title[]" value="{{old('sub_title[]')}}" value="" placeholder="Enter Title" ></div></div></div><div class="form-group{{ $errors->has('sub_summary[]') ? ' has-error' : '' }}"><label class="col-sm-3 control-label"> Description</label><div class="col-sm-6"><textarea type="text" name="sub_summary[]" class="form-control summernote" rows="5" id="inputDescription3" value="" placeholder="Enter Description">{{old('sub_summary[]')}}</textarea></div></div><div class="form-group {{ $errors->has('feature_image[]') ? ' has-error' : '' }} "><label for="exampleInputFile" class="col-md-3 control-label">Upload Section Image</label><div class="col-md-6"><input type="file" name="feature_image[]" id="exampleInputFile"><p class="help-block"> Upload Section Image. </p></div></div><input type="button" class="remove btn btn-danger" onclick="removeDynamic('+random+')" id="close" value="Delete Card" style="margin-left:'+'315px'+';"/></div><label class="col-sm-8 control-label"></label></div>');
        });
    })
</script>


<script>
    $(document).ready(function(){
        $('.add_another_room').click(function() {
            var random = Math.ceil(Math.random()*100) << 0;
            $("#card-room").append('<div class="group {{ $errors->has('room_title[]') ? ' has-error' : '' }}" id="'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Title</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="room_title[]" value="{{old('room_title[]')}}" value="" placeholder="Enter Room Title" ></div></div></div><div class="form-group{{ $errors->has('room_summary[]') ? ' has-error' : '' }}"><label class="col-sm-3 control-label"> Description</label><div class="col-sm-6"><textarea type="text" name="room_summary[]" class="form-control summernote" rows="5" id="inputDescription3" value="" placeholder="Enter Room Summary">{{old('room_summary[]')}}</textarea></div></div><div class="form-group {{ $errors->has('room_image[]') ? ' has-error' : '' }} "><label for="exampleInputFile" class="col-md-3 control-label">Upload Room Image</label><div class="col-md-6"><input type="file" name="room_image[]" id="exampleInputFile"><p class="help-block"> Upload Room Image. </p></div></div><input type="button" class="remove btn btn-danger" onclick="removeDynamic('+random+')" id="close" value="Delete Card" style="margin-left:'+'315px'+';"/></div><label class="col-sm-8 control-label"></label></div>');
        });
    })
</script>

<script>
    $(document).ready(function(){
        $('.add_another_reason').click(function() {
            var random = Math.ceil(Math.random()*100) << 0;
            $("#card_reasons").append('<div class="group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}" id="reason'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Title</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="sub_title[]" value="{{old('sub_title[]')}}" value="" placeholder="Enter Title" ></div></div></div><div class="form-group{{ $errors->has('sub_summary[]') ? ' has-error' : '' }}"><label class="col-sm-3 control-label"> Description</label><div class="col-sm-6"><textarea type="text" name="sub_summary[]" class="form-control " rows="5" id="inputDescription3" value="" placeholder="Enter Description">{{old('sub_summary[]')}}</textarea></div></div><div class="form-group {{ $errors->has('sub_image[]') ? ' has-error' : '' }} "><label for="exampleInputFile" class="col-md-3 control-label">Image</label><div class="col-md-6"><input type="file" name="sub_image[]" id="exampleInputFile"><p class="help-block"> Upload Reason Image. </p></div></div><input type="button" class="remove btn btn-danger" onclick="removeDynamic(\'reason'+random+'\')" id="close" value="Delete Card" style="margin-left:'+'315px'+';"/></div><label class="col-sm-8 control-label"></label></div>');
        });
    })
</script>

<script>
    $(document).ready(function(){
        $('.add_another_pricing').click(function() {
            var random = Math.ceil(Math.random()*100) << 0;
            $("#card-pricings").append('<div class="group {{ $errors->has('duration[]') ? ' has-error' : '' }}" id="'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Title</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="duration[]" value="{{old('duration[]')}}" value="" placeholder="Enter Duration" ></div></div></div><div class="form-group{{ $errors->has('price[]') ? ' has-error' : '' }}"><label class="col-sm-3 control-label"> Price</label><div class="col-sm-6"><input type="number" name="price[]" class="form-control" id="inputDescription3" value="" placeholder="Enter Price">{{old('price[]')}}</textarea></div></div></div><input type="button" class="remove btn btn-danger" onclick="removeDynamic('+random+')" id="close" value="Delete Pricing" style="margin-left:'+'315px'+';"/></div><label class="col-sm-8 control-label"></label></div>');
        });
    })
</script>

<script>
    $(document).ready(function(){
        $('.add_another_extra').click(function() {
            var random = Math.ceil(Math.random()*100) << 0;
            $("#card-extra").append('<div class="group {{ $errors->has('extra_title[]') ? ' has-error' : '' }}" id="'+random+'"><hr><div class="form-group"><label class="col-sm-3 control-label">Title</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="extra_title[]" value="{{old('extra_title[]')}}" value="" placeholder="Enter Title" ></div></div></div><div class="form-group{{ $errors->has('extra_price[]') ? ' has-error' : '' }}"><label class="col-sm-3 control-label"> Price</label><div class="col-sm-6"><input type="number" name="extra_price[]" class="form-control" id="inputDescription3" value="" placeholder="Enter Price">{{old('extra_price[]')}}</textarea></div></div></div><input type="button" class="remove btn btn-danger" onclick="removeDynamic('+random+')" id="close" value="Delete Extras" style="margin-left:'+'315px'+';"/></div><label class="col-sm-8 control-label"></label></div>');
        });
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script>
  $(document).ready(function() {
      $('#summernote').summernote();

  });
</script>
<script>
  $(document).ready(function() {
      $('#summernote1').summernote();

  });
</script>
<script>
  $(document).ready(function() {
    $('#summernote2').summernote();
});
</script>



</html>