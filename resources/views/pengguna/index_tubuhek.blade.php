@extends('layouts.app')

@section('content')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">Senarai Kakitangan</div>
                     <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                    
                             @if(Auth::check())

                                
                                <div class="container table-responsive col-lg-12">
                                    <!-- <div class="container text-center"> -->
                                                            
                                        <table class="table table-hover">
                                            <tr>
                                                <td>#</td>
                                         
                                                <td>Nama</td>
                                                <td>No Pekerja</td>
                             
                                            </tr>

                                
                                         @foreach($pengguna as $index => $value)

                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                        
                                                <td>{{ $value->nama_pengguna }}</td>
                                                <td>{{ $value->no_pekerja }}</td>
                                               

                                            </tr>

                                        @endforeach
                                        </table>
                                    <!-- </div> -->
                                </div>
                            @endif


                            @if(Auth::guest())

                                <a href="/login" class="btn btn-info"> Anda perlu log masuk.</a>

                            @endif
                      
                     </div>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
@endsection