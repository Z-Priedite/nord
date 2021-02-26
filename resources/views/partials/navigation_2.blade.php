<footer class="landing-footer">
  <a class="button black nocolor nounderline" href="">PIESAKIES KONSULTĀCIJAI</a>
  <!--MODAL-->

  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close">X</span>
      <h3>PIESAKIES KONSULTĀCIJAI</h3>
      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif
      <form method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Vārds Uzvārds:</label>
          <input type="text" name="name" id="name">
        </div>

        <div class="form-group">
          <label for="email">E-pasts:</label>
          <input type="email" name="email" id="email">
        </div>

        <div class="form-group">
          <label for="tel">Telefons:</label>
          <input type="tel" name="telephone" id="tel">
        </div>

        <div class="form-group">
          <label for="text">Ziņa:</label>
          <input type="text" name="message" id="text">
        </div>

        <input class="submit button black" type="submit" value="PIETEIKTIES">
      </form>
    </div>
  </div>


  <p class="footer-text">&copy; <?php echo date ('Y');?> Nord Eco House</p>
</footer>