pathFile1 = input("Ingrese el archivo ordenado a combinar: ")
pathFile2 = input("Ingrese el archivo de imagenes a combinar: ")
oldFile1 = open("Ordenados/"+pathFile1+"Ordenado.csv")
oldFile2 = open("img/img"+pathFile2+".csv")
listaFinal1 = []
listaFinal2 = []
for linea in oldFile1:
    linea = linea.strip()
    listaFinal1.append(linea)
for linea in oldFile2:
    linea = linea.strip()
    listaFinal2.append(linea)
oldFile1.close()
newFile = open("Combinados/"+pathFile2+".csv","w")
for i in range(len(listaFinal1)):
    newFile.write(listaFinal1[i]+","+listaFinal2[i]+"\n")
newFile.close()
