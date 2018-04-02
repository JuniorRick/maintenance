@extends('cartridges.layouts.app')

@section('content')
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::check())
                      <div class="wrapper">
                        <a href='/toners'>
                          <div class="home_link">
                            <div class="left-square text-middle">
                              Toners
                            </div>
                            <div class="left-triangle">
                            </div>
                          </div>
                        </a>
                        <a href='/cartridges'>
                          <div class="home_link">
                            <div class="right-triangle "></div>
                             <div class="right-square text-middle">Cartridges</div>
                          </div>
                        </a>
                        <div class="handle"></div>
                      </div>
                    @else
                      <div style="padding:20px; text-align: center;"> Please log in</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
