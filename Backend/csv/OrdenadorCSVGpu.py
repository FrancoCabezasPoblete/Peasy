filePath = input("Ingrese el archivo CSV a ordenar: ")
oldFile = open("Desordenados/"+filePath+".csv")
dictGpu = {}
numeros = ['0','1','2','3','4','5','6','7','8','9']
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
        contComas = 0
        posTabla = 0
        flag = False
        for char in range(len(tabla)):
            if(char == len(tabla)-1):
                listaItem = tabla[posTabla:].split(", ")
                listaTablas.append(list(listaItem))
            else:
                if(tabla[char] == "," and tabla[char+1] not in numeros):
                    contComas += 1
                if(contComas%4 == 0 and contComas != 0 and tabla[char] not in numeros):
                    posTablaF = char
                    contComas = 0
                    listaItem = tabla[posTabla:posTablaF].split(", ")
                    listaTablas.append(list(listaItem))
                    posTabla = posTablaF+1
        #link
        listaLink = link.split(",")
        #Combinacion
        for i in range(len(listaNombres)):
            dictGpu[listaNombres[i]] = {}
            dictGpu[listaNombres[i]]["precio"] = listaPrecios[i]
            dictGpu[listaNombres[i]]["gpu"] = listaTablas[i][0]
            dictGpu[listaNombres[i]]["memoria"] = listaTablas[i][1]
            dictGpu[listaNombres[i]]["frecuencias"] = listaTablas[i][2]
            dictGpu[listaNombres[i]]["bus"] = listaTablas[i][3]
            dictGpu[listaNombres[i]]["link"] = listaLink[i]
    else:
        primeraLinea = False
oldFile.close()
#CSV
newFile = open("Ordenados/"+filePath+"Ordenado.csv","w")
newFile.write("nombre,precio,gpu,memoria,frecuencias,bus,link\n")
for i in dictGpu:
    newFile.write(i+","+dictGpu[i]["precio"]+","+dictGpu[i]["gpu"]+","+dictGpu[i]["memoria"]+","+dictGpu[i]["frecuencias"]+","+dictGpu[i]["bus"]+","+dictGpu[i]["link"]+"\n")
newFile.close()
