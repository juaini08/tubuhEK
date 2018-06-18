<!DOCTYPE html>
<html>
<head>
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>  

  <div class="panel panel-default">

    <div class="panel-heading">Permohonan Baru</div>

    <div class="panel-body">

    <div class="container">
        <h2>Permohonan anda telah berjaya dihantar.</h1>
    
            <div class="panel panel-default">

               <div class="panel-heading">Maklumat EK & Ketua</div>
              <!--  <h3>Maklumat EK & Ketua</h3> -->

              <div class="panel-body">
                
                 <div class="form-group">
                {{ Form::label('name_ek', 'Nama EK') }}
                {{ Form::label('name_ek', 'EK 1', ['class' => 'form-control', 'placeholder' => '']) }}
                <!-- {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }} -->
              </div>


              <div class="form-group">
                {{ Form::label('name_ketua', 'Nama Ketua:') }}
                {{ Form::label('name_ketua', 'Amina', ['class' => 'form-control', 'placeholder' => 'Nama Ketua']) }}
              </div>


              <div class="form-group">
                {{ Form::label('no_pekerja', 'No Pekerja:') }}
                {{ Form::label('no_pekerja', 'C4329', ['class' => 'form-control', 'placeholder' => 'Nama Ketua']) }}
              </div>

              <div class="form-group">
                {{ Form::label('fakulti', 'Fakulti:') }}
                {{ Form::label('fakulti', 'FSKM', ['class' => 'form-control', 'placeholder' => 'fakulti']) }}
              </div>

              <div class="form-group">
                {{ Form::label('no_hp', 'No Tel Bimbit:') }}
                {{ Form::label('no_hp', '0198277233', ['class' => 'form-control', 'placeholder' => 'no_hp']) }}
              </div>


              <div class="form-group">
                {{ Form::label('tel_pej', 'No Tel Pejabat:') }}
                {{ Form::label('tel_pej', '031126443', ['class' => 'form-control', 'placeholder' => 'tel_pej']) }}
              </div>

         
              <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::label('email', 'amina53@gmail.com', ['class' => 'form-control', 'placeholder' => 'email']) }}
              </div>

              </div>
              
             

            </div>


      <div class="panel panel-default">

               <div class="panel-heading">Maklumat Geran</div>
              <!--  <h3>Maklumat EK & Ketua</h3> -->

              <div class="panel-body">
                
                 <div class="form-group">
                {{ Form::label('jumlah_geran', 'Jumlah Geran:') }}
                {{ Form::label('jumlah_geran', '10,000', ['class' => 'form-control', 'placeholder' => '']) }}
                <!-- {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }} -->
              </div>


              <div class="form-group">
                {{ Form::label('bil_geran', 'Bil Geran:') }}
                {{ Form::label('bil_geran', '2', ['class' => 'form-control', 'placeholder' => 'Nama Ketua']) }}
              </div>


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
                      <th class="col-lg-3">Bil</th>
                      <th>Nama</th>
                      <th>No Staff</th>
                      <th>Fakulti</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Ali</td>
                      <td>
                        3212
                      </td>
                      <td>FSKM</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Abu</td>
                      <td>
                        4223
                      </td>
                      <td>FSKM</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Siti</td>
                      <td>
                        9232
                      </td>
                      <td>FSKM</td>
                    </tr>
                  </tbody>
                </table>



            </div>
            
         
              </div>

         <div class="panel panel-default">
            
            <div class="panel-heading">Ringkasan Aktiviti Penyelidikan</div>
            <!-- <h3>Maklumat Ahli</h3> -->
            <div class="panel-body">
              
                 <p>Ringkasan:</p>            
                

                <div class="form-group">
                  {{ Form::label('ringkasan_penyelidikan', 'bla bla bla bla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla bla', ['class' => 'form-control', 'placeholder' => 'ringkasan']) }}
                </div>


              

            </div>
            
         
              </div>

           
              
                 {{ Form::submit('Kembali', ['class' => 'btn btn-primary']) }}
                 {{ Form::submit('Cetak', ['class' => 'btn btn-success']) }}
    </div>

   </div>
  </div>
  
</body>
</html>