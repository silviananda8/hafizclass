</section>
 	<script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js" ></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.datetimepicker.full.min.js" ></script>
    <script src="<?= base_url('assets/'); ?>js/myjs.js" ></script>
    <script src="<?= base_url('assets/'); ?>js/jquery-ui-tambahan.js" ></script>
    <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery-ui.js" type="text/javascript"></script>

    <!-- Kalender -->
    <script type="text/javascript" src="<?php echo base_url().'assets/js/moment.min.js'; ?>"></script>     
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/fullcalendar/fullcalendar.js'; ?>"></script> 

	</body>
</html>

<script>
    $('#tanggal_upload').datepicker({ dateFormat: "yy-mm-dd"}).datepicker("setDate", new Date());
</script>

<script>

    function id_progress(id_progress,val){
        console.log(id_progress);//tampilin id progress
        console.log(val.value);//tampilin value

        var status_progress = (val.value);

        $.ajax ({
            type:"POST",
            data:'id_progress='+id_progress+'&status_progress='+status_progress,
            url:'<?= base_url()."santri/updateStatusHarian"?>',
            dataType: 'json',
            success: function(hasil){
                console.log(hasil);
            }
        });
    }

    function status_target(id_target,val){
        console.log(id_target);//tampilin id target
        console.log(val.value);//tampilin value

        var status_target = (val.value);

        $.ajax ({
            type:"POST",
            data:'id_target='+id_target+'&status_target='+status_target,
            url:'<?= base_url()."penguji/updateStatusTarget"?>',
            dataType: 'json',
            success: function(hasil){
                console.log(hasil);
            }
        });
    }

    function updatePenguji(id_santri,val){
        console.log(id_santri);//tampilin id santri
        console.log(val.value);//tampilin value

        var id_penguji = (val.value);

        $.ajax ({
            type:"POST",
            data:'id_santri='+id_santri+'&id_penguji='+id_penguji,
            url:'<?= base_url()."penguji/updatePenguji"?>',
            dataType: 'json',
            success: function(hasil){
                console.log(hasil);
            }
        });
    }
    
</script>

<!-- script kalender -->
<script type="text/javascript">
    var get_data        = '<?= $get_data;?>';
    var backend_url     = '<?= base_url();?>';

    $(document).ready(function() {
        $('.date-picker').datepicker();
        console.log(get_data);
        $('#calendarIO').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },

            defaultDate: moment().format('YYYY-MM-DD'),
            eventStartEditable: false,
            eventTextColor: "white",
            editable: false,
            eventLimit: false, // allow "more" link when too many events
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                $('#calendarIO').fullCalendar('unselect');
            },
            eventClick: function(event, element)
            {
                if(event.kode_user=="penguji"){
                    window.location.href = '<?= site_url('Penguji/subtargetTunggal/');?>'+event.id+'';
                }else{
                    window.location.href = '<?= site_url('santri/subtargetTunggal/');?>'+event.id+'';
                }
            },
            
            events: JSON.parse(get_data)
            });
    });

</script>
<!-- end script kalender -->