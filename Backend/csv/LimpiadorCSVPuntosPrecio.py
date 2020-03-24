pathFile = input("Ingrese el nombre de su archivo a limpiar de puntos: ")
OldFile = open("Combinados/"+pathFile+".csv")
lista = []
for linea in OldFile:
    linea = linea.strip().split(",")
    lista.append(linea)
OldFile.close()
for i in lista:
    i[1] = i[1].replace(".","") 
newFile = open("Combinados/"+pathFile+"Final.csv","w")
for i in lista:
    i = ",".join(i)
    newFile.write(i+"\n")
newFile.close()
