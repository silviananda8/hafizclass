</section>
 	<script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js" ></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.datetimepicker.full.min.js" ></script>
    <script src="<?= base_url('assets/'); ?>js/myjs.js" ></script>
    <script src="<?= base_url('assets/'); ?>js/jquery-ui-tambahan.js" ></script>
    <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery-ui.js" type="text/javascript"></script>
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