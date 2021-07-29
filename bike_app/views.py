from django.shortcuts import render

# Create your views here.


def home(request):

    return render(request, 'bike_app/home.html')

def about(request):
    return render(request, 'bike_app/about.html')

def cars(request):
    return render(request, 'bike_app/cars.html')

def bikes(request):
    return render(request, 'bike_app/bikes.html')

def sales(request):
    return render(request, 'bike_app/sales.html')

def contact(request):
    return render(request, 'bike_app/contact.html')

def contactd41d(request):
    return render(request, 'bike_app/contactd41d.html')





