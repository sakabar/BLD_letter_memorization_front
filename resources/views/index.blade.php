<html>
  <head>
    <title>BLD</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript">
      var corner_voice_arr = [];
      var edge_voice_arr = [];
  </script>
  </head>
  <body>
    コーナー
    <br>
    @for ($i = 0; $i < count($corner_str_arr); $i++)
      <script language="javascript" type="text/javascript">
        corner_voice_arr.push(new Audio("data:audio/wav;base64, {{ $corner_voice_arr[$i] }}"));
      </script>
      {{-- $corner_str_arr[$i] --}}
      <input type="button" value="音声" onclick="corner_voice_arr[{{$i}}].play();"/> {{ sprintf("%02d", $i+1) }}文字目 <input type="button" value="聞き取れない" onclick="alert('{{ $corner_str_arr[$i] }}');"/>
      <br>
    @endfor
    <br>
    エッジ
    <br>
    @for ($i = 0; $i < count($edge_str_arr); $i++)
      <script language="javascript" type="text/javascript">
        edge_voice_arr.push(new Audio("data:audio/wav;base64, {{ $edge_voice_arr[$i] }}"));
      </script>
      {{-- $edge_str_arr[$i] --}}
      <input type="button" value="音声" onclick="edge_voice_arr[{{$i}}].play();"/> {{ sprintf("%02d", $i+1) }}文字目 <input type="button" value="聞き取れない" onclick="alert('{{ $edge_str_arr[$i] }}');"/>
      <br>
    @endfor

  </body>
</html>
