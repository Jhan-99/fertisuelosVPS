.. figure:: ../_static/carpeta.png
   :align: left
   
baches
******

:Descripción: Es el ciclo de elaboración de un producto. Hace referencia a ese proceso que se requiere para elaborar un producto terminado desde la recepción de la materia prima hasta el producto final en molde, sin corte. Por lo General se debe digitar esta información una única vez, por molde/ herramienta de cocción nueva, con el fin de tener un registro del rendimiento del bache.

.. code:: 
   
   CostosBaocadillo
   └── apps
          └── baches
              ├── __init__.py
              ├── admin.py
              ├── apps.py
              ├── migrations
              │   └── __init__.py
              ├── models.py
              ├── tests.py
              ├── views.py
              ├── forms.py
              └── urls.py
   
.. figure:: ../_static/carpeta.png
   :align: left
   
Migrations
==========
*Carpeta* : :mod:`migrations`


   Este es el directorio donde se almacenan todas las migraciones con las respectivas dependencias de sus modelos. Dentro de este archivo se encuentran los campos de la base de datos que establecimos en el archivo ``models.py`` con la respectiva característica del campo. Este archivo es generado con el comando ``makemigrations`` de Django y genera nuevas versiones con cada migración creada. 
   
       
       
.. figure:: ../_static/py.png
   :align: left

Models
======
*Archivo* : ``models.py``

.. note::

   Un modelo en Django es una clase importada de la biblioteca django.db que actúa como puente entre su base de datos y el servidor. Esta clase es una representación de la estructura de datos utilizada por su sitio web. Relacionará directamente esta estructura de datos con la base de datos. Para que no tenga que aprender SQL para la base de datos.
   
   
1. En primer lugar, se creo una nueva aplicación con el comando::

       django-admin startapp baches
       
donde ``baches`` es el nombre de la aplicación.

2. Después de crear la aplicación, debe instalarse en el proyecto. Para ello, se agregó la aplicación ``baches`` a la lista ``INSTALLED_APPS`` en el archivo *settings.py*.

.. code-block:: python
   :emphasize-lines: 8
   
       INSTALLED_APPS = [
       'django.contrib.admin',
       'django.contrib.auth',
       'django.contrib.contenttypes',
       'django.contrib.sessions',
       'django.contrib.messages',
       'django.contrib.staticfiles',
       'apps.baches',
       ]
       
       
3. En el archivo *models.py* encontraremos el siguiente código, correspondiente a los modelos de ``MoldeBaches``  y ``Baches``.

.. code-block:: python
       
       from django.db import models

       class MoldeBaches(models.Model):
           id_molde_mba =       models.AutoField(primary_key = True)
           nombre_mba =         models.CharField('Nombre del Molde Bache', max_length = 100, blank = False, null = False)
           descripcion_mba =    models.CharField('Descripción', max_length = 250, blank = False, null = False)
    
           class Meta:
               db_table = 'molde_bache'
               verbose_name = 'MoldeBache'
               verbose_name_plural = 'MoldeBaches'
               ordering = ['id_molde_mba']
    
           def __str__(self):
               return '{}'.format(self.nombre_bap)

       class Baches(models.Model):
           id_bache_bap =       models.AutoField(primary_key = True)
           nombre_bap =         models.CharField('Nombre del Bache', max_length = 100, blank = False, null = False)
           proveedor_bap =      models.CharField('Proveedor', max_length = 100, blank = False, null = False)	
           rendimiento_bap =    models.IntegerField('Rendimiento', blank = False, null = False)	
           herramienta_bap =    models.CharField('herramienta', max_length = 100, blank = False, null = False)	
           peso_molde_bpr =     models.IntegerField('peso del molde', blank = False, null = False) 	
           und_molde_bpr =      models.CharField('unidades', max_length = 100, blank = False, null = False)	
           cantidad_molde_bpr = models.IntegerField('cantidad molde', blank = False, null = False)
           moldes =             models.ForeignKey(MoldeBaches, on_delete=models.CASCADE)
    
           class Meta:
               db_table = 'baches'
               verbose_name = 'Bache'
               verbose_name_plural = 'Baches'
               ordering = ['id_bache_bap']
    
           def __str__(self):
               return '{}'.format(self.nombre_bap)
    
