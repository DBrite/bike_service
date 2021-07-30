from django.shortcuts import render
from django.contrib.auth.decorators import login_required
from bike_app.forms import CustomerAppointmentForm
# Create your views here.


@login_required
def home(request):
    us_form = CustomerAppointmentForm(request.POST)
    print(us_form)
    if us_form.is_valid():
        uf = us_form.save(commit=False)
        uf.user_appointment = request.user
        uf.save()

        return render(request, 'bike_app/home.html')
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

def centers(request):
    return render(request, 'bike_app/centers.html')







