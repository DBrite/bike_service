from django.contrib import admin
from .models import CUSTOMER_DETAIL, CUSTOMER_APPOINTMENT, SERVICING_DETAILS, SERVICE_CENTRE, ALARM_APPOINTMENT, BIKE_SALE_DETAILS, BIKE_DELIVERY_DETAILS, USER, PAYMENT

admin.site.register(CUSTOMER_DETAIL)
admin.site.register(CUSTOMER_APPOINTMENT)
admin.site.register(SERVICING_DETAILS)
admin.site.register(SERVICE_CENTRE)
admin.site.register(ALARM_APPOINTMENT)
admin.site.register(BIKE_SALE_DETAILS)
admin.site.register(BIKE_DELIVERY_DETAILS)
admin.site.register(USER)
admin.site.register(PAYMENT)

# Register your models here.
