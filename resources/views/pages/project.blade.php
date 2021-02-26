@extends('layouts.main')
@section('title')
Projects
@endsection
@section('links_project')
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

<body>
  @section('content')
  <h2 class="page-title">PROJEKTI</h2>
  <h3 class="description">Mūsu mājas ir apskatāmas Dānijā, Zviedrijā, Norvēģijā un Latvijā.</h3>
  <div class="container">
    <div class="section">
      <div id="carouselExampleControls" class="carousel slide project-carousel" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="house-img" src="/img/house-2.jpeg" class="d-block w-100" alt="Nord Eco House photo">
          </div>
          <div class="carousel-item">
            <img class="house-img" src="/img/house-5.jpeg" class="d-block w-100" alt="Nord Eco House photo">
          </div>
          <div class="carousel-item">
            <img class="house-img" src="/img/house-3.jpeg" class="d-block w-100" alt="Nord Eco House photo">
          </div>
          <div class="carousel-item">
            <img class="house-img" src="/img/house-4.jpeg" class="d-block w-100" alt="Nord Eco House photo">
          </div>
          <div class="carousel-item">
            <img class="house-img" src="/img/house-6.jpeg" class="d-block w-100" alt="Nord Eco House photo">
          </div>
          <div class="carousel-item">
            <img class="house-img" src="/img/homes.jpg" class="d-block w-100" alt="Nord Eco House photo">
          </div>
          <div class="carousel-item">
            <img class="house-img" src="/img/house-1.jpeg" class="d-block w-100" alt="Nord Eco House photo">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <div class="intro-project">
    <P>
      Risinājumi, tāpat kā cena par pabeigtu māju var būtiski atšķirties. Vienkāršākajā izpildījumā nelielu māju
      iespējams uzbūvēt sākot no 60 tūkstošiem eiro.
      Plaša un tehnoloģiski moderna māja ar īpašiem risinājumiem un augstvērtīgiem apdares materiāliem var maksāt pat
      190 tūkstošus eiro.
    </P>
    <p>
      Aplūko dažus no mūsu projektiem, kas īpaši veidoti ģimenēm. Mājas, kuras pilnībā pabeigtas un gatavas dzīvošanai.
      Tas nozīmē, ka iekļauts ir viss, kas vajadzīgs.
      Sākot no projekta līdz Tavas jaunās mājas atslēgām. Ieskaties!
    </p>
  </div>
  <div class="container-1">
    <br>
    <h3>NORD ECO 128</h3>
    <img class="img-project" src="/img/Nord Eco 128.jpeg" alt="Nord Eco 128 projekts">
    <div class="wrapper">
      <img class="img-128-105-183" src="/img/pretskats-128.jpeg" alt="Nord Eco 128 pretskats">
      <img class="img-128-105-183" src="/img/sturis-128.jpeg" alt="Nord Eco 128 stūris">
      <img class="img-128-105-183" src="/img/sanskats-128.jpeg" alt="Nord Eco 128 sānskats">
    </div>
    <br>
    <u>______________________________________________________________________________________________</u>
    <br>
    <div class="wrapper">
      <p class="formate">
        1 stāvs <br>
        Dzīvojamā platība: 127.9 &#13217 <br>
        Kopējā platība ar terasi un <br>
        noliktavu/nojumi: 205 &#13217 <br>
      </p>
      <img class="img-128-105-183 formate" src="/img/planojums-128.jpeg" alt="Nord Eco 128 plānojums">
    </div>
    <br>
    <br>
    <p>Sākot no 133 140 &#8364 ar PVN</p>
    <u>_____________________________________________________________________________________________________________________________________________</u>
  </div>
  <div class="container-2">
    <br>
    <br>
    <h3>NORD ECO 105</h3>
    <img class="img-project" src="/img/Nord Eco 105.jpeg" alt="Nord Eco 105 projekts">
    <div class="wrapper">
      <img class="img-128-105-183" src="/img/prieksskats-105.jpeg" alt="Nord Eco 105 priekšskats">
      <img class="img-128-105-183" src="/img/aizmugure-105.jpeg" alt="Nord Eco 105 aizmugure">
      <img class="img-128-105-183" src="/img/sanskats-105.jpeg" alt="Nord Eco 105 sānskats">
    </div>
    <br>
    <u>______________________________________________________________________________________________</u>
    <br>
    <div class="wrapper">
      <p class="formate">
        1 stāvs <br>
        Dzīvojamā platība: 104 &#13217 <br>
        Kopējā platība ar terasi: 160.7 &#13217 <br>
      </p>
      <img class="img-128-105-183 formate" src="/img/planojums-105.jpeg" alt="Nord Eco 105 plānojums">
    </div>
    <br>
    <br>
    <p>Sākot no 109 600 &#8364 ar PVN</p>
    <u>___________________________________________________________________________________________________________________________________________</u>
  </div>
  <div class="container-3">
    <br>
    <br>
    <h3>NORD ECO 183</h3>
    <img class="img-project" src="/img/Nord Eco 183.jpeg" alt="Nord Eco 183 projekts">

    <div class="wrapper">
      <img class="img-128-105-183" src="/img/sans1-183.jpeg" alt="Nord Eco 183 sāns">
      <img class="img-128-105-183" src="/img/abigali-183.jpeg" alt="Nord Eco 183 mājas abi gali">
      <img class="img-128-105-183" src="/img/sans2-183.jpeg" alt="Nord Eco 183 sāns">
    </div>
    <br>
    <u>______________________________________________________________________________________________</u>
    <br>
    <div class="wrapper">
      <p>
        2 stāvi <br>
        Dzīvojamā platība: 184.7 &#13217 <br>
        Kopējā platība ar terasi: 214.3 &#13217 <br>
      </p>
      <img class="img-128-105-183" src="/img/plans1stavs-183.jpeg" alt="Nord Eco 183 1 stāva plānojums">
      <img class="img-128-105-183" src="/img/plans2stavs-183.jpeg" alt="Nord Eco 183 2 stāva plānojums">
    </div>
    <br>
    <br>
    <p>Sākot no 174 300 &#8364 ar PVN</p>
    <u>___________________________________________________________________________________________________________________________________________</u>
  </div>
  <div class="intro-project">
    <p>
      <i>Nord Eco House</i> zema enerģijas patēriņa koka māja nozīmē, ka kopējais enerģijas patēriņš gadā apkurei,
      siltajam ūdenim, apgaismojumam,
      ventilācijai un sadzīves tehnikai svārstās robežās no 35-65 kwh/&#13217. Naudas izteiksmē tie ir ap 55 eur mēnesī
      150 &#13217 mājai.
    </p>
    <p>
      Energoefektīvi koka logi un terases durvis. 300mm siltinājums ārsienām un 400mm jumtam. Zendher ventilācijas
      sistēma. Ozolkoka grīdas un pārdomāti izbūvētas vannasistabas.
      Plātnes pamati ar 300mm siltumizolāciju. Pilnībā automatizēta ģeotermālā apkures sistēma. Šie ir tikai daži no
      labumiem, kas iekļauti cenā.
    </p>
    <p>
      Tu iegūsi sinerģiju starp vidi un cilvēku, telpu kas pielāgota tieši Tavām iespējām un dzīves ritmam.
    </p>
  </div>
  <div class="back">
    <a class="button-back nounderline click" href="/project">&#8679</a>
  </div>
  @include('partials.navigation_2')
  @endsection
  @section('script_project')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  @endsection
</body>

</html>