4. Aquí podemos ver que los campos de los modelos tienen muchos métodos para la entrada web, como :func:`CharField`, :func:`IntegerField`, :func:`AutoField`. Podemos ver mas `referencias <https://docs.djangoproject.com/en/3.0/ref/models/fields/>`_ en la documentación de Django. 

5. Ahora ejecutaremos los comandos::

       > py manage.py makemigrations
       > py manage.py migrate

.. tip::

   Asegúrese de tener la base de datos conectada y de haber iniciado el servidor Apache y el servidor MySQL en la base de datos.
   
   
.. figure:: ../_static/py.png
   :align: left
   
Admin
=====
*Archivo* : ``admin.py``

Al registrar el módelo ``baches`` y ``MoldeBaches`` con ``admin.site.register()``, Django puede construir una representación del formulario predeterminado.
Para poder registrar un modelo en el archivo :mod:`models.py` debemos importar el modelo con la función ``from`` y registrar el modelo con la sentencia ``admin.site.register()``:

.. code-block:: python
    
   from .models import Baches       # Importar el modelo desde models.py
   from .models import MoldeBaches

   admin.site.register(Baches)       # (nombre del modelo creado en models.py)
   admin.site.register(MoldeBaches)  
    
   
.. figure:: ../_static/py.png
   :align: left
   
   
Forms
=====
*Archivo* : ``forms.py``

En este archivo podremos crear los imputs para los campos de los formularios creados en html.

Lo bueno de los formularios de Django es que podemos definirlos desde cero o crear un ``ModelForm``, el cual guardará el resultado del formulario en el modelo. Para esto crearemos un formulario para nuestros modelos *MoldeBaches* y *Baches*.

Los formularios tienen su propio archivo: ``forms.py``.  Dentro de este archivo encontraremos el siguiente código:

