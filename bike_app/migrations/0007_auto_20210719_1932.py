# Generated by Django 3.2.5 on 2021-07-20 02:32

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('bike_app', '0006_auto_20210719_1929'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='bike_sale_details',
            options={'verbose_name': 'Bike Sale Detail'},
        ),
        migrations.AlterModelOptions(
            name='servicing_details',
            options={'verbose_name': 'Servicing Detail'},
        ),
    ]
