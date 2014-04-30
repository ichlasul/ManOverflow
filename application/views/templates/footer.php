<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<!-- Fallback kalau CDN gagal atau localhost -->
<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js">\x3C/script>')</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootbox.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.metadata.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.tablesorter.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.tablecloth.js'); ?>"></script>
 <script>
//         $(document).on("click", ".alert", function(e) {
//             bootbox.alert("Hello world!", function() {
//                 console.log("Alert Callback");
//             });
//         });
 </script>
<script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $("table").tablecloth({
          theme: "paper",
          striped: true,
          sortable: true,
          bordered: true,
          condensed: false
        });
      });
</script>