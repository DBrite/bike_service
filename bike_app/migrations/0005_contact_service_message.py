# Generated by Django 3.2.5 on 2021-08-06 12:18

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('bike_app', '0004_alter_user_password'),
    ]

    operations = [
        migrations.AddField(
            model_name='contact_service',
            name='message',
            field=models.TextField(default=1),
            preserve_default=False,
        ),
    ]
