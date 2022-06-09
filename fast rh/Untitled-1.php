<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("elements", "1", {
          packages: "keyboard"
      });
      function onLoad() {
        var kbd = new google.elements.keyboard.Keyboard(
          [google.elements.keyboard.LayoutCode.BRAZILIAN_PORTUGUESE],
          ['tv1']);
      }
      google.setOnLoadCallback(onLoad);
    </script>
		<title>Inserindo o teclado virtual do Google em sua p�gina</title>
  </head>
  <body>
  <p>Digite algumas palavras no teclado para preencher o campo abaixo.</p>
  <textarea id="tv1" style="width: 600px; height: 200px;"></textarea>
  </body>
</html>