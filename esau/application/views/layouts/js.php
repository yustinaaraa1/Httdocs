<!-- Mainly scripts -->


<script src="<?=base_url() ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?=base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url() ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>

<script src="<?=base_url() ?>assets/js/plugins/dataTables/datatables.min.js"></script>

<script src="<?=base_url() ?>assets/js/plugins/autocomplete/jquery.mockjax.js"></script>
<script src="<?=base_url() ?>assets/js/plugins/autocomplete/jquery.autocomplete.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?=base_url()?>assets/js/inspinia.js"></script>
<script src="<?=base_url()?>assets/js/plugins/pace/pace.min.js"></script>
<!--<script src="<?=base_url()?>assets/file_js/config.js"></script>-->

<!--Sweetalert-->
<script src="<?=base_url()?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Data picker -->
<script src="<?=base_url()?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- iCheck -->
<script src="<?=base_url()?>assets/js/plugins/iCheck/icheck.min.js"></script>

<script>
    $(document).ready(function() {
        
        $('.dataTables-example').DataTable({
            "dom": 'lTfigt',
            "tableTools": {
                "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
            }
        });

        $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

       


        $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

          
        /* Init DataTables */
        var oTable = $('#editable').DataTable();



    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData( [
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row" ] );

    }
</script>


<?php
/*
if($dashboard==true){
?>
    <!-- Flot -->
    <script src="<?php echo base_url();?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/flot/jquery.flot.time.js"></script>
    
        <!-- EayPIE -->
    <script src="<?php echo base_url();?>assets/js/plugins/easypiechart/jquery.easypiechart.js"></script>
<script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [

            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);




        });
<?php
} */
?>
    </script>