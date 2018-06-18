@extends('layouts.app')

@section('content')
<body>  

    <div class="container">
        <h1>Penubuhan EK Baru</h1>
    
            <div class="panel panel-default">

               <div class="panel-heading">Maklumat EK & Ketua</div>
              <!--  <h3>Maklumat EK & Ketua</h3> -->

              <div class="panel-body">

 
              {!! Form::open(['method' => 'POST', 'action' => 'NewEkController@store']) !!}

              {!! csrf_field() !!}
              <div class="form-group">
                {{ Form::label('no_pekerja', 'No Pekerja:') }}
                {{ Form::text('no_pekerja', '', ['class' => 'form-control', 'placeholder' => 'no_pekerja']) }}
              </div>

                
              <div class="form-group">
                {{ Form::label('name_ek', 'Nama EK') }}
                {{ Form::text('name_ek', '', ['class' => 'form-control', 'placeholder' => '']) }}
                <!-- {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }} -->
              </div>

              
              <div class="form-group">
                {{ Form::label('fakulti', 'Fakulti:') }}
                {{ Form::text('fakulti_id', '', ['class' => 'form-control', 'placeholder' => 'fakulti']) }}
              </div>

              <div class="form-group">
                {{ Form::label('no_hp', 'No Tel Bimbit:') }}
                {{ Form::text('tel_hp', '', ['class' => 'form-control', 'placeholder' => 'no hp']) }}
              </div>


              <div class="form-group">
                {{ Form::label('no_tel', 'No Tel Pejabat:') }}
                {{ Form::text('tel_pej', '', ['class' => 'form-control', 'placeholder' => 'tel pejabat']) }}
              </div>

         
              <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('emel', '', ['class' => 'form-control', 'placeholder' => 'email']) }}
              </div>

               {{ Form::submit('Senarai Semakan EK', ['class' => 'btn btn-success']) }}
               {!! Form::close() !!}
           
              
              </div>

            </div>

      <div class="panel panel-default">
            
            <div class="panel-heading">Maklumat Ahli</div>
            <!-- <h3>Maklumat Ahli</h3> -->
            <div class="panel-body">
              
                 <p>Senarai ahli EK yang ditubuhkan:</p>            
                <table class="table">
                  <thead>
                    <tr>
                      <th class="col-lg-1">Bil</th>
                      <th class="col-lg-3">Nama</th>
                      <th class="col-lg-2">No Staff</th>
                      <th class="col-lg-2">Fakulti</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        {{ Form::label('bil1', '1', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('nama1', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td class="col-lg-2">
                        {{ Form::text('nostaff1', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('fakulti1', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                    </tr>
                   <tr>
                      <td>
                        {{ Form::label('bil2', '2', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('nama2', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td class="col-lg-2">
                        {{ Form::text('nostaff2', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('fakulti2', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        {{ Form::label('bil3', '3', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('nama3', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td class="col-lg-2">
                        {{ Form::text('nostaff3', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('fakulti3', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        {{ Form::label('bil4', '4', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('nama4', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td class="col-lg-2">
                        {{ Form::text('nostaff4', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('fakulti4', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        {{ Form::text('bil5', '5', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('nama5', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td class="col-lg-2">
                        {{ Form::text('nostaff5', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>
                        {{ Form::text('fakulti5', '', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                    </tr>

                  </tbody>
                </table>

                 {{ Form::submit('Add', ['class' => 'btn btn-success']) }}

            </div>
            
         
              </div>

         <div class="panel panel-default">
            
            <div class="panel-heading">Ringkasan Aktiviti Penyelidikan</div>
            <!-- <h3>Maklumat Ahli</h3> -->
            <div class="panel-body">
              
                 <p>Ringkasan:</p>            
                

                <div class="form-group">
                  {{ Form::textarea('ringkasan_penyelidikan', '', ['class' => 'form-control', 'placeholder' => 'ringkasan']) }}
                </div>


                <div class="checkbox">
                  <label><input type="checkbox" value="">Saya mengesahkan bahawa semua maklumat yang diberikan adalah benar.</label>
                </div>

            </div>
            
         
              </div>

           
            {{ Form::submit('Kembali', ['class' => 'btn btn-primary']) }}


        
    </div>

  
</body>
@endsection