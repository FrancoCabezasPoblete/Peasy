<?php
$resultados = [];
$cont = 0;
//Con gpu
foreach($cpu as $i){
    foreach($gpu as $j){
        if($budget>=$i['precio']+$j['precio'] && $cont < 75){
            foreach($gab as $k){
                if($budget>=$i['precio']+$j['precio']+$k['precio'] && $cont < 75){
                    foreach($placa as $w){
                        if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio'] && $cont < 75 && ($w['socket'] == $i['socket']) && ($k['formato'] == $w['formato'] || ($k['formato'] == 'Extended ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'ATX' && ($w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'Micro ATX' && ($w['formato'] == 'Mini ITX')) || ($k['formato'] == 'XL-ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')))){
                            foreach($psu as $l){
                                if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio'] && $cont < 75){
                                    foreach($ram as $u){
                                        if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio'] && $cont < 75 && ($u['tipo'] == $w['tipomemoria']) && ($u['formato'] == 'DIMM')){
                                            foreach($hdd as $o){
                                                if($budget >= $i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio']+$o['precio'] && $cont < 75){
                                                    $resultados[] = [
                                                        'cpu'=>$i,
                                                        'gab'=>$k,
                                                        'gpu'=>$j,
                                                        'placa'=>$w,
                                                        'psu'=>$l,
                                                        'ram'=>$u,
                                                        'almacenamiento'=>$o,
                                                        'tipoalmacenamiento' => 'hdd',
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
$cont = 0;
foreach($cpu as $i){
    foreach($gpu as $j){
        if($budget>=$i['precio']+$j['precio'] && $cont < 55){
            foreach($gab as $k){
                if($budget>=$i['precio']+$j['precio']+$k['precio'] && $cont < 55){
                    foreach($placa as $w){
                        if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio'] && $cont < 55 && ($w['socket'] == $i['socket']) && ($k['formato'] == $w['formato'] || ($k['formato'] == 'Extended ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'ATX' && ($w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'Micro ATX' && ($w['formato'] == 'Mini ITX')) || ($k['formato'] == 'XL-ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')))){
                            foreach($psu as $l){
                                if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio'] && $cont < 55){
                                    foreach($ram as $u){
                                        if($budget>=$i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio'] && $cont < 55 && ($u['tipo'] == $w['tipomemoria']) && ($u['formato'] == 'DIMM')){
                                            foreach($ssd as $o){
                                                if($budget >= $i['precio']+$j['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio']+$o['precio'] && $cont < 55){
                                                    $resultados[] = [
                                                        'cpu'=>$i,
                                                        'gab'=>$k,
                                                        'gpu'=>$j,
                                                        'placa'=>$w,
                                                        'psu'=>$l,
                                                        'ram'=>$u,
                                                        'almacenamiento'=>$o,
                                                        'tipoalmacenamiento' => 'ssd',
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
//Sin gpu
$cont = 0;
foreach($cpu as $i){
    foreach($gab as $k){
        if($budget>=$i['precio']+$k['precio'] && $cont < 55){
            foreach($placa as $w){
                if($budget>=$i['precio']+$k['precio']+$w['precio'] && $cont < 55 && ($w['socket'] == $i['socket']) && ($k['formato'] == $w['formato'] || ($k['formato'] == 'Extended ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'ATX' && ($w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'Micro ATX' && ($w['formato'] == 'Mini ITX')) || ($k['formato'] == 'XL-ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')))){
                    foreach($psu as $l){
                        if($budget>=$i['precio']+$k['precio']+$w['precio']+$l['precio'] && $cont < 55){
                            foreach($ram as $u){
                                if($budget>=$i['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio'] && $cont < 55 && ($u['tipo'] == $w['tipomemoria']) && ($u['formato'] == 'DIMM')){
                                    foreach($hdd as $o){
                                        if($budget >= $i['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio']+$o['precio'] && $cont < 55){
                                            $resultados[] = [
                                                'cpu'=>$i,
                                                'gab'=>$k,
                                                'gpu'=>'no',
                                                'placa'=>$w,
                                                'psu'=>$l,
                                                'ram'=>$u,
                                                'almacenamiento'=>$o,
                                                'tipoalmacenamiento' => 'hdd',
                                                'precioTotal'=>$i['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio']+$o['precio']            
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
$cont = 0;
foreach($cpu as $i){
    foreach($gab as $k){
        if($budget>=$i['precio']+$k['precio'] && $cont < 55){
            foreach($placa as $w){
                if($budget>=$i['precio']+$k['precio']+$w['precio'] && $cont < 55 && ($w['socket'] == $i['socket']) && ($k['formato'] == $w['formato'] || ($k['formato'] == 'Extended ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'ATX' && ($w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')) || ($k['formato'] == 'Micro ATX' && ($w['formato'] == 'Mini ITX')) || ($k['formato'] == 'XL-ATX' && ($w['formato'] == 'ATX' || $w['formato'] == 'Micro ATX' || $w['formato'] == 'Mini ITX')))){
                    foreach($psu as $l){
                        if($budget>=$i['precio']+$k['precio']+$w['precio']+$l['precio'] && $cont < 55){
                            foreach($ram as $u){
                                if($budget>=$i['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio'] && $cont < 55 && ($u['tipo'] == $w['tipomemoria']) && ($u['formato'] == 'DIMM')){
                                    foreach($ssd as $o){
                                        if($budget >= $i['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio']+$o['precio'] && $cont < 55){
                                            $resultados[] = [
                                                'cpu'=>$i,
                                                'gab'=>$k,
                                                'gpu'=>'no',
                                                'placa'=>$w,
                                                'psu'=>$l,
                                                'ram'=>$u,
                                                'almacenamiento'=>$o,
                                                'tipoalmacenamiento' => 'ssd',
                                                'precioTotal'=>$i['precio']+$k['precio']+$w['precio']+$l['precio']+$u['precio']+$o['precio']            
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
?>