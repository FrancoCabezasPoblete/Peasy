fileCSV = input("Ingrese el archivo CSV a limpiar de repetidos: ")
with open(fileCSV, "r") as f_in:
   unicos = list(f_in.readlines())
for i in unicos :
   cont = 0
   comaicont = 0
   for icoma in range(len(i)):
      if(i[icoma] == ','):
         comaicont += 1
      if(comaicont == 2):
         coma1i = icoma
      elif(comaicont == 3):
         coma2i = icoma
   for j in unicos :
      comajcont = 0
      for jcoma in range(len(j)):
         if(j[jcoma] == ','):
            comajcont += 1
         if(comajcont == 2):
            coma1j = jcoma
         elif(comajcont == 3):
            coma2j = jcoma
      if(j[coma1j+2:coma2j+1] == i[coma1i+2:coma2i+1]):
         cont += 1
   if(cont > 1):
      unicos.remove(i)
with open(fileCSV, "w") as f_out:
   f_out.write("".join(unicos))
