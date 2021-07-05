from django.db import models

class USER(models.Model):
    email = models.EmailField(primary_key= True)
    username = models.CharField(max_length= 50)
    password = models.CharField(max_length= 8)
    is_admin = models.BooleanField()

class CUSTOMER_DETAILS(models.Model):
    user = models.ForeignKey(USER, primary_key= True)
    address = models.CharField()
    mobile_number = models.CharField(max_length=10)
    bike_registered_number = models.CharField(max_length=10)
    user_bike_type = models.CharField(max_length=10)

class CUSTOMER_APPOINTMENT(models.Model):
    appointment_id = models.AutoField(primary_key = True)
    user_appointment = models.ForeignKey(CUSTOMER_DETAILS)
    pickup_address = models.CharField()
    pickup_time = models.DateTimeField()
    drop_off_address = models.CharField()
    drop_off_time = models.DateTimeField()

class ALARM_APPOINTMENT(models.Model):
    alarm_id = models.AutoField(primary_key = True)
    user_appointment = models.ForeignKey(CUSTOMER_DETAILS)
    alarm_timeDate = models.DateTimeField()

SERVICES_PROVIDED_CHOICES = ["Bike_Services", "Car Services"]

class SERVICE_CENTRE(models.Model):
    service_centre_id = models.AutoField(primary_key = True)
    service_name = models.CharField()
    services_provided = models.Choices(SERVICES_PROVIDED_CHOICES)
    service_centre_address = models.CharField()
    station_phoneNumber = models.CharField(max_length=10)
    bike_quantity = models.PositiveIntegerField()

class SERVICING_DETAILS(models.Model):
    servicing_details_id = models.AutoField(primary_key = True)
    user = models.ForeignKey(USER)
    job_done = models.BooleanField()
    service_details = models.TextField()
    parts_changed = models.CharField()
    bill_amount = models.PositiveIntegerField()

BIKE_COLOUR_CHOICES = ["BLUE", "WHITE", "GREEN", "BLACK", "RED", "YELLOW", "BLACK"]
BIKE_TYPE_CHOICES = ["Regular", "Sports", "No gear"]

class BIKE_SALE_DETAILS(models.Model):
    bike_id = models.CharField(primary_key= True)
    bike_type = models.Choices(BIKE_TYPE_CHOICES)
    bike_brand = models.CharField()
    bike_model = models.CharField()
    bike_colour = models.Choices(BIKE_COLOUR_CHOICES)
    bike_service_center = models.ForeignKey(SERVICE_CENTRE)
    bike_registered_number = models.PositiveIntegerField()
    is_bike_available = models.BooleanField()

class PAYMENT(models.Model):
    transaction_id = models.AutoField(primary_key = True)
    pay_amount = models.PositiveIntegerField()
    payment_user = models.ForeignKey(USER)
    payment_description = models.CharField()

class BIKE_DELIVERY_DETAILS(models.Model):
    bike_id = models.ForeignKey()
    delivery_location_id = models.CharField(primary_key=True)
    delivery_location_address = models.CharField()
    delivery_setOff_time = models.DateTimeField()
    delivery_arrival_time = models.DateTimeField()
    bike_type = models.Choices(BIKE_TYPE_CHOICES)
    bike_brand = models.CharField()
    bike_model = models.CharField()
    bike_colour = models.Choices(BIKE_COLOUR_CHOICES)