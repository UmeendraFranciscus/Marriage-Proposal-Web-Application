

<div class="container-fluid">
    <div class="row">

        <div class="col-lg-6">


            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <div id="result">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>



        </div>
        <script>

            $(document).ready(function () {

                $.ajax({url: "<?= site_url('Welcome/AccountPart') ?>", success: function (result) {
                        $("#result").html(result);
                        $('#myModal').modal('show');
                        alert(result);
                    }});

            });
        </script>
