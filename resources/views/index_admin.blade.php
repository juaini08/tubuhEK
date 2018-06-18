<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name') }}</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
   <div class="card-header">{{ __('Laman Utama Admin') }}
		   </div>
				
			<br>	   
			<div class="container text-center">
				<h1> Selamat Datang Ke Permohonan Penubuhan EK Tier 5</h1>
				
			</div>

			<br>
		

<div class="container text-center">
	 



<div class="container">
 
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#baru">Baru</a></li>
    <li><a data-toggle="pill" href="#proses">Proses</a></li>
    <li><a data-toggle="pill" href="#lulus">Lulus</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="baru" class="tab-pane fade in active">
       <h5>SENARAI PERMOHONAN BARU</h5>
      
       <table class="table">
                  <thead>
                    <tr>
                      <th class="col-lg-3">Bil</th>
                      <th>Nama EK</th>
                      <th class="col-lg-3"></th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>EK 1</td>
                      <td class="col-lg-3">
                        {{ Form::submit('Kemaskini', ['class' => 'btn btn-success']) }}
                      </td>
                  
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>EK 2</td>
                      <td>
                        {{ Form::submit('Kemaskini', ['class' => 'btn btn-success']) }}
                      </td>
                   
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>EK 3</td>
                      <td>
                        {{ Form::submit('Kemaskini', ['class' => 'btn btn-success']) }}
                      </td>
                  
                    </tr>
                  </tbody>
                </table>


    </div>
    <div id="proses" class="tab-pane fade">
      <h5>SENARAI PERMOHONAN SEDANG DIPROSES</h5>
      
       <table class="table">
                  <thead>
                    <tr>
                      <th class="col-lg-3">Bil</th>
                      <th>Nama EK</th>
                      <th class="col-lg-3"></th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>EK 6</td>
                      <td class="col-lg-3">
                        {{ Form::submit('Kemaskini', ['class' => 'btn btn-success']) }}
                      </td>
                  
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>EK 7</td>
                      <td>
                        {{ Form::submit('Kemaskini', ['class' => 'btn btn-success']) }}
                      </td>
                   
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>EK 8</td>
                      <td>
                        {{ Form::submit('Kemaskini', ['class' => 'btn btn-success']) }}
                      </td>
                  
                    </tr>
                  </tbody>
                </table>
    </div>
    <div id="lulus" class="tab-pane fade">
      <h5>SENARAI PERMOHONAN YANG DILULUSKAN</h5>
      
       <table class="table">
                  <thead>
                    <tr>
                      <th class="col-lg-3">Bil</th>
                      <th>Nama EK</th>
                      <th class="col-lg-3"></th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>EK 16</td>
                      <td class="col-lg-3">
                        {{ Form::submit('Lihat', ['class' => 'btn btn-success']) }}
                      </td>
                  
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>EK 14</td>
                      <td>
                        {{ Form::submit('Lihat', ['class' => 'btn btn-success']) }}
                      </td>
                   
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>EK 10</td>
                      <td>
                        {{ Form::submit('Lihat', ['class' => 'btn btn-success']) }}
                      </td>
                  
                    </tr>
                  </tbody>
                </table>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
</body>
</html>