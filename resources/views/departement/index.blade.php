@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Departement
        <small>Main Departement</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>        
        <li class="active">Departement</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">              
              <button type="button" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#modal-default">Add New <i class="fa fa-plus"></i></button>
              <button type="button" class="btn btn-primary btn-flat">Delete <i class="fa fa-trash"></i></button>
              <button type="button" class="btn btn-primary btn-flat">Active <i class="fa fa-check"></i></button>
              <button type="button" class="btn btn-primary btn-flat">Inactive <i class="fa fa-ban"></i></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox"></th>
                  <th>No</th>
                  <th>Departement Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>1</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>2</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>                	
                  <td>3</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>                	
                  <td>4</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Departement Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add New</h4>
          </div>
          <div class="modal-body">
			<form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Departement Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Departement Name">
                </div>
				<div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Status</label><br>
				  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" >	Active 
				  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" style="margin-left: 20px">	Inactive                  
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

  </div>

@endsection