# 🏠 Real Estate Marketplace with Auction System

A **feature-rich real estate platform** for **buying, selling, and auctioning properties**, built as a **collaborative group project**.

This platform supports both **direct sales** and **demand-driven auctions**, allowing users to seamlessly register, list properties, participate in auctions, and securely purchase real estate.

> 📌 Originally pushed to GitHub by Sayantan Paul and forked by the other group members for collaborative development.

## 👥 Contributors

* 👨‍💻 **Sayandip Saha** – Frontend Development, Auction Logic, UI Design
* 👨‍💻 **Sayantan Paul** – Backend Development, Database Integration, Authentication
* 👨‍💻 **Rahul Shah** – Property Listing Logic, Purchase Flow, UX Integration

## ✨ Key Features

### 🔐 User Authentication
- Secure **registration** and **login** system using PHP and MySQL
- Credentials are safely stored and verified via backend logic

### 🏘️ Property Listing
- Owners can **submit properties for listing**
- Listings go through a **verification process** before becoming visible to buyers

### 🌀 Auction Mechanism
- If a property garners demand, it is moved to **auction mode**
- Buyers can **purchase tokens** for participation
- Each token generates a **unique Token ID** used for logging in during the auction
- **Highest bidder wins** and must pass a verification step before purchase is finalized

### 💳 Direct Purchase
- Properties without auction demand can be **purchased directly**
- Buyer details and verification are required for finalizing the transaction

## 🛠️ Tech Stack

| Layer | Technology Used |
|-------|----------------|
| Frontend | HTML, CSS (embedded), JavaScript (embedded with `<script>` tags) |
| Backend | PHP |
| Database | MySQL (via phpMyAdmin) |
| Server | XAMPP (Apache + MySQL for local development) |

> CSS and JavaScript are included **inline within HTML files** to keep the structure simple and avoid excessive file splitting.

## ⚙️ Setup Instructions

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/sayantanpaul-official/real-estate-auction-platform.git
   cd real-estate-auction-platform
   ```

2. **Set Up XAMPP:**
   - Download and install XAMPP
   - Move the project folder into the `htdocs/` directory
   - Launch **Apache** and **MySQL** from the XAMPP Control Panel

3. **Configure the Database:**
   - Visit `http://localhost/phpmyadmin`
   - Create a database named (e.g., `real_estate`)
   - Import the SQL schema (if available), or refer to PHP backend files for structure

4. **Launch the Application:**
   - Open a browser and go to: `http://localhost/real-estate-auction-platform/`
   - Use:
     - `new.html` for the **logged-out homepage**
     - `old2.html` for the **logged-in homepage**
   - Choose based on your session context or demo preference

## 🔮 Future Enhancements

- 🔧 Integration of **more backend functionality** (e.g., messaging, profile management)
- 💳 Support for **real payment gateways** (e.g., Razorpay, Stripe)
- 🛡️ Enhanced **security features**: password hashing, CSRF protection, and input sanitization
- ⚙️ Development of an **admin panel** for property approval, user management, and site maintenance
- 🧩 Modularization: moving CSS and JS to **external files** for scalability
- 📡 Implementation of **real-time bidding** using technologies like WebSockets

## 📌 Repository

🔗 **GitHub URL**: https://github.com/sayantanpaul-official/real-estate-auction-platform 
> *(Forked by Sayandip Saha as part of the group collaboration.)*

## 🙌 Acknowledgements

This project was created as part of a collaborative effort to simulate a **real-world full-stack application**. We learned valuable lessons in frontend-backend integration, database management, and auction-based e-commerce logic.
