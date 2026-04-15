# NR Store: e-Commerce and Bidding Website

## Project Description
NR-Store is a specialized full-stack e-commerce platform developed to manage the sale and auction of new and refurbished electronic products, particularly laptops and PCs. The system is designed to provide a seamless transition between a traditional retail experience and a dynamic bidding environment.

## Key Features
**Advanced E-Commerce Workflow**

1. Product catalog
   * A comprehensive listing system featuring detailed product descriptions, technical specifications, and high-quality image galleries.
2. Shopping Experience
   * Integrated "Add to Cart" functionality with a streamlined checkout flow designed for high conversion and user ease.
3. Secure Checkout
   * Robust integration of Stripe (for Credit/Debit cards) and ToyyibPay (for FPX Online Banking), ensuring encrypted and reliable financial transactions.
4. Order tracking
   * A real-time tracking system that allows users to monitor their parcel status from "Processing" to "Delivered."
   
**Real-Time Bidding (Auction) System**

1. Live auction
   * A dynamic bidding environment where users can view active listings and place competing bids instantly.
2. Countdown logic
   * Implemented server-side timers to manage auction durations accurately, ensuring fair play and preventing late bids.
3. Winner determination
   * A backend logic system that automatically identifies the highest bidder upon auction expiry and initiates the checkout process.
4. Bid monitoring
   * Real-time tracking of bid history and price increments to keep users informed of their standing in the auction.
   
**Administrative Control Panel (CMS)**

1. User management
   * Complete oversight of the registered customer database.
   * Administrative power to Activate or Deactivate user accounts to ensure platform security and compliance.
2. Inventory management
   * Full CRUD (Create, Read, Update, Delete) capabilities for the product catalog.
   * Manage product details, stock levels, specifications, and media assets from a centralized dashboard.
3. Bid management
   * Full CRUD management for all auction listings.
   * Ability to monitor, edit, or remove bids to maintain the integrity of the real-time bidding system.
4. Order and purchase management
   * Track new incoming orders as they happen.
   * Update order progression.

**Technical & Security Features**
1. Email verification
   * Ensures user authenticity by requiring a verified email address via Laravel’s built-in verification system before granting access to protected features.
2. CSRF protection
   * All forms are protected against Cross-Site Request Forgery (CSRF) attacks using Laravel’s security tokens.
3. Dual payment gateway integration
   * Seamlessly integrated both Stripe (for international card payments) and ToyyibPay (for local FPX transfers), providing users with flexible checkout options.
4. Middleware protection
   * Implemented custom middleware to restrict access to sensitive routes based on user roles and verification status.
   
## Tech Stack 
1. Core technologies
   * PHP - Server-side scripting language
   * Laravel - The PHP framework for web artisans (used for backend logic and API routing)
   * MySQL - Relational database management system
     
2. Frontend
   * HTML5 and CSS3 - For responsive web structure and styling 
   * JavaScript - For client-side interactivity and asynchronous requests
     
3. Payment Integration
   * Stripe API - Integrated for secure international credit/debit card processing
   * ToyyibPay - Implemented for local Malaysian FPX bank transfers
     
4. Tools and environment
   * Visual Studio Code - Primary code editor
   * MySQL Workbench - Used for database schema design and SQL querying
   * GitHub - Version control and repository management
   * iPage Hosting - The live production environment for application deployment

## Screenshots
**Customer User Interface**

1. Login and registration
2. Homepage
3. Product catalog
4. Orders
5. Product bidding
6. About us
7. Cart
8. Profile

**Admin User Interface**

1. Main dashboard
2. Product Management
3. Order Management
4. User Management
5. Bid Management

## Setup Instruction 
1. Clone the repository/ download project zip file
2. Install PHP dependencies command:
   * composer install
3. Install frontend dependencies command:
   * npm install
   * npm run build
   * npm run dev
4. Prepare environment file command:
   * cp .env.example .env
5. Generate application key command:
   * php artisan key:generate
6. Run database migration command:
   * php artisan migrate
7. Run database seeder command:
   * php artisan db:seed
8. Launch application command:
   * php artisan serve
9. Customer login details
   * username: user123@gmail.com
   * password: User123
11. Admin login details
   * username: admin123@gmail.com
   * password: Admin123


**Developed by Ezlyn Azwa and Amira Izzati**
