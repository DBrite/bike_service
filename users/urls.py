from django.contrib import admin
from django.urls import path
from django.urls import include
from bike_app.views import home

urlpatterns = [

    path('home/', home, name='home'),
    path('accounts/', include('django.contrib.auth.urls')),

]