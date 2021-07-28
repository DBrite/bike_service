from django.contrib import admin
from django.urls import path
from .views import *

app_name = "bike_app"

urlpatterns = [

    path('home/', home, name='home'),
    path('about/', about, name='about'),
    path('cars/', cars, name='cars'),
    path('bikes/', bikes, name='bikes'),
    path('sales/', sales, name='sales'),
    path('contact/', contact, name='contact'),
    path('contactd41d/', contactd41d, name='contactd41d'),

]
