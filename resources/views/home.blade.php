@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    @parent

@endsection

@section('content')
<section class="content-header">
      <h1>
      	Home
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-home"></i> Home</a></li>
       
      </ol>

</section>


<section class="content">
		<div class="row">
        	<div class="col-md-3">
        		<div class="box box-primary">
        			<div class="box-body box-profile">
			              <img class="profile-user-img img-responsive img-circle" src="user.png" alt="User profile picture">

			              <h3 class="profile-username text-center">{{ Session::get('user')->name}}</h3>

			            

			              <ul class="list-group list-group-unbordered">
			                <li class="list-group-item">
			                  {{Session::get('user')->email}}
			                </li>
			                 <li class="list-group-item">
			                  <b>Balance</b> <a class="pull-right">{{$data->balance}}</a>
			                </li>

			             
			              </ul>
			          </div>
        		</div>
			</div>
			<div class="col-md-9">
         		 <div class="nav-tabs-custom">
		            <ul class="nav nav-tabs">
		              <li class="active"><a href="#activity" data-toggle="tab">Transaction History</a></li>
                      
		            </ul>	
				<div class="tab-content">
					<div class="active tab-pane" id="activity">
						<div class="post">
		                 	<div class="box-body table-responsive no-padding">
              					<table class="table table-hover">
              						<thead>
              							<th>Id</th>
              							<th>Type Transaction</th>
              							<th>Amount</th>
              						</thead>
              						<tbody>
              							@foreach ($transaction as $transaction)
							        <tr>
							            <td>{{$transaction->id}}</td>
							            <td>{{ $transaction->type}}</td>
							            <td>{{ $transaction->amount}}</td>
							         </tr>
							         @endforeach
              						</tbody>
              					</table>
         					 </div>
                         
		                  </div>
					</div>

                    

				</div>
			</div>

             
   			 </div>
		</div>
    </section>

@endsection