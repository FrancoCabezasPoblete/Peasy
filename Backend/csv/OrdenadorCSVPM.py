filePath = input("Ingrese el archivo CSV a ordenar: ")
oldFile = open("Desordenados/"+filePath+".csv")
dictPM = {}
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
                if((i+1)%4 == 0 and i != 0):
                    posSpecsF = i
                    listaTablas.append(specs[posSpecs:posSpecsF+1])
                    posSpecs = posSpecsF+1
        #link
        listaLink = link.split(",")
        #tipomemoria
        listaTipoMemorias = []
        #Combinacion
        for i in range(len(listaNombres)):
            for j in range(len(listaTablas[i][2])):
                if(listaTablas[i][2][j] == " "):
                    inicio = j+1
                    listaTipoMemorias.append(listaTablas[i][2][inicio:])
            dictPM[listaNombres[i]] = {}
            dictPM[listaNombres[i]]["precio"] = listaPrecios[i]
            dictPM[listaNombres[i]]["socket"] = listaTablas[i][0]
            dictPM[listaNombres[i]]["chipset"] = listaTablas[i][1]
            dictPM[listaNombres[i]]["memorias"] = listaTablas[i][2]
            dictPM[listaNombres[i]]["formato"] = listaTablas[i][3]
            dictPM[listaNombres[i]]["tipomemoria"] = listaTipoMemorias[i]
            dictPM[listaNombres[i]]["link"] = listaLink[i]
    else:
        primeraLinea = False
oldFile.close()
#CSV
newFile = open("Ordenados/"+filePath+"Ordenado.csv","w")
newFile.write("nombre,precio,socket,chipset,memorias,formato,tipomemoria,link\n")
for i in dictPM:
    newFile.write(i+","+dictPM[i]["precio"]+","+dictPM[i]["socket"]+","+dictPM[i]["chipset"]+","+dictPM[i]["memorias"]+","+dictPM[i]["formato"]+","+dictPM[i]["tipomemoria"]+","+dictPM[i]["link"]+"\n")
newFile.close()
