    <!-- plugins:js -->
    <script src="{{ url('assets/admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ url('assets/admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('assets/admin/js/off-canvas.js') }}"></script>
    <script src="{{ url('assets/admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('assets/admin/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ url('assets/admin/js/dashboard.js') }}"></script>
    <script src="{{ url('assets/admin/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->

     <!-- Sweet Alert CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- summernote cdn -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- data table cdn js -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

  <!-- Summernote -->
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

  <!-- data table -->
  <script>
    $(document).ready(function() {
        $('#posts-table').DataTable();
    })
  </script>



