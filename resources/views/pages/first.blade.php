@extends('layouts.main')
@section('title')
Build a house
@endsection

<body>
  @section('content')
  <div class="banner">
    <h1 class="title">Kā Būtu Ja Tev Piederētu Sava Māja?</h1>
    <h2 class="subtitle">ENERGO EFEKTĪVU KOKA MĀJU PROJEKTĒŠANA UN BŪVNIECĪBA</h2>
  </div>
  <div class="intro">
    <p>
      Piekritīsi, māja ir kas vairāk nekā tikai jumts zem kura patverties!
    </p>
    <p>
      Tās ir sajūtas! Enerģija, kas apņem ikreiz, kad kāpjam pār durvju slieksni. Māja ir vieta, kur būt kopā. Laimīgi.
      Ar ģimeni un sev tuviem cilvēkiem.
    </p>
    <p>
      Mēs visi vēlamies dzīvot pilnvērtīgi - strādāt un dzīvot vidē, kas ir dabiska un harmoniska. Koka māja sniedz šādu
      iespēju. Koks nozīmē dzīvību, saikni ar dabu, cilvēku un dabas dotiem materiāliem. Koka māja nozīmē tradīcijas,
      gaumi un veselīgu dzīvesveidu.
    </p>
    <p>
      Modernas apstrādes tehnoloģijas ļauj saglabāt patieso koka būtību - ilglaicību un izturību. Koksnes dabiskums
      nomierina un rada iekšēju harmoniju. Koka māja ir dzīva. Tā elpo. Un ļauj elpot arī Tev.
    </p>
    <p>
      Mājas izvēlamies ar domu par rītdienu. Tas ir pārdomāts lēmums. Iespējams, viens no Tavas dzīves svarīgākajiem
      lēmumiem. Un tieši tāpēc ir tapis uzņēmums <i>Nord Eco House.</i> Lai būvētu koka mājas un radītu vidi, kurā
      cilvēki vēlas piedzīvot sava mūža skaistākos mirkļus.
    </p>
  </div>
  <h2 class="mood-title">KO NOZĪMĒ ENERGO EFEKTĪVA KOKA MĀJA?</h2>
  <div class="mood-section">
    <div class="mood">
      <img class="mood-photo shadow" src="/img/energo.jpeg" alt="Zemas ekspluatācijas izmaksas">
      <h3 class="img-title">ZEMAS EKSPLUATĀCIJAS IZMAKSAS</h3>
    </div>
    <div class="mood">
      <img class="mood-photo shadow" src="/img/dizains.jpeg" alt="Mūsdienīgs dizains un īpaši radīta telpa ikvienam">
      <h3 class="img-title">MŪSDIENĪGS DIZAINS UN ĪPAŠI RADĪTA<br>TELPA IKVIENAM</h3>
    </div>
  </div>
  <div class="mood-section">
    <div class="mood">
      <img class="mood-photo shadow" src="/img/ritdiena.jpeg" alt="Pārdomāta šodienas izvēle labākai rītdienai">
      <h3 class="img-title">PĀRDOMĀTA ŠODIENAS IZVĒLE<br>LABĀKAI RĪTDIENAI</h3>
    </div>
    <div class="mood">
      <img class="mood-photo shadow" src="/img/crown.jpeg" alt="Tradīciju simbols">
      <h3 class="img-title">TRADĪCIJAS UN ZAĻAIS DZĪVESVEIDS</h3>
    </div>
  </div>
  @include('partials.navigation_2')
  @endsection
</body>

</html>