@extends('layouts.app')

@section('title', 'Topup')

@section('sidebar')
    @parent

@endsection

@section('content')

<section class="content-header">
      <h1>
        Topup  
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Topup</li>
       
      </ol>

</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
    	<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="title">Topup</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body ">
            <form method="POST" action="{{route('users.proccessTopup')}}">
            	@csrf
               <div class="form-group">
                <label>Amount Of Money</label>
                <input type="number" name="amount" class="form-control">
                
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Topup">
              </div>
            </form>  
          </div>
      </div>
    </div>
</div>
</section>
@endsection