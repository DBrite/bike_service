from django.contrib import admin
from django.urls import path
from django.urls import include
from bike_app.views import home
from django.contrib.auth import views as auth_views
from . import views

urlpatterns = [

    path('home/', home, name='home'),
    path('accounts/', include('django.contrib.auth.urls')),
    path('login/', auth_views.LoginView.as_view(), name='login'),
    path('logout/', auth_views.LogoutView.as_view(), name='logout'),
    path('home/', views.home, name='home'),
    path('register/', views.register, name='register'),

]