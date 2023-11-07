<p align="center">

  <a href="https://github.com/DupieM/DuPlessisMarine_221326_Final_Project">
    <img src="img/dv logo.png" width="120px">
  </a>

<h3 align="center">Medical Office</h3>
<h4 align="center">This is a website application for a medical practioners office.</h4>

<h5 align="center" style="padding:0;margin:0;">Mariné du Plessis</h5>
</br>

  <p align="center">
   <br />
    ·
    <a href="https://github.com/DupieM/DuPlessisMarine_221326_Final_Project/issues">Report Bug</a>
    ·
    <a href="https://github.com/DupieM/DuPlessisMarine_221326_Final_Project/issues">Request Feature</a>
</p>

<!-- TABLE OF CONTENTS -->

## Table of Contents

- [Mockup](#mockup)
- [About the Project](#about-the-project)
    - [Project Description](#project-description)
    - [Built With](#built-with)
- [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [How to install](#how-to-install)
- [Features and Functionality](#features-and-functionality)
- [Development Process](#development-process)
    - [Theme of Website Application](#theme-of-website-application)
    - [ER Diagram](#er-diagram)
    - [Implementation Process](#implementation-process)
        - [Highlights](#highlights)
        - [Challenges](#challenges)
    - [Future Implementation](#peer-reviews)
- [Final Outcome](#final-outcome)
    - [Video Demonstration](#video-demonstration)
- [Conclusion](#conclusion)

<!--PROJECT DESCRIPTION-->

# Mockup

![image1](img_part2/mockups/mockup1.png)

## About the Project
### Project Description

This term we were tasked to create a persistent data sytem, by developing a management portal for a medical practitioners office.
We needed to develop a website for a medical office which will be used by the practice receptionists. This application will manage Doctors, Patients and their consultations at the practice. 
I chose to do a medical practisioners office that will host surgeons.

### Built With

* <a href="https://www.apachefriends.org/">![Static Badge](https://img.shields.io/badge/Xampp-url?style=for-the-badge&logo=XAmPP&logoColor=white&color=orange)</a>
* <a href="https://www.php.net/">![Static Badge](https://img.shields.io/badge/PHP-url?style=for-the-badge&logo=PHP&logoColor=white&color=blue)</a>
* <a href="https://github.com/"> ![Static Badge](https://img.shields.io/badge/Github-url?style=for-the-badge&logo=github&color=purple)</a>
* <a href="https://code.visualstudio.com/"> ![Static Badge](https://img.shields.io/badge/visual%20studio-url?style=for-the-badge&logo=visual%20studio&logoColor=blue&color=black&link=https%3A%2F%2Fcode.visualstudio.com%2F)</a>



## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

For development, the latest version of XAMPP is required. The latest version can be downloaded from [XAMPP](https://www.apachefriends.org/download.html)

### Installation

Clone the project repository as follow:

1.  GitHub Desktop </br>
    Enter `C:\xampp\htdocs\DuPlessisMarine_221326_Final_Project` into the URL field and press the `Clone` button.

If you require XAMPP do the following steps:

1.  XAMPP </br>
    Download  the application from here [XAMPP](https://www.apachefriends.org/download.html)

2.  Starting XAMPP </br>
    Open XAMPP Control bar adn click on start at "Apache" & "MySQL"

3.  Open XAMPP </br>
    Click on "Admin" next to MYSQL and it will open it up in Michrosoft Edge/ Chrome
    You can then create a database

4. Create folder in XAMPP </br>
    Open your XAMPP folder in Windows in "C drive" and then open the folder that is labelled "htdocs"
    Then after opening this folder "htdocs" you can create your own folder 

5. Open in Visual Studio code </br>
    Open your Visual Studio code then click on file and then click on open folder
    Then navigate to where you created your folder in XAMPP and open it


## Features and Functionality
### Log In Page

I needed to allow at least 3 receptionist with two different types of profiles to log into the management portal. 
I needed to design it in such way that it must authenticate the email and password against the database.

<img src="img_part2/Final_Images/m1.JPG" width="600px">

### Appointment Page

On this page all the upcoming appointments for a period will be shown. It also needed to contain the primary navigation for the management portal. The primary navigation takes you to either the doctors, patients or receptionist page. 
On this page a receptionist must view bookings, be able to add a appointment and be able to delete an existing appointment. When you add an appointment you will search for the patient (Name & Surname) where by the patient information will be retrieved and additional fields for the appointment will be displayed.

<img src="img_part2/Final_Images/m3.JPG" width="600px">

### Doctors Page

On this page the profiles of all the registered doctors will be shown. 
Only the head receptionist will be able to Add a new doctor, Update an existing doctor and be able to Delete a doctor.

<img src="img_part2/Final_Images/m4.JPG" width="600px">

### Patients Page

On this page the profiles of all the registered patients will be shown. 
Only the head receptionist will be able to Add a new patient, Update an existing patient and be able to Delete a patient.

<img src="img_part2/Final_Images/m6.jpg" width="600px">

### Receptionists Page

On this page the profiles of all the registered receptionists will be shown. Only the head receptionist will be able to Add a new receptionist, Update an existing receptionist and be able to Delete a receptionist. The head receptionist must also be able to Ban a receptionist.

<img src="img_part2/Final_Images/m5.jpg" width="600px">

## Development Process
### Theme of Web Application

I went with a simple and minimalistic UI design that fits a medical practioners office. 
I went with a lot of different shades of blue seeing that doctors are mostly represented by blue and white. 
For contrast I added a bright red. I aslo decided to use icons that aligns with the theme of the three pages of the doctors, patients and receptionist. I also used icons on the login page that represent doctors. I designed a logo for the medical practioners office as well.

### ER Diagram

As can seen below is an ER Diagram for my `Medical Practioners Office`. This diagram helped me alot with knowing what tables in my database needed to be connected together to be able to work properly when runnnig the database.

![image7](img_part2/ER_Diagram.jpg) 

### Implementation Process
#### Highlights

The higlight was in researching which types of medical practioners oficces you get and to choose one to use.
Interfacing to a database and seeing data CRUD at work between the application and database was a highlight.

#### Challenges

Some challenges that I faced while doing this project was the code that doesn't let a user that is banned to be able to log in to the management portal. 
Another challenge was to activate success messages for deleting, creating users and also when a patient doesn't exist.

### Future Implementation

Adding success and failure messages right through the application.
Improving on viewing the appointments in a five day table format for the week.

## Final Outcome
### Video Demonstration

[View Demonstration]()

# Conclusion
### License
Rights reserved © 2023

### Author
**Mariné du Plessis** [Gmail](mdp.marine@gmail.com)