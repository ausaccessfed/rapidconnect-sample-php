<html>
  <head>
    <title>AAF | Welcome</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container">
        <p>&nbsp;</p>
      </div>
    </header>

    <section class="content">
      <div class="container">
        <div class="row">
          <div class="span2"><img src="/aaf_white.png"/></div>
          <div class="span10"><a href="/logout" class="pull-right btn btn-inverse">Logout</a><h2>Welcome<br><small>You've successfully logged in via AAF Rapid Connect.</small></h2></div>
        </div>
        <br>
        <div class="row">
          <p>You've just logged in via your normal AAF IdP using the <a href="http://en.wikipedia.org/wiki/Security_Assertion_Markup_Language">SAML 2.0</a> protocol. The AAF then translated that to a <a href="http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html">JWT</a> and pushed it to this app running on <strong>Pagoda Box</strong> where we could use it to authenticate your session.</p>
          <p>This is part of a research project to understand ways we can make federated authentication easier and more accessible for a wider range of developers and use cases. Do <a href="http://twitter.com/bradleybeddoes">let me know</a> if you have any feedback or thoughts, alternatively send them to <a href="mailto:support@aaf.edu.au">AAF Support</a>.</p>
          <h3>This is what we learned about you</h3>
          <ul>
            <?php
              foreach ($attributes as $key => $val) {
                echo "<li><strong>$key</strong>: $val</li>";
              }
            ?>
          </ul>

          <h3>Here are some of the internal details provided in the request</h3>
          <ul>
            <?php
              foreach ($jwt as $key => $val) {
                echo "<li><strong>".print_r($key,true)."</strong>: ".print_r($val,true)."</li>";
              }
            ?>
          </ul>

          <h3>This is what your actual signed JWT looks like on the wire</h3>
          <?php echo $jws; ?>

          <h3>How simple is the code to do this?</h3>
          <p>Here is the full source (minus the actual HTML) of the application you're currently using. It is developed in <a href="http://www.php.net">PHP</a> using the <a href="http://laravel.com">Laravel framework</a>.</p>
          <script src="https://gist.github.com/bradleybeddoes/7051824753235cde90b8.js"></script>
      </div>
    </section>

    <footer>
      <div class="container">
        <hr>
        <p>Heroku Demo Application</p>
        <p>
          Developed for the <a href="http://www.aaf.edu.au">Australian Access Federation</a> by <a href="http://bradleybeddoes.com">Bradley Beddoes</a>
        </p>
      </div>
    </footer>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
