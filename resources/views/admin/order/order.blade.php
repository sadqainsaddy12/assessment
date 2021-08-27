
@include('admin.layouts.header')
@include('admin.layouts.nav')

<div class="app-content content dashboard">
	<div class="content-wrapper">
		<div class="content-body">

            <section id="configuration" class="user-page">
				<div class="row">
					<div class="col-12">
						<div class="card rounded">
                            <div class="card-body p-md-3">
                                <div class="page-title mb-1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="col-md-12">
                                                @if(Session::has('message'))
                                                       <div class="alert alert-success">
                                                           <strong>{{ Session::get('message')  }}</strong>
                                                       </div>
                                                   @endif
                                                   @if(Session::has('error'))
                                                       <div class="alert alert-danger">
                                                         <strong>{{ Session::get('error')  }}</strong>
                                                       </div>
                                                   @endif
                                           </div>
                                            <h1>Orders</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 text-right">
                                            <button type="button" class="btn-default btn-green btn-sm" data-toggle="modal" data-target="#exampleModal" >
                                               Add dummy Orders
                                              </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="report-tab">

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="active-user" role="tabpanel" aria-labelledby="home-tab">

                                            <div class="clearfix"></div>
                                            <div class="row row-table">
                                                <div class="main-tabble table-responsive">
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10px">#</th>
                                                                <th style="width: auto">Name</th>
                                                                <th style="width: auto">Payment Method</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($order as $key=>$orders)
                                                            <tr>
                                                                <td>{{++$key}}</td>
                                                                <td>{{$orders->name}}</td>
                                                                <td>{{$orders->payment->name}}</td>

                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="inactive-user" role="tabpanel" aria-labelledby="profile-tab">


                                        </div>
                                    </div>
                                </div>


                            </div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@include('admin.order.order_add')
@include('admin.layouts.footer')
