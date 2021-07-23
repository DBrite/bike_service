from django.contrib.auth.models import User
from django import forms
from django.core.exceptions import ValidationError
from django.contrib.auth.forms import UserCreationForm


class SignUpForm(UserCreationForm):
    username = forms.CharField(label='Username', min_length=4, max_length=150)
    first_name = forms.CharField(label='First Name', min_length=3, max_length=50)
    last_name = forms.CharField(label='Last Name', min_length=2, max_length=50)
    email = forms.EmailField(label='Email')
    password1 = forms.CharField(label='Password', widget=forms.PasswordInput)
    password2 = forms.CharField(label='Confirm Password', widget=forms.PasswordInput)
    phone = forms.CharField(label="Phone", max_length=10)

    def clean_username(self):
        username = self.cleaned_data['username'].lower()
        result = User.objects.filter(username=username)
        if result.count():
            raise ValidationError("Username already exists")
        return username

    def clean_email(self):
        email = self.cleaned_data['email'].lower()
        results = User.objects.filter(email=email)
        if results.count():
            raise ValidationError("Email already exists")
        return email

    def clean_phone(self):
        phone = self.cleaned_data['Phone'].lower()
        results = User.objects.filter(phone=phone)
        if results.count():
            raise ValidationError("Phone number already exists")
        return phone

    def save(self, commit=True, *args, **kwargs):
        user = User.objects.create_user(
            self.cleaned_data['username'],
            email=self.cleaned_data['email'],
            password=self.cleaned_data['password1'],
            first_name=self.cleaned_data['first_name'],
            last_name=self.cleaned_data['last_name'],
            phone=self.cleaned_data['phone_number']
        )
        return user
