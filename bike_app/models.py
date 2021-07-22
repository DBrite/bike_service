from django.db import models
from django.contrib.auth.models import User


class USER(models.Model):
    email = models.EmailField(primary_key=True)
    username = models.CharField(max_length=10)
    password = models.CharField(max_length=10)
    is_admin = models.BooleanField()

    class Meta:
        verbose_name = "User"


Regular = 'Regular'
Sports = 'Sports'
No_Gear = "No_Gear"

BIKE_TYPE_CHOICES = (
    (Regular, 'Regular'),
    (Sports, 'Sports'),
    (No_Gear, 'No_Gear')
)


class CUSTOMER_DETAIL(models.Model):
    customer_details_id = models.AutoField(primary_key=True)
    user = models.ForeignKey(USER, on_delete=models.CASCADE)
    address = models.CharField(max_length=10)
    phone = models.CharField(max_length=10)
    bike_registered_number = models.CharField(max_length=10)
    user_bike_type = models.CharField(choices=BIKE_TYPE_CHOICES, max_length=10)

    class Meta:
        verbose_name = "Customer Detail"


class CUSTOMER_APPOINTMENT(models.Model):
    appointment_id = models.AutoField(primary_key=True)
    user_appointment = models.ForeignKey(CUSTOMER_DETAIL, on_delete=models.CASCADE)
    pickup_address = models.CharField(max_length=10)
    pickup_time = models.DateTimeField()
    drop_off_address = models.CharField(max_length=10)
    drop_off_time = models.DateTimeField()

    class Meta:
        verbose_name = "Customer Appointment"


class ALARM_APPOINTMENT(models.Model):
    alarm_id = models.AutoField(primary_key=True)
    user_appointment = models.ForeignKey(CUSTOMER_DETAIL, on_delete=models.CASCADE)
    alarm_timeDate = models.DateTimeField()

    class Meta:
        verbose_name = "Alarm Appointment"


Bike_Service = 'Bike_Service'
Car_Service = 'Car_Service'


class SERVICE_CENTRE(models.Model):
    SERVICES_PROVIDED_CHOICES = (
        (Bike_Service, 'Bike_Service'),
        (Car_Service, 'Car_Service'),
    )

    service_centre_id = models.AutoField(primary_key=True)
    service_name = models.CharField(max_length=10)
    services_provided = models.CharField(max_length=20, choices=SERVICES_PROVIDED_CHOICES)
    service_centre_address = models.CharField(max_length=10)
    station_phoneNumber = models.CharField(max_length=10)
    bike_quantity = models.PositiveIntegerField()

    class Meta:
        verbose_name = "Service Centre"


class SERVICING_DETAILS(models.Model):
    servicing_details_id = models.AutoField(primary_key=True)
    user = models.ForeignKey(USER, on_delete=models.CASCADE)
    job_done = models.BooleanField()
    service_details = models.TextField()
    parts_changed = models.CharField(max_length=10)
    bill_amount = models.PositiveIntegerField()

    class Meta:
        verbose_name = "Servicing Detail"


Blue = 'Blue'
White = 'White'
Green = 'Green'
Black = 'Black'

Regular = 'Regular'
Sports = 'Sports'
No_Gear = "No_Gear"

BIKE_COLOUR_CHOICES = (
    (Blue, 'Blue'),
    (White, 'White'),
    (Green, 'Green'),
    (Black, 'Black'),
)

BIKE_TYPE_CHOICES = (
    (Regular, 'Regular'),
    (Sports, 'Sports'),
    (No_Gear, 'No_Gear')
)


class BIKE_SALE_DETAILS(models.Model):
    bike_id = models.CharField(primary_key=True, max_length=10)
    bike_type = models.CharField(choices=BIKE_TYPE_CHOICES, max_length=10)
    bike_brand = models.CharField(max_length=10)
    bike_model = models.CharField(max_length=10)
    bike_colour = models.CharField(choices=BIKE_COLOUR_CHOICES, max_length=10)
    bike_service_center = models.ForeignKey(SERVICE_CENTRE, on_delete=models.CASCADE)
    bike_registered_number = models.PositiveIntegerField()
    is_bike_available = models.BooleanField()

    class Meta:
        verbose_name = "Bike Sale Detail"


class PAYMENT(models.Model):
    transaction_id = models.AutoField(primary_key=True)
    pay_amount = models.PositiveIntegerField()
    payment_user = models.ForeignKey(USER, on_delete=models.CASCADE)
    payment_description = models.CharField(max_length=10)

    class Meta:
        verbose_name = "Payment"


class BIKE_DELIVERY_DETAILS(models.Model):
    delivery_location_id = models.CharField(max_length=10, primary_key=True)
    bike_id = models.ForeignKey(BIKE_SALE_DETAILS, on_delete=models.CASCADE)
    delivery_location_address = models.CharField(max_length=10)
    delivery_setOff_time = models.DateTimeField(max_length=10)
    delivery_arrival_time = models.DateTimeField()
    bike_type = models.CharField(max_length=10, choices=BIKE_TYPE_CHOICES)
    bike_brand = models.CharField(max_length=10)
    bike_model = models.CharField(max_length=10)
    bike_colour = models.CharField(max_length=10, choices=BIKE_COLOUR_CHOICES)

    class Meta:
        verbose_name = "Bike Delivery Detail"
