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

   <img width="900" height="500" alt="image" src="https://github.com/user-attachments/assets/17f84372-368f-4c99-abba-1af66195b778" />
   <img width="900" height="500" alt="image" src="https://github.com/user-attachments/assets/ee39598c-3fb4-462b-8451-436d9ba893bd" />
   <img width="900" height="500" alt="Screenshot 2026-01-03 182943" src="https://github.com/user-attachments/assets/cc10bbe2-acf0-4c1d-998f-13c71335ad29" />

2. Homepage

   <img width="900" height="500" alt="image" src="https://github.com/user-attachments/assets/05cad696-ab42-4d23-a19d-848d54880b42" />
   <img width="900" height="500" alt="image" src="https://github.com/user-attachments/assets/cf2593ae-94e5-4d60-b4a9-b5210d444aa7" />

3. Product catalog

   <img width="900" height="500" alt="Screenshot 2025-12-13 172954" src="https://github.com/user-attachments/assets/94891440-dd0c-4b5a-b5f2-461529d85c87" />
   <img width="900" height="500" alt="Screenshot 2025-12-13 173239" src="https://github.com/user-attachments/assets/cceec945-bdf2-4152-92a7-cb2f8e6f2057" />


4. Orders

   <img width="900" height="500" alt="image" src="https://github.com/user-attachments/assets/2dbab7d6-6577-4200-9932-8b01ee39de22" />

5. Product bidding

   <img width="900" height="500" alt="Screenshot 2025-12-13 174238" src="https://github.com/user-attachments/assets/c69cd5b4-937f-4fdb-b4e6-e7f85da62280" />
   
6. About us

   <img width="900" height="500" alt="image" src="https://github.com/user-attachments/assets/9b3d2689-3bb7-4175-a35a-6a17d21319bc" />

7. Cart

   <img width="900" height="500" alt="Screenshot 2025-12-13 174423" src="https://github.com/user-attachments/assets/59faffc3-56b8-4df1-9227-3c1d1d871aae" />
   
8. Checkout

   <img width="900" height="500" alt="Screenshot 2025-12-13 174956" src="https://github.com/user-attachments/assets/ad33fc8f-7ce3-432d-9ebc-ae99669872fa" />
   <img width="900" height="500" alt="Screenshot 2025-12-14 212219" src="https://github.com/user-attachments/assets/dcc4aede-ab77-4745-9648-0e34fcc6af14" />


9. Profile

   <img width="900" height="500" alt="image" src="https://github.com/user-attachments/assets/9fa46588-e01a-4fea-8e37-365ee88ed1bd" />


**Admin User Interface**

1. Main dashboard

   <img width="900" height="500" alt="Screenshot 2025-12-15 155722" src="https://github.com/user-attachments/assets/fa48f14e-0cf3-4541-9a6d-bbedcf59aef5" />


2. Product Management

   <img width="900" height="500" alt="Screenshot 2025-12-13 182747" src="https://github.com/user-attachments/assets/66603943-4135-410f-af78-f0acfe590515" />
   <img width="900" height="500" alt="Screenshot 2025-12-31 164114" src="https://github.com/user-attachments/assets/c64b11a7-db6f-42e7-9dc0-6531e3abc5be" />
   <img width="900" height="500" alt="Screenshot 2025-12-31 164157" src="https://github.com/user-attachments/assets/f91d9f15-e3f9-4d66-b136-f905d818872f" />




3. Order Management

   <img width="900" height="500" alt="Screenshot 2025-12-31 164634" src="https://github.com/user-attachments/assets/73301b66-9d42-4580-afcf-e894c99ed220" />
   <img width="900" height="500" alt="Screenshot 2025-12-31 164710" src="https://github.com/user-attachments/assets/da149f97-2b03-418a-842c-0c8355ed03d6" />
   <img width="900" height="500" alt="Screenshot 2025-12-31 164752" src="https://github.com/user-attachments/assets/e0db0083-40b6-4741-a38c-f8af02ab7a5e" />



4. User Management

    <img width="900" height="500" alt="Screenshot 2025-12-31 163517" src="https://github.com/user-attachments/assets/be10d0f9-5666-4826-94ca-970bae04f026" />
    <img width="900" height="500" alt="Screenshot 2025-12-31 163557" src="https://github.com/user-attachments/assets/fe455c14-301e-4ee3-b39e-6045f0f542c2" />



5. Bid Management

   <img width="900" height="500" alt="Screenshot 2025-12-31 165128" src="https://github.com/user-attachments/assets/46db5db8-a419-4347-ba53-435cdbdf211e" />
   <img width="900" height="500" alt="Screenshot 2025-12-31 165213" src="https://github.com/user-attachments/assets/325c3788-c62a-4f7a-8abb-d2b72bfe2714" />



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
