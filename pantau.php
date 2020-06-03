<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>new</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">CO-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="penjelas.html">Apa itu CO-19</a>
            <a class="nav-item nav-link" href="pantau.php">pantau </a>
            
          </div>
        </div>
      </nav>
      <br><br><br>
      
        <div class="container text-center">
          <h1 class="display-4">ArMLunity</h1>
          <p class="lead">Mari kita pantau penyebaran COVID-19</p>
        </div>
      
    
      <style type="text/css">
    .box{
        padding: 30px 40px;
         border-radius: 5px;
        }
      </style>

    
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="bg-danger box text-white" >
              <div class="row">
               <div class="col-md-6">
                 <h5>Positif</h5>
                 <h2 id="data-kasus">6452390</h2>
                 <h5>Orang</h5>
                 </div>
                  <div class="col-md-4"> 
                    <img src="img/sad.svg" style ="width: 100px;">
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-info box text-white" >
              <div class="row">
               <div class="col-md-6">
                 <h5>Meninggal</h5>
                 <h2 id="data-meninggal">382479</h2>
                 <h5>Orang</h5>
                 </div>
                  <div class="col-md-4"> 
                    <img src="img/cry.svg" style ="width: 100px;">
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-success box text-white" >
              <div class="row">
               <div class="col-md-6">
                 <h5>Sembuh</h5>
                 <h2 id="data-sembuh">3066696</h2>
                 <h5>Orang</h5>
                 </div>
                  <div class="col-md-4"> 
                    <img src="img/happy.svg" style ="width: 100px;">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         <center>
      <div class="col-md-10 mt-3">
            <div class="bg-primary box text-white" >
              <div class="row">
               <div class="col-md-6">
                 <h2>INDONESIA</h2>
                 <h5 id="data-id">Positif:25755 <br> Meninggal:1573 <br> sembuh:7015</h5>
                 </div>
                  <div class="col-md-4"> 
                    <img src="img/indonesia.svg" style ="width: 150px;">
                  </div>
              </div>
            </div>
          </div>
          </center>

  <footer class="text-center text-white mt-3">
  <div class="alert alert-secondary" role="alert">
            create by ArMLunity
        </div>
  </footer> 
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
</body>
</html>

<script>
  $(document).ready(function(){

    
    semuaData();

      function semuaData(){
        $.ajax({
          url : 'https://coronavirus-19-api.herokuapp.com/countries',
          success : function(data){
            try{
              var json = data;
              var html =[];

              if(json.lenghth > 0){
                var i;
                for(i = 0; < json.lenght; i++){
                  var dataNegara = json[i];
                  var namaNegara =dataNegara.country;

                  if(namaNegara === 'Indonesia')
                }
              }
            
            }
           catch{
             alert('wonten sing Errorr')
           } 
          }
        });
      }
  });
</script>