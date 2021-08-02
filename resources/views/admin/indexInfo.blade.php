@extends('admin.index')

@section('title')
    Restaurant Information
@endsection

@section('content')
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Restaurant Information</h4>
            <p class="mb-30">All bootstrap element classies</p>
        </div>
    </div>
        
    <form>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Hari Awal</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Johnny Brown">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Sampai Hari</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Johnny Brown">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Jam Buka</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Johnny Brown">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Jam Tutup</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Johnny Brown">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
							
@endsection

@section('second-card')
    
<div class="table-responsive">
	<table class="table table-striped">
	  <thead>
	    <tr>
          <th scope="col">No</th>
	      <th scope="col">Hari Awal</th>
          <th scope="col">Sampai Hari</th>
          <th scope="col">Jam Buka</th>
          <th scope="col">Jam Tutup</th>
          <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	    </tr>
	  </tbody>
	</table>
</div>
							
@endsection