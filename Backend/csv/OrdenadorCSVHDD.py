filePath = input("Ingrese el archivo CSV a ordenar: ")
oldFile = open("Desordenados/"+filePath+".csv")
dictHDD = {}
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
                if((i+1)%5 == 0 and i != 0):
                    posSpecsF = i
                    listaTablas.append(specs[posSpecs:posSpecsF+1])
                    posSpecs = posSpecsF+1
        #link
        listaLink = link.split(",")
        #Combinacion
        for i in range(len(listaNombres)):
            dictHDD[listaNombres[i]] = {}
            dictHDD[listaNombres[i]]["precio"] = listaPrecios[i]
            dictHDD[listaNombres[i]]["tipo"] = listaTablas[i][0]
            dictHDD[listaNombres[i]]["capacidad"] = listaTablas[i][1]
            dictHDD[listaNombres[i]]["rpm"] = listaTablas[i][2]
            dictHDD[listaNombres[i]]["tamano"] = listaTablas[i][3]
            dictHDD[listaNombres[i]]["bus"] = listaTablas[i][4]
            dictHDD[listaNombres[i]]["link"] = listaLink[i]
    else:
        primeraLinea = False
oldFile.close()
#CSV
newFile = open("Ordenados/"+filePath+"Ordenado.csv","w")
newFile.write("nombre,precio,tipo,capacidad,rpm,tamano,bus,link\n")
for i in dictHDD:
    newFile.write(i+","+dictHDD[i]["precio"]+","+dictHDD[i]["tipo"]+","+dictHDD[i]["capacidad"]+","+dictHDD[i]["rpm"]+","+dictHDD[i]["tamano"]+","+dictHDD[i]["bus"]+","+dictHDD[i]["link"]+"\n")
newFile.close()
