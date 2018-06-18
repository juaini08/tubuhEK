<!DOCTYPE html>
<html>
<head>
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>  

    <div class="container">
        <h1>Semakan EK</h1>
    
            <div class="panel panel-default">

              <div class="panel-heading">Senarai Semakan EK</div>
              <!--  <h3>Maklumat EK & Ketua</h3> -->

              <div class="panel-body">

                <table class="table">
                  <thead>
                    <tr>
                      <th class="col-lg-2">Bil</th>
                      <th class="col-lg-8">Senarai Semak Semakan Pemohon Semakan JKEK</th>
                      <th class="col-lg-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Bilangan ahli: Lima (5) hingga lapan (8) orang termasuk ahli dari fakulti lain</td>
                      <td class=" checkbox col-lg-2">
                         <label><input type="checkbox" value=""></label>
                      </td>
                    </tr>
                    <tr>
                       <td>2</td>
                      <td>Ketua EK Tier 5 mesti sedanga/pernah (dalam tempoh 3 tahun ke belakang) menjadi PI geran luar (minimum RM20,000 S&T dan RM 5,000 SS) dan berdaftar di IRMI</td>
                      <td class=" checkbox col-lg-2">
                         <label><input type="checkbox" value=""></label>
                      </td>
                    </tr>
                    <tr>
                       <td>3</td>
                      <td>Kumpulan penyelidik hendaklah mempunyai rekod geran terkumpul RM 100,000 bagi S&T dan RM 50,000 bagi SS (dalam tempoh 3 tahun ke belakang, hanya geran yang diketuai oleh ahli EK Tier 5 diambil kira)</td>
                      <td class=" checkbox col-lg-2">
                         <label><input type="checkbox" value=""></label>
                      </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Pelantikan sebagai Ahli Tetap EK Tier 5 adalah dihadkan kepada dua (2) EK sahaja iaitu satu (1) dari fakulti sendiri dan satu (1) dari fakulti bidang lain.</td>
                        <td class=" checkbox col-lg-2">
                           <label><input type="checkbox" value=""></label>
                        </td>
                    </tr>
                  </tbody>
                </table>


                <p>Permohonan anda tidak lengkap, sila kemaskini kembali</p>

                
              </div>
            
         
            </div>

           
            {{ Form::submit('Kembali', ['class' => 'btn btn-primary']) }}
         
       
    </div>

  
</body>
</html>