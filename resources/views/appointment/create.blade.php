@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>cadastro de doutor</h2><br/>
      <form method="post" action="{{url('appointments')}}" enctype="multipart/form-data">
        @csrf
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Date: </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="date">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="time">Time:</label>
              <input type="text" class="form-control" name="time">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </div>
      </form>
    </div>
     <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
 @endsection