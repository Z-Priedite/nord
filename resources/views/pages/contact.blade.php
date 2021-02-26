@extends('layouts.main')
@section('title')
Contact
@endsection
@section('links_contact')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endsection

<body>
  @section('content')
  <h2 class="page-title">KONTAKTI</h2>
  <div class="container-contact">
    <img class="img-contact" src="/img/home cuted.jpg" alt="Uz tikšanos!">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="end-text">Ko Tu teiktu, ja mēs satiktos un apspriestu turpmākos soļus par jaunās mājas būvniecību?
          </h3>
          @if (session('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>
          @endif
          <form method="POST">
            @csrf
            <div class="mb-1 location">
              <label for="exampleInputName" class="form-label">Vārds Uzvārds</label>
              <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
            </div>
            <div class="mb-1 location">
              <label for="exampleInputEmail1" class="form-label">E-pasts</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-1 location">
              <label for="exampleInputTel" class="form-label">Telefons</label>
              <input type="tel" name="telephone" class="form-control" id="exampleInputTel" aria-describedby="telHelp">
            </div>
            <div class="mb-1 location">
              <label for="exampleInputText" class="form-label">Ziņa</label>
              <textarea name="message" class="form-control" id="exampleInputText" rows="4"></textarea>
            </div>
            <button type="submit" class="button-end location noborder black">PIESAKIES KONSULTĀCIJAI</button>
          </form>
          <br>
          <p class="location">
            vijars.prieditis@gmail.com <br>
            +371 295 014 49 <br>
            Hospitāļu iela 23, Rīga, LV-1013
          </p>
        </div>
      </div>
    </div>
  </div>
  <footer class="landing-footer">
    <p class="footer-text">&copy; <?php echo date ('Y');?> Nord Eco House</p>
  </footer>
  @endsection
  @section('script_contact')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  @endsection
</body>

</html>