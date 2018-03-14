<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bower_components/raphael/raphael.min.js"></script>

<script src="bower_components/morris.js/morris.min.js"></script>

<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="bower_components/moment/min/moment.min.js"></script>

<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<!-- boostrap toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- noUiSlider -->
<script src="bower_components/noUiSlider/nouislider.min.js"></script>

<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- Dropzone -->
<script src="bower_components/dropzone/dropzone.js"></script>



<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>

<script src="plugins/iCheck/icheck.min.js"></script>

<script>
    $(function () {
        $(".datepicker").datepicker();
    });

    $(function () {
        $('.val-li').click(function () {
            $value = '';
            string = '';
            $value = $(this).attr('data-content');
            var html = $value;
            string ='<div class="item-channel">'+
                        '<div class="col-md-4 fix-col">' +
                            '<a class="remove-val btn btn-sm btn-block btn-social btn-google">' +
                                '<i class="fa fa-google">'+
                                '</i> google <i class="delete-val fa fa-times pull-right"></i>'+
                            '</a>'+
                        '</div>'+
                        '<div class="col-md-8 fix-col">'+
                            '<div class="col-md-4">'+
                                '<input type="text" class="form-control pull-left" placeholder="100.000"> '+
                            '</div>'+
                        '<div class="col-md-3 paddingLeft0">'+
                            '<select class="form-control pull-left">'+
                                '<option>VND</option>'+
                                '<option>USD</option>'+
                            '</select>'+
                            '</div>'+
                        '</div>'+
                    '</div>';

            $("#append-val").append(string);
            $("#modal_add_route").modal('hide');
        });

        $(document).on('click', '.remove-val', function (e) {
            e.preventDefault();
            e.stopPropagation();
            var $this = $(this);
            $this.parents('div.item-channel').remove();
        });
    });

    // customer_goal page modal
    $(document).ready(function() {

        // slider-age
        var limitSlider = document.getElementById('slider-age');

        noUiSlider.create(limitSlider, {
            start: [16, 50], // 2 point to start
            connect: true, // control the (green) bar between the handles
            tooltips: true,
            step: 1,
            format: {
                from: function(value) {
                    return parseInt(value);
                },
                to: function(value) {
                    return parseInt(value);
                }
            },
            range: {
                'min': 0,
                'max': 65
            }
        });

        // Select2
        $("#e1").select2();

    });


    // checkall input checkbox
    $(function () {
        $('#check-all-checkbox').click(function () {
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function() {
                    this.checked = true;
                });
            }
            else {
                $(':checkbox').each(function() {
                    this.checked = false;
                });
            }
        });


        // page config domain
        $('#btn-process-add-domain').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            var $this = $(this);
            $this.hide();
            $('#input-add-domain-default').hide();
            $('#input-add-domain').css({"display": "inline-flex", "width": "112%"});
        });

        $('#remove-add-domain').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            $('#btn-process-add-domain').show();
            $('#input-add-domain-default').show();
            $('#input-add-domain').hide();
        })


    });


</script>
