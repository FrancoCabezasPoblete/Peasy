filePath = input("Ingrese el archivo CSV a ordenar: ")
oldFile = open("Desordenados/"+filePath+".csv")
dictGab = {}
primeraLinea = True
for linea in oldFile:
    if(primeraLinea != True):
        linea = linea.strip().lstrip('"').rstrip('"').split('","')
        formatos = linea[0]
        fuentePoder = linea[1]
        nombres = linea[2]
        panel = linea[3]
        precios = linea[4]
        ubFuente = linea[5]
        link = linea[7]
        #nombre
        listaNombres = nombres.split(",")
        #precio
        listaPrecios = precios.lstrip("$ ").split(",$ ")
        #formatos
        listaformatos = formatos.split(",")
        #fuentePoder
        listaFP = fuentePoder.split(",")
        #ubFuente
        listaUbFP = ubFuente.split(",")
        #panel
        listaPanel = panel.split(",")
        #link
        listaLink = link.split(",")
        #Combinacion
        for i in range(len(listaNombres)):
            dictGab[listaNombres[i]] = {}
            dictGab[listaNombres[i]]["precio"] = listaPrecios[i]
            dictGab[listaNombres[i]]["formato"] = listaformatos[i]
            dictGab[listaNombres[i]]["fuentepoder"] = listaFP[i]
            dictGab[listaNombres[i]]["ubfuente"] = listaUbFP[i]
            dictGab[listaNombres[i]]["panellateral"] = listaPanel[i]
            dictGab[listaNombres[i]]["link"] = listaLink[i]
    else:
        primeraLinea = False
oldFile.close()
#CSV
newFile = open("Ordenados/"+filePath+"Ordenado.csv","w")
newFile.write("nombre,precio,formato,fuentepoder,ubfuente,panellateral,link\n")
for i in dictGab:
    newFile.write(i+","+dictGab[i]["precio"]+","+dictGab[i]["formato"]+","+dictGab[i]["fuentepoder"]+","+dictGab[i]["ubfuente"]+","+dictGab[i]["panellateral"]+","+dictGab[i]["link"]+"\n")
newFile.close()
