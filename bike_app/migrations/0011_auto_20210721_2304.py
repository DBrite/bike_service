# Generated by Django 3.2.5 on 2021-07-22 06:04

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('bike_app', '0010_auto_20210721_2301'),
    ]

    operations = [
        migrations.AlterField(
            model_name='user',
            name='first_name',
            field=models.CharField(max_length=50),
        ),
        migrations.AlterField(
            model_name='user',
            name='last_name',
            field=models.CharField(max_length=50),
        ),
    ]
