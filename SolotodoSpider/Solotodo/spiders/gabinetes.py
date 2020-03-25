import scrapy
from ..items import SolotodoItemGabinetes

class gabinetesSpider(scrapy.Spider):
    name = 'gabinetes'
    start_urls = [
        'https://www.solotodo.com/computer_cases'
                  ]
    flag = 2
    contador = 0
    def parse(self, response):
        items = SolotodoItemGabinetes()
        #Informacion de cada objeto
        nombre = response.css('h3 a::text').getall()
        precio = response.css('#category-browse-results-card .flex-grow a::text').getall()
        formato = response.css('dd:nth-child(2)::text').getall()
        fuente_poder = response.css('dd:nth-child(4)::text').getall()
        ubicacion = response.css('dd:nth-child(6)::text').getall()
        panel_lateral = response.css('dd:nth-child(8)::text').getall()
        ventiladores = response.css('.description-container li::text').getall()
        link = response.css('h3 a::attr(href)').getall()
        link_final = []
        for direccion in link:
            link_final.append("https://www.solotodo.com" + direccion)

        #items
        items['nombre'] = nombre
        items['precio'] = precio
        items['formato'] = formato
        items['fuente_poder'] = fuente_poder
        items['ubicacion_fuente'] = ubicacion
        items['panel_lateral'] = panel_lateral
        items['ventiladores'] = ventiladores
        items['z_link'] = link_final
        # Selecciona la paginacion
        gabinetesSpider.contador += len(nombre)
        limite = response.css('#category-browse-results-card .pl-2 .category-browse-result-count::text').getall()
        limite = int(limite[4])
        #avanza a la siguiente pagina
        pag_siguiente = 'https://www.solotodo.com/computer_cases?ordering=offer_price_usd&page='+ str(gabinetesSpider.flag) +'&'
        if gabinetesSpider.contador < limite:
            gabinetesSpider.flag += 1
            yield response.follow(pag_siguiente, callback= self.parse)

        yield items

        pass