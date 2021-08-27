
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Payment </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form id="addNew" action="{{ url('update_payment') }}" method="post"  >
                @csrf
        <div class="row">
        <input type="hidden" name="id" class="edit_id">
        <div class="col-lg-6">
            <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control edit_name" name="name"  placeholder="Enter Name">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
            <label for="exampleInputEmail1">Ratio</label>
            <input type="text" class="form-control edit_ratio" name="ratio"  placeholder="Enter Ratio">
            </div>
        </div>

        </div>
        <center>
         <input type="submit" value="Save" class="btn btn-primary">
        </center>

            </form>
      </div>
    </div>
  </div>
</div>

<script>


    $('.edit').click(function(){
    var id = $(this).attr('data-id');

        $.ajax({
            url:"{{ url('edit_payment') }}",
            method:"post",
            data:{id:id,"_token": "{{ csrf_token() }}"},
        success:function(data)
        {
            var GetData =JSON.parse(data);
            $('.edit_id').val(GetData.id);
            $('.edit_name').val(GetData.name);
            $('.edit_ratio').val(GetData.ratio);
        }

    })
    })


    </script>
