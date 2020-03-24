filePath = input("Ingrese el archivo CSV a ordenar: ")
oldFile = open("Desordenados/"+filePath+".csv")
dictFP = {}
primeraLinea = True
for linea in oldFile:
    if(primeraLinea != True):
        linea = linea.strip().lstrip('"').rstrip('"').split('","')
        certificacion = linea[0]
        modular = linea[1]
        nombres = linea[2]
        pcf = linea[3]
        potencia = linea[4]
        precios = linea[5]
        link = linea[6]
        #nombre
        listaNombres = nombres.split(",")
        #precio
        listaPrecios = precios.lstrip("$ ").split(",$ ")
        #potencia
        listaPotencias = potencia.split(",")
        #certificacion
        listaCertificacion = certificacion.split(",")
        #modular
        listaModular = modular.lstrip(" ").rstrip(" ").split(" , ") 
        #pcf
        listaPcf = pcf.lstrip(" ").rstrip(" ").split(" , ")
        #link
        listaLink = link.split(",")
        #Combinacion
        for i in range(len(listaNombres)):
            dictFP[listaNombres[i]] = {}
            dictFP[listaNombres[i]]["precio"] = listaPrecios[i]
            dictFP[listaNombres[i]]["potencia"] = listaPotencias[i]
            dictFP[listaNombres[i]]["certificacion"] = listaCertificacion[i]
            dictFP[listaNombres[i]]["modular"] = listaModular[i]
            dictFP[listaNombres[i]]["pcf"] = listaPcf[i]
            dictFP[listaNombres[i]]["link"] = listaLink[i]
    else:
        primeraLinea = False
oldFile.close()
#CSV
newFile = open("Ordenados/"+filePath+"Ordenado.csv","w")
newFile.write("nombre,precio,potencia,certificacion,modular,pcf,link\n")
for i in dictFP:
    newFile.write(i+","+dictFP[i]["precio"]+","+dictFP[i]["potencia"]+","+dictFP[i]["certificacion"]+","+dictFP[i]["modular"]+","+dictFP[i]["pcf"]+","+dictFP[i]["link"]+"\n")
newFile.close()
