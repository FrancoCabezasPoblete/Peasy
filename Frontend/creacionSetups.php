<?php
$resultados = [];
$cont = 0;
foreach($cpu as $i){
    foreach($gpu as $j){
        if($budget>=$i['precio']+$j['precio']){
            foreach($gab as $k){
                if($budget>=$i['precio']+$j['precio']+$k['precio']){
                    foreach($placa as $w){
                        if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio'] && ($w['socket'] == $i['socket']) && ($k['formato'] == $w['formato'] || ($k['formato'] == 'Extended ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'ATX' && ($w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'Micro ATX' && ($w['formato'] == 'Mini ITX')) || ($k['formato'] == 'XL-ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')))){
                            foreach($psu as $l){
                                if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio']){
                                    foreach($ram as $u){
                                        if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio'] && ($u['tipo'] == $w['tipomemoria']) && ($u['formato'] == 'DIMM')){
                                            foreach($hdd as $o){
                                                if($budget >= $i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio']+$o['precio'] && $cont < 300){
                                                    $resultados[] = [
                                                        'cpu'=>$i,
                                                        'gab'=>$k,
                                                        'gpu'=>$j,
                                                        'placa'=>$w,
                                                        'psu'=>$l,
                                                        'ram'=>$u,
                                                        'almacenamiento'=>$o,
                                                        'precioTotal'=>$i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio']+$o['precio']            
                                                    ];
                                                    $cont++;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

//$cont = 0;
//foreach($resultadostemp as $i){
    //foreach($ssd as $j){
        //if($budget >= $i['precioTotal']+$j[1] && $cont < 100){
            //$resultados[] = [
                //'cpu'=>$i['cpu'],
                //'gab'=>$i['gab'],
                //'gpu'=>$i['gpu'],
                //'placa'=>$i['placa'],
                //'psu'=>$i['psu'],
                //'ram'=>$i['ram'],
               // 'almacenamiento'=>$j,
                //'precioTotal'=>$i['precioTotal']+$j[1]              
            //];
            //$cont++;
       // }
    //}
//}
?>