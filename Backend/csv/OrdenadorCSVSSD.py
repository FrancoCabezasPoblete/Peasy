filePath = input("Ingrese el archivo CSV a ordenar: ")
oldFile = open("Desordenados/"+filePath+".csv")
dictSSD = {}
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
        for i in range(len(listaNombres)):
            for j in range(len(listaNombres[i])):
                if(listaNombres[i][j] == "("):
                    listaNombres[i] = listaNombres[i][:j-1]
                    break
        #precio
        listaPrecios = precios.lstrip("$ ").split(",$ ")
        #tabla
        listaTablas = []
        specs = tabla.split(",")
        posSpecs = 0
        for i in range(len(specs)):
            if(i == len(specs)-1):
                listaTablas.append(specs[posSpecs:])
            else:
                if((i+1)%3 == 0 and i != 0):
                    posSpecsF = i
                    listaTablas.append(specs[posSpecs:posSpecsF+1])
                    posSpecs = posSpecsF+1
        #link
        listaLink = link.split(",")
        #Combinacion
        for i in range(len(listaNombres)):
            dictSSD[listaNombres[i]] = {}
            dictSSD[listaNombres[i]]["precio"] = listaPrecios[i]
            dictSSD[listaNombres[i]]["capacidad"] = listaTablas[i][0]
            dictSSD[listaNombres[i]]["formato"] = listaTablas[i][1]
            dictSSD[listaNombres[i]]["bus"] = listaTablas[i][2]
            dictSSD[listaNombres[i]]["link"] = listaLink[i]
    else:
        primeraLinea = False
oldFile.close()
#CSV
newFile = open("Ordenados/"+filePath+"Ordenado.csv","w")
newFile.write("nombre,precio,capacidad,formato,bus,link\n")
for i in dictSSD:
    newFile.write(i+","+dictSSD[i]["precio"]+","+dictSSD[i]["capacidad"]+","+dictSSD[i]["formato"]+","+dictSSD[i]["bus"]+","+dictSSD[i]["link"]+"\n")
newFile.close()
