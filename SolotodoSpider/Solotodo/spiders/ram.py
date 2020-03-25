# -*- coding: utf-8 -*-
import scrapy
from ..items import SolotodoItem

class ramSpider(scrapy.Spider):
    name = 'ram'
    start_urls = [
        'https://www.solotodo.com/rams'
                  ]
    flag = 2
    contador = 0
    def parse(self, response):
        items = SolotodoItem()
        #Informacion de cada objeto
        nombre = response.css('h3 a::text').getall()
        precio = response.css('#category-browse-results-card .flex-grow a::text').getall()
        tabla = response.css('dd::text').getall()
        link = response.css('h3 a::attr(href)').getall()
        link_final = []
        for direccion in link:
            link_final.append("https://www.solotodo.com" + direccion)
        #items
        items['nombre'] = nombre
        items['precio'] = precio
        items['tabla'] = tabla
        items['z_link'] = link_final
        # Selecciona la paginacion
        ramSpider.contador += len(nombre)
        limite = response.css('#category-browse-results-card .pl-2 .category-browse-result-count::text').getall()
        limite = int(limite[4])
        #avanza a la siguiente pagina
        pag_siguiente = 'https://www.solotodo.com/rams?ordering=offer_price_usd&page='+ str(ramSpider.flag) +'&'
        if ramSpider.contador < limite:
            ramSpider.flag += 1
            yield response.follow(pag_siguiente, callback= self.parse)

        yield items

        pass
