filePath = input("Ingrese el archivo CSV a ordenar: ")
oldFile = open("Desordenados/"+filePath+".csv")
dictRam = {}
primeraLinea = True
for linea in oldFile:
    if(primeraLinea != True):
        linea = linea.strip().lstrip('"').rstrip('"').split('","')
        nombres = linea[0]
        precios = linea[1]
        tabla = linea[2]
        link = linea[3]
        #nombre
        listaNombres = nombres.split(",")
        #precio
        listaPrecios = precios.lstrip("$ ").split(",$ ")
        #tabla
        listaTablas = []
        specs = tabla.split(",")
        posSpecs = 0
        #link
        listaLink = link.split(",")
        for i in range(len(specs)):
            if(i == len(specs)-1):
                listaTablas.append(specs[posSpecs:])
            else:
                if((i+1)%5 == 0 and i != 0):
                    posSpecsF = i
                    listaTablas.append(specs[posSpecs:posSpecsF+1])
                    posSpecs = posSpecsF+1
        #Combinacion
        for i in range(len(listaNombres)):
            dictRam[listaNombres[i]] = {}
            dictRam[listaNombres[i]]["precio"] = listaPrecios[i]
            dictRam[listaNombres[i]]["capacidad"] = listaTablas[i][0]
            dictRam[listaNombres[i]]["tipo"] = listaTablas[i][1]
            dictRam[listaNombres[i]]["frecuencia"] = listaTablas[i][2]
            dictRam[listaNombres[i]]["formato"] = listaTablas[i][3]
            dictRam[listaNombres[i]]["voltaje"] = listaTablas[i][4]
            dictRam[listaNombres[i]]["link"] = listaLink[i]
    else:
        primeraLinea = False
oldFile.close()
#CSV
newFile = open("Ordenados/"+filePath+"Ordenado.csv","w")
newFile.write("nombre,precio,capacidad,tipo,frecuencia,formato,voltaje,link\n")
for i in dictRam:
    newFile.write(i+","+dictRam[i]["precio"]+","+dictRam[i]["capacidad"]+","+dictRam[i]["tipo"]+","+dictRam[i]["frecuencia"]+","+dictRam[i]["formato"]+","+dictRam[i]["voltaje"]+","+dictRam[i]["link"]+"\n")
newFile.close()
