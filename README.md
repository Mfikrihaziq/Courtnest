# Courtnest
# Courtnest-Court booking system

## Group Information

**Group Name**: Speed
**Section**: 6
**Group Members**:
- MUHAMMAD AMAR MUSTAKIM BIN AHMAD PUAAD -
- IRFAN HAKEEM BIN KHAIRUDIN -
- MUHAMMAD FIKRI HAZIQ BIN ZAKI -
- MUHAMAD HAZIM ISKANDAR B HASSAN NORDIN - 2317595

## Project Overview
Introduction :
CourtNest is a web-based platform designed to simplify the process of booking sports courts. The system provides a convenient and intuitive interface that allows users to browse available courts, select preferred sports and time slots, complete online payments, and review their booking history.The main goal of CourtNest is to modernize manual and traditional booking methods by offering an efficient, accessible, and real-time reservation system that reduces scheduling conflicts and improves user satisfaction.

## Project Objectives

- To optimize the court booking process by enabling users to make reservations anytime and anywhere.
- To provide transparency through clear court gallery visuals and detailed booking information.
- To enhance user convenience with an intuitive interface and seamless navigation.

## Target Users

- Customers: Users who want to browse courts, make bookings, and manage reservations.

## Features and Functionalities

**Customer Features**
- User Registration & Login: Secure account creation and authentication.
- Court Booking: Book court, select date, duration and start time.
- Order Placement: Secure checkout process with order confirmation.
- Booking History: View previous orders and cancel functionality.
- Profile Management: Update personal information and password, delete account.

## Technical Implementation

**Technology Stack**

-
-
-
-
-
-

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
-User can have multiple booking.
-Court can have multiple booking.
-Each booking is associated with one user and one court.

**Laravel Components Implementation**

- routes (web.php)

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

- Controller
  
We are using BookingController : It handles booking process.

- Model and Relationship
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

- Views and User Interface

  *Blade Templates Structure:*
  - Layout/app.blade.php : Main application layout
  - welcome.blade.php : Home page
  - Booking/checkout.blade.php : Booking form
  - Booking/create.blade.php : Booking placement
  - dashboard.blade.php : Customer dashboard

  *Design Features*
  - 
## User Authentication System

### ** Authentication Features**
- **Registration System**: Email validation, password confirmation
- **Login System**: Secure authentication with "Remember Me" option
- **Password Reset**: Email-based password recovery system
- **Profile Management**: Users can update their information

### **Security Measures**
- Password encryption using Laravel's built-in hashing
- 

## Installation and Setup Instructions
### Prerequisites :
-

### Step-by-Step Installation


## Testing and Quality Assurance

###  Functionality Testing

### Browser Compatibility
- Google Chrome (Latest)

### Performance Testing


## Challenges Faced and Solutions


## Future Enhancements


### Scalability Considerations


## Learning Outcomes
### Technical Skills Gained


### Soft Skills Developed


## References


## Conclusion
CourtNest successfully provides a centralized and efficient court booking platform that improves the traditional reservation process. By leveraging Laravel and MVC architecture, the system ensures reliability, scalability, and ease of maintenance.

### Key Achievements



### Project Impact


- Project Completion Date: 16/1/2026
- Course: INFO 3305 Web Application Development
