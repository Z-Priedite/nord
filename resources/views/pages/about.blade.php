@extends('layouts.main')
@section('title')
About us
@endsection

<body>
  @section('content')
  <h2 class="page-title">PAR MUMS</h2>
  <div class="about-section">
    <div class="intro-about">
      <p>Iepazīsimies!</p>
      <p>Mani sauc Vijārs Priedītis. Uz jautājumu - "Ar ko tu nodarbojies?, es parasti atbildu - "Pēc aicinājuma esmu
        namdaris, pēc profesijas - uzņēmuma <i>Nord Eco House</i> vadītājs."</p>
      <p>Kopā esam 10 cilvēku komanda. Savas jomas meistari, kas ar patiesu aizrautību dara to, kas mums vislabāk
        padodas. Būvējam mājas no koka. Ar cieņu un atbildību. Profesionāli. No projektēšanas līdz gatavai mājai.</p>
      <p><i>Nord Eco House</i> ir specializējušies tieši koka māju būvniecībā, jo tas atbilst mūsu vērtībām un nākotnes
        redzējumam:</p>
      <br>
      <ul>
        <li> <b>&#8227</b> Būvējam tikai no koka, jo tas ir ilgtspējīgs būvniecības virziens</li>
        <li> <b>&#8227</b> Videi un cilvēkiem draudzīgas tehnoloģijas</li>
        <li> <b>&#8227</b> Darbus veic profesionāļi sākot no projektēšanas līdz dzīvošanai gatavā mājā</li>
        <li> <b>&#8227</b> Zaļā domāšana ir viena no mūsu pamatvērtībām</li>
      </ul>
    </div>
    <img class="profile" src="/img/example.jpeg" alt="Vijāra Priedīša Photo">
  </div>
  <div class="production-section">
    <img class="production-img" src="/img/production.jpeg" alt="Ražošanas telpas">
    <img class="production-img" src="/img/hand-production.jpeg" alt="Ražošanas telpas">
  </div>
  @include('partials.navigation_2')
  @endsection
</body>

</html>