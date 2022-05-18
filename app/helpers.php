<?php

  if (!function_exists('date_slash')) {
    function date_slash($value) {
      $date_es = date("d/m/Y", strtotime($value));
      return $date_es;
    }
  }
  
  if (!function_exists('checkRangeAlphabet')) {
    function checkRangeAlphabet($start_column, $end_column, $check_letter = '')
    {
        $columns = array();
        $length = strlen($end_column);
        $letters = range($start_column, $end_column);

        if (in_array($check_letter, $letters)) { 
            return true; 
        } else {
            return false; 
        } 
    }
  }
  
  if (!function_exists('checkIdTable')) {
    function checkIdTable($string)
    {
      // check username validation
      $response = false;
      $arr_user_name = str_split($string, 1);
      if (isset($arr_user_name[0])) {
        $first_letter = $arr_user_name[0];
        if ($arr_user_name[0]!='') {
          $check_valid_user_name = ctype_alpha($arr_user_name[0]);
          if (!$check_valid_user_name) {
            $response = false;
            return $response;
          }
          $check_valid_user_name = ctype_alnum($string);
          if (!$check_valid_user_name) {
            $response = false;
            return $response;
          }
        } else {
          $response = false;
          return $response;
        }
      }
      $check = false;
      $alphabet1 = [
        'start_letter' => 'a',
        'end_letter' => 'd'
      ];
      $alphabet2 = [
        'start_letter' => 'e',
        'end_letter' => 'i'
      ];
      $alphabet3 = [
        'start_letter' => 'j',
        'end_letter' => 'n'
      ];
      $alphabet4 = [
        'start_letter' => 'o',
        'end_letter' => 's'
      ];
      $alphabet5 = [
        'start_letter' => 't',
        'end_letter' => 'z'
      ];
      
      $num_table = 0;
      do {
        $num_table = $num_table+1;
        $check = checkRangeAlphabet(${'alphabet'.($num_table)}['start_letter'], ${'alphabet'.($num_table)}['end_letter'], $first_letter);
      } while ($check == false);
      
      return $num_table;
    }
  }

  if (!function_exists('getGuard')) {
    function getGuard()
    {
      if (Auth::guard('idtable5')->check()) {
        $model = 'idtable5';
      } elseif (Auth::guard('idtable4')->check()) {
        $model = 'idtable4';
      } elseif (Auth::guard('idtable3')->check()) {
        $model = 'idtable3';
      } elseif (Auth::guard('idtable2')->check()) {
        $model = 'idtable2';
      } elseif (Auth::guard('idtable1')->check()) {
        $model = 'idtable1';
      } else {
        $model = 'web';
      } 

      return $model;
    }
  }

  if (!function_exists('tgl_indo')) {
    function tgl_indo($tanggal){
      $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      );
      $bulan[0] = '';
      $pecahkan = explode('-', $tanggal);
      
      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun
      
      if (sizeof($pecahkan) == 2) {
        $pecahkan[2] = '';
      }
      if (sizeof($pecahkan) == 1) {
        $pecahkan[2] = '';
        $pecahkan[1] = '';
      }
      
      return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
  }
  
  ?>