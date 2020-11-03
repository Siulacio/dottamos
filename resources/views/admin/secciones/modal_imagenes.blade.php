<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" id="myModalVer" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myExtraLargeModalLabel">{{$titulo}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="" id="img_producto" width="400">
                </center>
                <p id="descripcion_producto"> {{$mensaje}} </p>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>