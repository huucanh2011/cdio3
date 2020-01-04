<div class="modal modal-danger fade" id="modal_delete">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-center">Xác nhận xoá</h4>
      </div>
      <form action="" method="post">
        @csrf
        @method('delete')
        <div class="modal-body">
          <p class="text-center">Bạn có chắc chắn muốn xoá&hellip;</p>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline" data-dismiss="modal">Không</button>
          <button type="submit" class="btn btn-outline">Có</button>
          </div>
        </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->