# Courtnest
# Courtnest-Court booking system

## Group Information

**Group Name**: Speed
**Section**: 6
**Group Members**:
- MUHAMMAD AMAR MUSTAKIM BIN AHMAD PUAAD - 2210965
- IRFAN HAKEEM BIN KHAIRUDIN - 2318729
- MUHAMMAD FIKRI HAZIQ BIN ZAKI - 2328631
- MUHAMAD HAZIM ISKANDAR B HASSAN NORDIN - 2317595

## Project Overview
Introduction :
CourtNest is a web-based platform designed to simplify the process of booking sports courts. The system provides a convenient and intuitive interface that allows users to browse available courts, select preferred sports and time slots, complete online payments, and review their booking history.The main goal of CourtNest is to modernize manual and traditional booking methods by offering an efficient, accessible, and real-time reservation system that reduces scheduling conflicts and improves user satisfaction.

## Project Objectives

- To optimize the court booking process by enabling users to make reservations anytime and anywhere.
- To provide transparency through clear court gallery visuals and detailed booking information.
- To enhance user convenience with an intuitive interface and seamless navigation.

## Target Users

- Customers: Users who want to browse courts and make bookings.

## Features and Functionalities

**Customer Features**
- User Registration & Login: Secure account creation and authentication.
- Court Booking: Book court, select date, duration and start time.
- Order Placement: Secure checkout process with order confirmation.
- Booking History: View previous orders and cancel functionality.
- Profile Management: Update personal information and password, delete account.

## Technical Implementation

**Technology Stack**

- Framework: Laravel
- Frontend: Blade Template Engine, HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
- Authentication: Laravel built-in authentication
- Version Control: Git & GitHub
- Development Tools: XAMPP & Visual Studio Code

**Database Design**

Database Schema Overview
Our database consists of [X] main tables designed to handle users, courts, bookings, and related data:
Core Tables:
- users : Customers account
- courts : Courts type and pricing
- bookings : Customers booking records


## Entity Relationship Diagram (ERD)

https://docs.google.com/document/d/16-uW4O-DeQiS-n9_XM6DA1icBKwdFxWnnab2_wYYuw8/edit?usp=sharing

Relationship :
- User can have multiple booking.
- Court can have multiple booking.
- Each booking is associated with one user and one court.

## **Laravel Components Implementation**

- **routes (web.php)**

    // 1. Dashboard Route
    Route::get('/dashboard', function () {
        /** @var User $user */
        $user = Auth::user();
        $bookings = $user->bookings()->with('court')->latest()->get();
        return view('dashboard', compact('bookings'));
    })->name('dashboard');

    // 2. Booking Form
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');

    // 3. Store Booking (Saves to Session)
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

    // 4. Checkout Page (Retrieves from Session)
    Route::get('/bookings/checkout', [BookingController::class, 'checkout'])->name('bookings.checkout');

    // 5. Process Payment (Saves Session to Database)
    Route::post('/bookings/pay', [BookingController::class, 'pay'])->name('bookings.pay');

    // 6. Cancel Existing Booking
    Route::patch('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

- **Controller**
  
We are using BookingController : It handles booking process.

- **Model and Relationship**
  php// Booking Model
  class Booking extends Model {
  public function user() {
        return $this->belongsTo(User::class);
    }
  public function court() {
        return $this->belongsTo(Court::class);
    }
  }
  
  // Court Model
  class Court extends Model{
    public function bookings() {
        return $this->hasMany(Booking::class);
    }
  
// User Model
class User extends Authenticatable{ 
public function bookings() {
    return $this->hasMany(\App\Models\Booking::class);
    }
}

- **Views and User Interface**

  *Blade Templates Structure:*
  - Layout/app.blade.php : Main application layout
  - welcome.blade.php : Home page
  - Booking/checkout.blade.php : Booking form
  - Booking/create.blade.php : Booking placement
  - dashboard.blade.php : Customer dashboard

## User Authentication System

### **Authentication Features**
- **Registration System**: Email validation, password confirmation
- **Login System**: Secure authentication with "Remember Me" option
- **Password Reset**: Email-based password recovery system
- **Profile Management**: Users can update their information

### **Security Measures**
- Password encryption using Laravel's built-in hashing
- Input validation and sanitization
- Middleware protection for authenticated routes

## Installation and Setup Instructions
### Prerequisites :
- PHP
- Composer
- Node.js and NPM
- MySQL 8.0
- XAMPP 

### Step-by-Step Installation
1. Clone the Repository

   cd CourtNest

2. Install Dependencies

   composer install
   npm install

3. Environment Configuration

   bashcp .env.example .env
   php artisan key:generate

4. Database Setup

   bash# Configure database in .env file
   php artisan migrate
   php artisan db:seed

5. Start Develoment Server

   npm run dev
   php artisan serve

## Testing and Quality Assurance

###  Functionality Testing

- User registration and login system
- Booking and confirmation
- Booking checkout and payment
- Booking history tracking and cancellation
- Responsive design across device

### Browser Compatibility

- Google Chrome (Latest)

### Performance Testing



## Challenges Faced and Solutions
## Challenge 1:
- Problem
- Solution




## Future Enhancements
### Phase 2 Features (Potential Improvements)
- **Real-time Notifications**: Email notifications for booking confirmation
- **Payment Integration**: Online payment gateway integration like Stripe & PayPal
- **Rescheduling**: Adding rescheduling feature
- **Mobile App** : Native mobile application for iOS and Android

### Scalability Considerations

- Database optimization for larger datasets
- Load balancing for high traffic scenarios
  
## Learning Outcomes
### Technical Skills Gained

- Laravel Framework: Understanding of MVC architecture and Eloquent ORM
- Database Design: Creating efficient database schemas and relationships
- Authentication: Implementing secure user authentication systems
- Frontend Development: Building responsive interfaces with Bootstrap
- Version Control: Using Git and GitHub for project management


### Soft Skills Developed

- **Team Collaboration**: Managing works effectively as a group
- **Project Management**: Planning and executing a complex web application
- **Problem Solving**: Resolving technical error while developing the website
- **Documentation**: Creating a project document in a professional way


## References

1. Laravel Documentation. (2024). Laravel 10.x Documentation. Retrieved from https://laravel.com/docs/10.x
2. MySQL Documentation. (2024). MySQL 8.0 Reference Manual. Retrieved from https://dev.mysql.com/doc/refman/8.0/en/
3. Bootstrap Documentation. (2024). Bootstrap 5.3 Documentation. Retrieved from https://getbootstrap.com/docs/5.3/


## Conclusion
CourtNest successfully provides a centralized and efficient court booking platform that improves the traditional reservation process. By leveraging Laravel and MVC architecture, the system ensures reliability, scalability, and ease of maintenance.

### Key Achievements

- Successfully implemented all required Laravel components (Routes, Controllers, Views, Models)
- Created a functional court booking system
- Developed a responsive, user-friendly interface
- Demonstrated understanding of database relationships and CRUD operations
- Applied security best practices for user authentication


### Project Impact

The implementation of CourtNest improves the traditional court booking process by providing a centralized and automated reservation system. This project also give us a practical experience in building a web application and it enhances our capability to working in a team environment. The skills that provided from finishing this project will be sufficient for us in the future.

- Project Completion Date: 16/1/2026
- Course: INFO 3305 Web Application Development






