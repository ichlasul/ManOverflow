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
<script src="<?php echo base_url('assets/js/typeahead.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-tags.js'); ?>"></script>
<!-- <script src="<?php echo base_url('assets/js/tagmanager.js'); ?>"></script> -->
<script src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
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

<script>
   var substringMatcher = function(strs) {
   return function findMatches(q, cb) {
    var matches, substringRegex;
 
    // an array that will be populated with substring matches
    matches = [];
 
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
 
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        // the typeahead jQuery plugin expects suggestions to a
        // JavaScript object, refer to typeahead docs for more info
        matches.push({ value: str });
      }
    });
 
    cb(matches);
  };
};
 
var states = <?php echo $listjadwal; ?>;

$('.typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  displayKey: 'value',
  source: substringMatcher(states)
});
</script>

 <script>
// $(".tm-input").tagsManager({
//       prefilled: null,
//       CapitalizeFirstLetter: false,
//       preventSubmitOnEnter: true, // deprecated
//       isClearInputOnEsc: true, // deprecated
//       AjaxPush: null,
//       AjaxPushAllTags: null,
//       AjaxPushParameters: null,
//       delimiters: [9, 13, 44], // tab, enter, comma
//       backspace: [8],
//       maxTags: 0,
//       hiddenTagListName: null, // deprecated
//       hiddenTagListId: null, // deprecated
//       replace: true,
//       output: null,
//       deleteTagsOnBackspace: true, // deprecated
//       tagsContainer: null,
//       tagCloseIcon: 'x',
//       tagClass: '',
//       validator: isvalid,
//       typeahead: true,
//       onlyTagList: true
//     });

// var states = <?php echo $listkaryawan; ?>;

// function isvalid (substring) {
//   return (states.indexOf(substring) > -1);
// }

 </script>

 <script>
// $(".tm-input1").tagsManager({
//       prefilled: null,
//       CapitalizeFirstLetter: false,
//       preventSubmitOnEnter: true, // deprecated
//       isClearInputOnEsc: true, // deprecated
//       AjaxPush: null,
//       AjaxPushAllTags: null,
//       AjaxPushParameters: null,
//       delimiters: [9, 13, 44], // tab, enter, comma
//       backspace: [8],
//       maxTags: 1,
//       hiddenTagListName: null, // deprecated
//       hiddenTagListId: null, // deprecated
//       replace: true,
//       output: null,
//       deleteTagsOnBackspace: true, // deprecated
//       tagsContainer: null,
//       tagCloseIcon: 'x',
//       tagClass: '',
//       validator: isvalid,
//       typeahead: true,
//       onlyTagList: true
//     });
// var states = <?php echo $listkaryawan; ?>;

// function isvalid (substring) {
//   return (states.indexOf(substring) > -1);
// }

 </script>

<script type="text/javascript">
        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });

            // $('.selectpicker').selectpicker('hide');
        });
</script>