.. code-block:: python

   from django import forms
   from .models import MoldeBaches,Baches
   class MoldeBachesForm(forms.ModelForm):
       class Meta:
       model = MoldeBaches
       fields = ['nombre_mba', 'descripcion_mba']  
        
   class BachesForm(forms.ModelForm):
       class Meta:
       model = Baches
       fields = ['nombre_bap', 'proveedor_bap', 'rendimiento_bap', 'herramienta_bap', 'peso_molde_bpr', 'und_molde_bpr', 'cantidad_molde_bpr'moldes'] 

Lo primero, necesitamos importar Django forms ``from django import forms`` y nuestros modelos *MoldeBaches,Baches* ``from .models import ..``.

``MoldeBachesForm`` y ``BachesForm``, son los nombres de nuestros formularios. Necesitamos decirle a Django que este formulario es un ``ModelForm`` así Django hará algo el resto por nosotros - ``forms.ModelForm`` es responsable de ello.

Luego, tenemos ``class Meta``, donde le decimos a Django qué modelo debe ser utilizado para crear este formulario ``model = MoldeBaches | model = Baches``.


.. figure:: ../_static/py.png
   :align: left

Views
=====
*Archivo* : ``views.py``

:Baches:

.. admonition:: Importaciones

   .. code-block:: python
   
      from django.shortcuts import render, redirect
      from django.core.exceptions import ObjectDoesNotExist
      from django.http import HttpResponse
      from .forms import BachesForm, MoldeBachesForm
      from .models import Baches, MoldeBaches


.. admonition:: Listar MoldeBaches

   .. code-block:: python

      def listarMoldeBaches(request):
          moldebaches = MoldeBaches.objects.all()
          #mandar la consulta al template y renderizar los datos traídos
          return render(request, 'MoldeBaches/listar.html', {'moldebaches': moldebaches})
          
          
.. admonition:: Crear MoldeBaches

   .. code-block:: python

      def crearMoldeBaches(request):
          if request.method == 'POST':
              print(request.POST)
              moldebaches_form = MoldeBachesForm(request.POST)
              if moldebaches_form.is_valid():
                  moldebaches_form.save()
                  return redirect('moldebaches:listar')
          else:
              moldebaches_form = MoldeBachesForm()       
          return render(request, 'MoldeBaches/crear.html', {'moldebaches_form':moldebaches_form})
          
          
.. admonition:: Editar MoldeBaches

   .. code-block:: python

      def editarMoldeBaches(request, id_molde_mba):
          if request.method == 'POST':
              id_molde_mba  = request.POST.get('id_molde_mba')
              nombre_mba  = request.POST.get('nombre_mba')
              descripcion_mba  = request.POST.get('descripcion_mba')
              MoldeBaches.objects.filter(pk=id_molde_mba).update(nombre_mba = nombre_mba, descripcion_mba = descripcion_mba)
              return redirect('moldebaches:listar') #qw
          else:
               moldebaches = MoldeBaches.objects.filter(id_molde_mba = id_molde_mba)    
          return render(request, 'MoldeBaches/editar.html', {'moldebaches': moldebaches}) 


.. admonition:: Eliminar MoldeBaches

   .. code-block:: python
   
      def eliminarMoldeBaches(request, id_molde_mba):
          moldebaches = MoldeBaches.objects.get(id_molde_mba = id_molde_mba)
          if request.method == 'POST':
              moldebaches.delete()
              #fabricas.save()
              return redirect('moldebaches:listar')
          return render(request, 'MoldeBaches/eliminar.html', {'moldebaches': moldebaches})


:MoldeBaches:

.. admonition:: Litar Baches

   .. code-block:: python
   
      def listarBaches(request):
          baches = Baches.objects.raw('SELECT * FROM baches INNER JOIN molde_bache ON baches.moldes_id = molde_bache.id_molde_mba')
          #mandar la consulta al template y renderizar los datos traídos
          return render(request, 'BachesProduccion/listar.html', {'baches': baches})
          
          
.. admonition:: Crear Baches

   .. code-block:: python

      def crearBaches(request):
          if request.method == 'POST':
              all_moldebaches = 0
              nombre_bap  = request.POST.get('nombre_bap')
              proveedor_bap  = request.POST.get('proveedor_bap')
              rendimiento_bap  = request.POST.get('rendimiento_bap')
              herramienta_bap  = request.POST.get('herramienta_bap')
              peso_molde_bpr  = request.POST.get('peso_molde_bpr')
              und_molde_bpr  = request.POST.get('und_molde_bpr')
              cantidad_molde_bpr  = request.POST.get('cantidad_molde_bpr')
              moldes_id = request.POST.get('moldes_id')
        
              baches = Baches(
              nombre_bap = nombre_bap, 
              proveedor_bap = proveedor_bap, 
              rendimiento_bap = rendimiento_bap, 
              herramienta_bap = herramienta_bap, 
              peso_molde_bpr = peso_molde_bpr, 
              und_molde_bpr = und_molde_bpr, 
              cantidad_molde_bpr = cantidad_molde_bpr,
              moldes_id = moldes_id)
              baches.save()
              return redirect('baches:listar_bc')
          else:
              all_moldebaches = MoldeBaches.objects.all()       
              return render(request, 'BachesProduccion/crear.html', {'all_moldebaches': all_moldebaches}) 
              
              
.. admonition:: Editar Baches

   .. code-block:: python

      def editarBaches(request, id_bache_bap):
          if request.method == 'POST':
              id_bache_bap  = request.POST.get('id_bache_bap')
              nombre_bap  = request.POST.get('nombre_bap')
              proveedor_bap  = request.POST.get('proveedor_bap')
              rendimiento_bap  = request.POST.get('rendimiento_bap')
              herramienta_bap  = request.POST.get('herramienta_bap')
              peso_molde_bpr  = request.POST.get('peso_molde_bpr')
              und_molde_bpr  = request.POST.get('und_molde_bpr')
              cantidad_molde_bpr  = request.POST.get('cantidad_molde_bpr')
              moldes_id  = request.POST.get('moldes_id')
              Baches.objects.filter(pk=id_bache_bap).update(nombre_bap = nombre_bap, proveedor_bap = proveedor_bap, rendimiento_bap = rendimiento_bap, herramienta_bap = herramienta_bap, peso_molde_bpr = peso_molde_bpr, und_molde_bpr = und_molde_bpr, cantidad_molde_bpr =    cantidad_molde_bpr,    moldes_id = moldes_id)
              return redirect('baches:listar_bc') #qw
          else:
               baches = Baches.objects.raw('SELECT * FROM baches INNER JOIN molde_bache   ON baches.moldes_id = molde_bache.id_molde_mba WHERE       baches.id_bache_bap = %s', [id_bache_bap])
               all_moldebaches = MoldeBaches.objects.all() 
          return render(request, 'BachesProduccion/editar.html', {'baches': baches, 'all_moldebaches': all_moldebaches}) 
          
          
.. admonition:: Eliminar Baches

   .. code-block:: python

      def eliminarBaches(request, id_bache_bap):
          baches = Baches.objects.get(id_bache_bap = id_bache_bap)
          if request.method == 'POST':
              baches.delete()
              #fabricas.save()
              return redirect('baches:listar_bc')
          return render(request, 'BachesProduccion/eliminar.html', {'baches': baches})


.. figure:: ../_static/py.png
   :align: left
   
Urls
====
*Archivo* : ``urls.py``

.. code-block:: python
   
   from django.urls import path, re_path, include
   from .views import listarBaches, crearBaches, editarBaches, eliminarBaches
   from .views import listarMoldeBaches, crearMoldeBaches, editarMoldeBaches, eliminarMoldeBaches

   # Urls MoldeBaches
   mb_patterns = [
       path('listar/',listarMoldeBaches, name = 'listar'),
       path('crear/',crearMoldeBaches, name = 'crear'),
       path('editar/<int:id_molde_mba>',editarMoldeBaches, name = 'editar'),
       path('eliminar/<int:id_molde_mba>',eliminarMoldeBaches, name = 'eliminar'),
    
   ]
    
    # Urls Baches
   urlpatterns = [
       path('listar/',listarBaches, name = 'listar_bc'),
       path('crear/',crearBaches, name = 'crear_bc'),
       path('editar/<int:id_bache_bap>',editarBaches, name = 'editar_bc'),
       path('eliminar/<int:id_bache_bap>',eliminarBaches, name = 'eliminar_bc'),
       path('moldebaches/',include(mb_patterns)),
   ]
 
 

Y añadiremos esta ruta al aquivo ``urls.py`` del directorio :mod:`costosbocadillo`:
 
 .. code-block:: python 
    
    urlpatterns = [
    
    path('baches/', include(('apps.baches.urls', 'baches'))),
    path('', include(('apps.baches.urls', 'moldebaches'))),
    
    ]

   
.. figure:: ../_static/py.png
   :align: left
   
Apps
====
*Archivo* : ``apps.py``

Este archivo se crea para ayudar al usuario a incluir cualquier `configuración de aplicación <https://docs.djangoproject.com/en/dev/ref/applications/#application-configuration>`_ para la aplicación. Con esto, puede configurar algunos de los atributos de la aplicación:

.. code-block:: python

    from django.apps import AppConfig

    class BachesConfig(AppConfig):
        name = 'baches'
 
