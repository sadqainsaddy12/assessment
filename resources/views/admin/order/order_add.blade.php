
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create New Order </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form id="addNew" action="{{ url('create_order') }}" method="post"  >
                @csrf
        <div class="row">

        <div class="col-lg-6">
            <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter Name">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <select name="payment_id" id="" class="form-control">
                @foreach ($payment_drop_down as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
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
