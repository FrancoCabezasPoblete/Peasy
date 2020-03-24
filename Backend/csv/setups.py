archivoCpu = open("Combinados/CpuFinalFinal.csv")
archivoFP = open("Combinados/FPFinal.csv")
archivoGabinete = open("Combinados/GabineteFinal.csv")
archivoGpu = open("Combinados/GpuFinal.csv")
archivoHDD = open("Combinados/HDDFinal.csv")
archivoPM = open("Combinados/PMFinal.csv")
archivoRam = open("Combinados/RamFinal.csv")
archivoSSD = open("Combinados/SSDFinal.csv")
cpu = {}
primeraLinea = True
for linea in archivoCpu:
    if(primeraLinea):
        linea = linea.strip().split(",")
        


resultados = []
cont = 0
for i in cpu:
    for j in gpu:
        if(budget>=i['precio']+j['precio']):
            for k in gab:
                if(budget>=i['precio']+j['precio']+k['precio']):
                    for w in placa:
                        if(budget>=i['precio']+j['precio']+k['precio']+w['precio'] and (w['socket'] == i['socket']) and (k['formato'] == w['formato'] or (k['formato'] == 'Extended ATX' and (w['formato'] == 'ATX' or w['formato'] == 'Micro ATX' or w['formato'] == 'Mini ITX')) or (k['formato'] == 'ATX' and (w['formato'] == 'Micro ATX' or w['formato'] == 'Mini ITX')) or (k['formato'] == 'Micro ATX' and (w['formato'] == 'Mini ITX')) or (k['formato'] == 'XL-ATX' and (w['formato'] == 'ATX' or w['formato'] == 'Micro ATX' or w['formato'] == 'Mini ITX')))):
                            for l in psu:
                                if(budget>=i['precio']+j['precio']+k['precio']+w['precio']+l['precio']):
                                    for u in ram:
                                        if(budget>=i['precio']+j['precio']+k['precio']+w['precio']+l['precio']+u['precio'] and (u['tipo'] == w['tipomemoria']) and (u['formato'] == 'DIMM')):
                                            for o in hdd:
                                                if(budget >= i['precio']+j['precio']+k['precio']+w['precio']+l['precio']+u['precio']+o['precio'] and cont < 100):
                                                    resultados[] = [
                                                        'cpu'=>i,
                                                        'gab'=>k,
                                                        'gpu'=>j,
                                                        'placa'=>w,
                                                        'psu'=>l,
                                                        'ram'=>u,
                                                        'almacenamiento'=>o,
                                                        'precioTotal'=>i['precio']+j['precio']+k['precio']+w['precio']+l['precio']+u['precio']+o['precio']            
                                                    ]
                                                    cont += 1
                                                
                                            
                                        
                                    
                                
                            
                        
                    
                
            
        
    
