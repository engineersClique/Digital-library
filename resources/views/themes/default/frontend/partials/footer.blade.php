<div class="modal fade" id="bookDetailsModal" tabindex="-1" role="dialog" aria-labelledby="bookDetailsModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="bookDetailsModalLabel">{{__('Book Details')}}</h4>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close')}}</button>
            </div>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--script src="https://code.jquery.com/jquery.js"></script-->
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/underscore-min.js') }}"></script>
<script src="{{ asset('js/vendor/intention.min.js') }}"></script>
<script src="{{ asset('js/vendor/context.min.js') }}"></script>
<script src="{{ asset('js/vendor/plugins.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.form.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $("#btn-upload").change(function () {
            $("#loader").show();
            $("#form-upload").submit();
        });
    });
</script>