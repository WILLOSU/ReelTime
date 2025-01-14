<footer id="footer">
    <div id="social-container">
      <ul>
        <li>
          <a href="#"><i class="fab fa-facebook-square"></i></a> <!--icone facebook - cego quando criar a rede colocar -->
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>      <!--icone instagram - cego quando criar a rede colocar -->
        </li>
        <li>
          <a href="#"><i class="fab fa-youtube"></i></a>        <!--icone youtube   - cego quando criar a rede colocar -->
        </li>
      </ul>
    </div>

     <!--links que levam para outra página do site-->
    <div id="footer-links-container">
      <ul>
        <li><a href="<?= $BASE_URL ?>newmovie.php">Adicionar filme</a></li>
        <li><a href="<?= $BASE_URL ?>movie.php">Adicionar crítica</a></li>
        <li><a href="<?= $BASE_URL ?>auth.php">Entrar / Registrar</a></li>
      </ul>
    </div>
    <p>&copy; <?= date("Y") ?> WillSoluções</p>

  </footer>


  <!-- BOOTSTRAP JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.js" integrity="sha512-KCgUnRzizZDFYoNEYmnqlo0PRE6rQkek9dE/oyIiCExStQ72O7GwIFfmPdkzk4OvZ/sbHKSLVeR4Gl3s7s679g==" crossorigin="anonymous"></script>
</body>
</html>