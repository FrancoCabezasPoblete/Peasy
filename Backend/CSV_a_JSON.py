import csv, json

csvPath = "csv/"+input("Ingrese el path del archivo a convertir: ")
jsonPath = "json/"+csvPath[4:csvPath.find(".")]+"JSON.json"

#leer el CSV para convertirla en diccionario
data = {}
with open(csvPath) as csvFile:
        csvReader = csv.DictReader(csvFile)
        for csvRow in csvReader:
            Model = csvRow["Model"]
            data[Model] = csvRow

#Escribir los datos en un archivo JSON
with open(jsonPath, "w") as jsonFile:
        jsonFile.write(json.dumps(data, indent=2))
