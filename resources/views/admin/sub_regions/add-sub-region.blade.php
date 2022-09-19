
{{-- we will copy this modal and make some changes for the bus modal --}}
{{-- it's just a simple bootstrap modal okay  --}}
<!-- Modal -->
<div class="modal fade" id="exampleModalCenteraddbus" tabindex="-1" role="dialog" 
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle" align="center">
            <i class="glyphicon glyphicon-log-in">Add New Sub Region</i></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action="{{ route('sub-region.store') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <fieldset>
                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Seat No</label> -->
                                <select name="region_id" class="form-control">
                                    <option value="">Select Region</option>
                                    @foreach ($region as $data)
                                    <option value="{{$data->region_id}}">{{$data->region_name}}</option>
                                    @endforeach
                                </select>
                          </div>
                        </div>
                      <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="sub_region_name"  class="form-control" aria-describedby="emailHelp"
                                 placeholder="Enter Sub Region Name" type="text">
                          </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="sub_region_code"  class="form-control" aria-describedby="emailHelp" 
                                placeholder="Enter Sub Region Code" type="text">
                          </div>
                          </div>
                          </div>
                          <div class="col-md-3">
                          <div class="form-group">
                                <input name="status"  aria-describedby="emailHelp" type="checkbox">
                                <label for="exampleInputEmail1">Active</label>
                          </div>
              </div>
              </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register Sub Region</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
  
  