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
    return $ans;
  }

  public function index()
  {
    $edge_letters = array("あか", "いき", "うく", "えけ", "さし", "すせ", "そん", "たな", "ちに", "つぬ", "てね");
    $corner_letters = array("あいう", "かくこ", "たつと", "なぬの", "はふほ", "まむも", "やゆよ");

    $s1 = $this->gen_rand($edge_letters);
    $s2 = $this->gen_rand($corner_letters);
    $ans = $s1 . "\n" . $s2;
    return $ans;
  }
}
