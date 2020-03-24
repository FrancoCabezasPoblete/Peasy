filePath = input("Ingrese el archivo CSV a ordenar: ")
oldFile = open("Desordenados/"+filePath+".csv")
dictCpu = {}
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
            dictCpu[listaNombres[i]] = {}
            dictCpu[listaNombres[i]]["precio"] = listaPrecios[i]
            dictCpu[listaNombres[i]]["frecuencia"] = listaTablas[i][0]
            dictCpu[listaNombres[i]]["nucleos"] = listaTablas[i][1]
            dictCpu[listaNombres[i]]["socket"] = listaTablas[i][2]
            dictCpu[listaNombres[i]]["cache"] = listaTablas[i][3]
            dictCpu[listaNombres[i]]["arquitectura"] = listaTablas[i][4]
            dictCpu[listaNombres[i]]["link"] = listaLink[i]
    else:
        primeraLinea = False
oldFile.close()
#CSV
newFile = open("Ordenados/"+filePath+"Ordenado.csv","w")
newFile.write("nombre,precio,frecuencia,nucleos,socket,cache,arquitectura,link\n")
for i in dictCpu:
    newFile.write(i+","+dictCpu[i]["precio"]+","+dictCpu[i]["frecuencia"]+","+dictCpu[i]["nucleos"]+","+dictCpu[i]["socket"]+","+dictCpu[i]["cache"]+","+dictCpu[i]["arquitectura"]+","+dictCpu[i]["link"]+"\n")
newFile.close()
