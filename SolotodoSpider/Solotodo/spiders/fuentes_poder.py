import scrapy
from ..items import SolotodoItemFuentes

class fuentesPoderSpider(scrapy.Spider):
    name = 'fuentes_poder'
    start_urls = [
        'https://www.solotodo.com/power_supplies'
                  ]
    flag = 2
    contador = 0
    def parse(self, response):
        items = SolotodoItemFuentes()
        #Informacion de cada objeto
        nombre = response.css('h3 a::text').getall()
        precio = response.css('#category-browse-results-card .flex-grow a::text').getall()
        potencia = response.css('dd:nth-child(2)::text').getall()
        certificacion = response.css('dd:nth-child(4)::text').getall()
        modular = response.css('dd:nth-child(8)::text').getall()
        pdf = response.css('dd:nth-child(10)::text').getall()
        link = response.css('h3 a::attr(href)').getall()
        link_final = []
        for direccion in link:
            link_final.append("https://www.solotodo.com" + direccion)

        #items
        items['nombre'] = nombre
        items['precio'] = precio
        items['potencia'] = potencia
        items['certificacion'] = certificacion
        items['modular'] = modular
        items['pcf_activo'] = pdf
        items['z_link'] = link_final
        # Selecciona la paginacion
        fuentesPoderSpider.contador += len(nombre)
        limite = response.css('#category-browse-results-card .pl-2 .category-browse-result-count::text').getall()
        limite = int(limite[4])
        #avanza a la siguiente pagina
        pag_siguiente = 'https://www.solotodo.com/power_supplies?ordering=offer_price_usd&page='+ str(fuentesPoderSpider.flag) +'&'
        if fuentesPoderSpider.contador < limite:
            fuentesPoderSpider.flag +=1
            yield response.follow(pag_siguiente, callback= self.parse)

        yield items

        pass
