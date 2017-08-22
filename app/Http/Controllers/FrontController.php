<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
  private static function gen_rand($arr)
  {
    $len = count($arr);
    $ind_arr = range(0, $len - 1);

    // ランダムにcnt回入れ替え
    $cnt = 100;
    for($i = 0; $i < $cnt; $i++)
    {
      $a = rand(0, $len - 1);
      $b = rand(0, $len - 1);
      $tmp = $ind_arr[$a];
      $ind_arr[$a] = $ind_arr[$b];
      $ind_arr[$b] = $tmp;
    }

    $ans = "";
    for($i = 0; $i < $len; $i++)
    {
      $s = $arr[$ind_arr[$i]];
      $str_len = mb_strlen($s, 'utf8');
      $char_ind = rand(0, $str_len - 1);
      $ans .= mb_substr($s, $char_ind, 1, 'utf8');
    }

    //最後に、分析のループの終了を表す1文字を追加
    $ind = rand(0, $len - 1);
    $rand_str = $arr[$ind];
    $str_len = mb_strlen($rand_str, 'utf8');
    $char_ind = rand(0, $str_len - 1);
    $ans .= mb_substr($rand_str, $char_ind, 1, 'utf8');

    return $ans;
  }

  public function index()
  {
    $edge_letters = array("あか", "いき", "うく", "えけ", "さし", "すせ", "そん", "たな", "ちに", "つぬ", "てね");
    $corner_letters = array("あいう", "かくこ", "さすそ", "たつと", "なぬの", "はふほ", "まむも");

    $edge_str = $this->gen_rand($edge_letters);
    $corner_str = $this->gen_rand($corner_letters);
    return view('index', ['edge_str' => $edge_str, 'corner_str' => $corner_str]);
  }
}
