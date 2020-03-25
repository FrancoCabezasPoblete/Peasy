# -*- coding: utf-8 -*-

# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

import scrapy


class SolotodoItem(scrapy.Item):
    nombre = scrapy.Field()
    tabla = scrapy.Field()
    precio = scrapy.Field()
    z_link = scrapy.Field()
    pass
class SolotodoItemGabinetes(scrapy.Item):
    nombre = scrapy.Field()
    precio = scrapy.Field()
    formato = scrapy.Field()
    fuente_poder = scrapy.Field()
    ubicacion_fuente = scrapy.Field()
    panel_lateral = scrapy.Field()
    ventiladores = scrapy.Field()
    z_link = scrapy.Field()

class SolotodoItemFuentes(scrapy.Item):
    nombre = scrapy.Field()
    precio = scrapy.Field()
    potencia = scrapy.Field()
    certificacion = scrapy.Field()
    modular = scrapy.Field()
    pcf_activo = scrapy.Field()
    z_link = scrapy.Field()