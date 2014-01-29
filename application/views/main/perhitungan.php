<div class="row">
  <div class="col-sm-12">
    <div class="widget-title">
      <h1><span class="glyphicon glyphicon-cog"></span> Perhitungan</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive">
      <?php
          function combination($member, $num)
          {
              $n     = count($member);
              //jumlah total kombinasi yang mungkin
              $total = pow(2, $n);
              $list  = array();
              //Loop untuk setiap kombinasi yang mungkin
              $k     = 0;
              for ($i = 0; $i < $total; $i++) {
                  $list[$k] = array();
                  //Untuk setiap kombinasi, dicek untuk setiap bit
                  for ($j = 0; $j < $total; $j++) {
                      //apakah data bit $j ada pada bit $i?  
                      if ((pow(2, $j) & $i))
                          $list[$k][] = $member[$j];
                  }
                  if (count($list[$k]) == $num) {
                      //jika jumlah anggota sama dengan jumlah yang diinginkan increment $k
                      $k++;
                  } else {
                      //jika tidak sesuai, hapus array $list[$k]
                      unset($list[$k]);
                  }
              }
              return $list;
          }

          function array_consolidate($list)
          {
              $r = $list[0];
              for ($i = 1; $i < count($list); $i++) {
                  $r = array_merge($r, $list[$i]);
              }
              $r = array_values(array_unique($r));
              sort($r);
              return $r;
          }
          //--------------------
          function build_candidate($data, $level)
          {
              $result = combination($data, $level);
              sort($result);
              return $result;
          }
          //-----------------------
          function join_step($source, $data)
          {
              $n = count($data[0]);
              for ($i = 0; $i < count($data); $i++) {
                  for ($j = 0; $j < count($source); $j++) {
                      $freq        = array_intersect($source[$j], $data[$i]);
                      $support[$i] = (count($freq) == count($data[$i]) ? (isset($support[$i]) ? $support[$i] + 1 : 1) : (isset($support[$i]) ? $support[$i] : 0));
                  }
              }
              $result = array(
                  $data,
                  $support
              );
              return $result;
          }
          //-----------------------
          function prune_data($data, $no_trans, $min_support)
          {
              $result = array();
              foreach ($data[1] as $key => $value) {
                  if ($value / $no_trans < $min_support) {
                      unset($data[0][$key]);
                      unset($data[1][$key]);
                  } else {
                      $result[0][] = $data[0][$key];
                      $result[1][] = $data[1][$key];
                  }
              }
              return $result;
          }
          //-----------------------
          function print_transaction($data, $title = NULL)
          {
              echo (isset($title) ? "<h3>Data Transaksi : " . $title . "</h3>\n" : "");
              echo "<table class='table table-striped table-hover table-bordered'>
                      <tr class='info'>
                        <th>Trans No</th>
                        <th>Items</th>
                      </tr>";
              for ($i = 0; $i < count($data); $i++) {
                  echo "<tr><td>" . ($i + 1) . "</td><td>{";
                  for ($j = 0; $j < count($data[$i]); $j++) {
                      echo ($j == 0 ? "" : ",") . $data[$i][$j];
                  }
                  echo "}</td></tr>";
              }
              echo "</table>";
          }

          function print_itemset($data, $level, $title = NULL)
          {
              echo (isset($title) ? "<h4>Candidate C - " . $level . " : </h4>\n" : "");
              echo "<table class='table table-striped table-hover table-bordered'>
                      <tr class='info'>
                        <th class='text-center'>" . $level . " - Itemset</th>
                      </tr>";
              for ($i = 0; $i < count($data); $i++) {
                  echo "<tr class='text-center'><td>{";
                  for ($j = 0; $j < count($data[$i]); $j++) {
                      echo ($j == 0 ? "" : ",") . $data[$i][$j];
                  }
                  echo "}</td></tr>";
              }
              echo "</table>";
          }

          function print_support($data, $level, $title = NULL)
          {
              echo (isset($title) ? "<h4>" . $title . " " . $level . " : </h4>" : "");
              if (!empty($data)) {
                  echo "<table class='table table-striped table-hover table-bordered'>
                      <tr class='info'>
                        <th class='text-center'>" . ($level ? $level . " - " : "") . "Itemset</th>
                        <th class='text-center'>Support Count</th>
                      </tr>";
                  for ($i = 0; $i < count($data[0]); $i++) {
                      //echo "<span><div class=\"cell\">{";
                      echo "<tr><td class='text-center'>{";
                      for ($j = 0; $j < count($data[0][$i]); $j++) {
                          echo ($j == 0 ? "" : ",") . $data[0][$i][$j];
                      }
                      echo "}</td><td class='text-center'>" . $data[1][$i] . "</td></tr>";
                  }
                  echo "</table>";
              }
          }

          function array_rebuild($data)
          {
              $result = array();
              for ($i = 0; $i < count($data[0]); $i++) {
                  $result[0][$i] = implode("|", $data[0][$i]);
              }
              $result[1] = $data[1];
              return $result;
          }

          function get_combinations($base, $n)
          {
              $baselen = count($base);
              if ($baselen == 0) {
                  return;
              }
              if ($n == 1) {
                  $return = array();
                  foreach ($base as $b) {
                      $return[] = array(
                          $b
                      );
                  }
                  return $return;
              } else {
                  $oneLevelLower = get_combinations($base, $n - 1);
                  $newCombs      = array();
                  foreach ($oneLevelLower as $oll) {
                      $lastEl = $oll[$n - 2];
                      $found  = false;
                      foreach ($base as $key => $b) {
                          if ($b == $lastEl) {
                              $found = true;
                              continue;
                          }
                          if ($found == true) {
                              if ($key < $baselen) {
                                  $tmp              = $oll;
                                  $newCombination   = array_slice($tmp, 0);
                                  $newCombination[] = $b;
                                  $newCombs[]       = array_slice($newCombination, 0);
                              }
                          }
                      }
                  }
              }
              return $newCombs;
          }

          function generate_all($data)
          {
              $result = array();
              $n      = count($data);
              //generate kombinasi 1 -> (jumlahdata-1)
              for ($i = 1; $i < $n; $i++) {
                  $combination[$i] = get_combinations($data, $i);
              }
              //set pertama
              //--------------------
              if ($n <= 2) {
                  $result[] = $data[0] . "->" . $data[1];
                  $result[] = $data[1] . "->" . $data[0];
              } else {
                  foreach ($combination[2] as $x => $y) {
                      $result[] = implode("->", $y); //simpan kombinasi 2 nya
                  }
                  $rev_comb_2 = array_reverse($combination[2]); //kombinasi 2 dibalik
                  foreach ($rev_comb_2 as $x => $y) {
                      $result[] = implode("->", array_reverse($y)); //simpan kombinasi 2 yang sudah dibalik posisinya
                  }
                  //set ke 2,3,4,,,,n
                  //--------------------
                  for ($i = 2; $i < $n; $i++) {
                      if ($i == 2) { // ini utk set ke 2
                          $set[$i] = array_merge($combination[2], $combination[1]); //gabungkan kombinasi 2 dan 1
                      } else { // ini utk set ke 3,4,5, dst...
                          $set[$i] = array_merge($combination[$i], $set[$i - 1]); //gabungkan kombinasi $i dengan $set[$i-1]
                      }
                      $rev_set = array_reverse($set[$i]); //set nya dibalik
                      foreach ($set[$i] as $x => $y) {
                          list($x2, $y2) = each($rev_set);
                          $result[] = implode("|", $y) . "->" . implode("|", $y2); //simpan set nya dengan format (set -> set_yg_dibalik)
                      }
                  }
              }
              return $result;
          }

          function get_confidence($data, $x, $y)
          {
              $a  = explode("|", $x);
              $b  = explode("|", $y);
              $xy = array_merge($a, $b);
              $xy = array_values(array_unique($xy));
              sort($xy);
              $data_xy = implode("|", $xy);
              $idx_x   = array_keys($data[0], $x);
              $idx_xy  = array_keys($data[0], $data_xy);
              if (!empty($idx_x) && !empty($idx_xy)) {
                  $support_x  = $data[1][$idx_x[0]];
                  $support_xy = $data[1][$idx_xy[0]];
              }
              $confidence = isset($support_x) ? ($support_xy / $support_x) : 0;
              $result     = (isset($support_x) ? array(
                  $support_xy,
                  $support_x,
                  $confidence
              ) : array(
                  0,
                  0,
                  0
              ));
              return $result;
          }

          function association_rule($data)
          {
              $result = array();
              for ($i = 0; $i < count($data[0]); $i++) {
                  $x = $data[0][$i];
                  if (count($x) > 1) {
                      $result = array_merge($result, generate_all($data[0][$i]));
                  }
              }
              $rule = array_values(array_unique($result));
              $a    = array_rebuild($data);
              sort($rule);
              $result = array();
              for ($i = 0; $i < count($rule); $i++) {
                  $item     = explode("->", $rule[$i]);
                  $rule[$i] = "{" . str_replace("|", " ", $rule[$i]) . "}";
                  $rule[$i] = str_replace("->", "}->{", $rule[$i]);
                  $result[] = array_merge(array(
                      $rule[$i]
                  ), get_confidence($a, $item[0], $item[1]));
              }
              return $result;
          }

          function print_association_rule($data, $title)
          {
              echo (isset($title) ? "<h4>" . $title . "</h4>\n" : "");
              echo "<table class='table table-striped table-hover table-bordered'>
                      <tr class='info'>
                        <th class='text-center'>Rule</th>
                        <th class='text-center'>Support (XY)</th>
                        <th class='text-center'>Support (X)</th>
                        <th class='text-center'>Confidence</th>
                      </tr>
                ";
              for ($i = 0; $i < count($data); $i++) {
                  echo "<tr>";
                  for ($j = 0; $j < count($data[$i]); $j++) {
                      echo "<td class='text-center'>" . substr($data[$i][$j], 0, 30) . "</td>";
                  }
                  echo "</tr>";
              }
              echo "</table>";
          }

          function print_fix_rule($data, $title, $minconf)
          {
              echo (isset($title) ? "<h4>" . $title . "</h4>\n" : "");
              echo "<table class='table table-striped table-hover table-bordered'>
                      <tr class='info'>
                        <th class='text-center'>Rule</th>
                        <th class='text-center'>Support (XY)</th>
                        <th class='text-center'>Support (X)</th>
                        <th class='text-center'>Confidence</th>
                      </tr>
                ";
              for ($i = 0; $i < count($data); $i++) {
                  echo "<tr>";
                  for ($j = 0; $j < count($data[$i]); $j++) {
                    if ($data[$i][3] >= $minconf) {
                      echo "<td class='text-center'>" . substr($data[$i][$j], 0, 50) . "</td>";
                    }
                  }
                  echo "</tr>";
              }
              echo "</table>";
          }

          function apriori($data, $title = NULL, $minconf)
          {
              echo isset($title) ? "<h1>" . $title . "</h1>" : "";
              $min_sup  = MIN_SUPPORT * 100;
              $min_conf = MIN_CONFIDENCE * 100;
          ?>
                <table class='table table-striped table-hover table-bordered'>
                    <tr class="info">
                      <th class="text-center">Jumlah Transaksi</th>
                      <th class="text-center">MIN-Support</th>
                      <th class="text-center">MIN-Confidence</th>
                      <th class="text-center">Action</th>
                    </tr>
                    <tr>
                      <td class="text-center"><?php echo count($data); ?></td> 
                      <td class="text-center"><?php echo $min_sup; ?>%</td> 
                      <td class="text-center"><?php echo $min_conf; ?>%</td> 
                      <td class="text-center"><a href="<?php echo base_url(); ?>perhitungan/edit" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a></td> </tr>
                </table>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="separator middle"></div>
                  </div>
                </div>
          <?php
              $no_trans = count($data);
              echo "<blockquote><h3>STEP 1</h3><small>Mencari semua Frequent Itemsets</small></blockquote>";
              $result[0] = $data;
              $step      = 1;
              $status    = FALSE;
              
              $frequent_item = array(
                  array(),
                  array()
              );
              do {
                  $c  = array_consolidate($result[0]);
                  $bl = build_candidate($c, $step);
                  print_itemset($bl, $step, 1);
                  $jo = join_step($data, $bl);
                  print_support($jo, $step, "Join C -");
                  $result = prune_data($jo, $no_trans, MIN_SUPPORT);
                  
                  if (isset($result[0]) && isset($result[1])) {
                      $status           = TRUE;
                      $frequent_item[0] = array_merge((array) $frequent_item[0], (array) $result[0]);
                      $frequent_item[1] = array_merge((array) $frequent_item[1], (array) $result[1]);
                      print_support($result, $step, "Prune L -");
                      $step++;
                  }
              } while (!empty($result) && count($result[0]) > 1);
              
              print_support($frequent_item, "", "Frequent Itemsets");
              
          ?>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="separator middle"></div>
                  </div>
                </div>
                <?php
              
              echo "<blockquote><h3>STEP 2</h3><small>Generate Association Rules berdasarkan Frequent Itemsets</small></blockquote>";
              $rule = association_rule($frequent_item);
              print_association_rule($rule, "Association Rules : ");
               ?>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="separator middle"></div>
                  </div>
                </div>
                <?php
              echo "<blockquote><h3>STEP 3</h3><small>Mencari rekomendasi rule yang sesuai berdasarkan Minimun Confidence</small></blockquote>";
              print_fix_rule($rule, "Rekomendasi Rules : ", $minconf);

          }
      ?>

      <?php
        define('MIN_SUPPORT', $min_sup);
        define('MIN_CONFIDENCE', $min_conf);

        $baris = count($hasil);
        $data3 = array();

        $i = 0;
        foreach ($hasil->result() as $row) {
            $data3[$i] = explode(",", $row->items);
            $i++;
        }

        apriori($data3, '',MIN_CONFIDENCE);

      ?>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="separator middle"></div>
      </div>
    </div>
    <a href="javascript:history.go(-1)" class="btn btn-default">&larr; Back</a>
    <br>
    <br>
  </div>
</div>