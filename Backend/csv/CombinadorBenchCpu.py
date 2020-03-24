cpuFile = open("Combinados/Cpu.csv")
benchFile = open("Benchmarks/CPU_UserBenchmarks.csv")
listaFinal1 = []
listaFinal2 = []
for linea in cpuFile:
    linea = linea.strip()
    listaFinal1.append(linea)
for linea in benchFile:
    linea = linea.strip().split(",")
    linea = [linea[2]+" "+linea[3],linea[5]]
    listaFinal2.append(linea)
cpuFile.close()
benchFile.close()
listaNombres = []
for i in listaFinal1:
    temp = i.split(",")
    listaNombres.append(temp[0])
lista = []
for i in range(len(listaFinal1)):
    for j in range(len(listaFinal2)):
        if(listaNombres[i] == listaFinal2[j][0]):
            lista.append(listaFinal1[i]+","+listaFinal2[j][1])
newFile = open("Combinados/CpuFinal.csv","w")
newFile.write("nombre,precio,frecuencia,nucleos,socket,cache,arquitectura,link,imagen,benchmark\n")
for i in lista:
    newFile.write(i+"\n")
newFile.close()

    

