<html>
  <head>
    <title>BLD</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    コーナー
    <br>
    @for ($i = 0; $i < mb_strlen($corner_str, 'utf8'); $i += 2)
      {{ mb_substr($corner_str, $i, 2, 'utf8') }}<br>
    @endfor
    <br>
    エッジ
    <br>
    @for ($i = 0; $i < mb_strlen($edge_str, 'utf8'); $i += 2)
      {{ mb_substr($edge_str, $i, 2, 'utf8') }}<br>
    @endfor
  </body>
</html>
