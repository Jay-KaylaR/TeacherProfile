-- ====================================
-- Database: portfolio
-- ====================================
CREATE DATABASE IF NOT EXISTS portfolio;
USE portfolio;

-- =============================
-- Table: contacts
-- =============================
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =============================
-- Table: projects
-- =============================
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    technologies VARCHAR(200) NOT NULL,
    project_type VARCHAR(50) NOT NULL,
    image VARCHAR(255) NOT NULL
);

-- =============================
-- Table: skills
-- =============================
CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(100) NOT NULL,
    proficiency_level VARCHAR(50) NOT NULL, -- Example: Beginner, Intermediate, Expert
    percentage INT NOT NULL,                -- Example: 85 (for progress bar)
    category VARCHAR(100) NOT NULL          -- Example: Teaching Excellence, Technical Skills, Professional Skills
);

-- =============================
-- Table: certifications
-- =============================
CREATE TABLE IF NOT EXISTS certifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    category VARCHAR(100) NOT NULL,
    institution VARCHAR(200) NOT NULL,
    issue_date DATE NULL,
    certificate_url TEXT            -- Example: Academic Degrees, Technical Certifications, Professional & Other
);

-- ====================================
-- Insert sample data into portfolio
-- ====================================
USE portfolio;

-- =============================
-- Insert Skills
-- =============================
INSERT INTO skills (skill_name, proficiency_level, percentage, category) VALUES
('Python Programming', 'Expert', 90, 'Technical Skills'),
('Web Development (HTML, CSS, JS, PHP)', 'Advanced', 85, 'Technical Skills'),
('Database Management (MySQL)', 'Advanced', 80, 'Technical Skills'),
('Artificial Intelligence & ML', 'Intermediate', 70, 'Technical Skills'),

('Classroom Management', 'Expert', 95, 'Teaching Excellence'),
('Curriculum Design', 'Advanced', 88, 'Teaching Excellence'),
('Educational Technology Integration', 'Advanced', 82, 'Teaching Excellence'),

('Leadership', 'Expert', 90, 'Professional Skills'),
('Teamwork & Collaboration', 'Expert', 92, 'Professional Skills'),
('Project Management', 'Advanced', 85, 'Professional Skills');

-- =============================
-- Insert Certifications
-- =============================
INSERT INTO certifications (title, institution, issue_date, certificate_url, category) VALUES
('Bachelor of Education (Arts)', 'Lukenya University ', '2019-11-15', 'Specialized in Mathematics and Geography education.', 'Academic Degrees'),
('Bachelor of Science in Information Technology', 'KCA University', '2026-07-20', 'Focused on Web Development, AI, Blockchain, and Distributed Systems.', 'Academic Degrees'),

('AWS Certified Cloud Practitioner', 'Amazon Web Services', '2023-06-01', 'Validated knowledge of AWS cloud services and architecture.', 'Technical Certifications'),
('Cisco Certified Network Associate (CCNA)', 'Cisco', '2022-09-15', 'Networking fundamentals, IP connectivity, and security basics.', 'Technical Certifications'),

('Best ICT Teacher Award', 'Kenya ICT Authority', '2021-11-30', 'Recognized for innovative use of technology in education.', 'Professional & Other'),
('Basketball Coaching Level 1', 'FIBA Africa', '2022-04-10', 'Certified basketball coaching skills with youth development focus.', 'Professional & Other');

-- =============================
-- Insert Projects
-- =============================
INSERT INTO projects (title, description, technologies, project_type, image) VALUES
-- ===== NEW PROJECTS =====
(
  'Enterprise Inventory Management System',
  'A scalable system for managing stock levels, suppliers, purchase orders, and sales analytics.',
  'PHP, Laravel, MySQL, Chart.js, Bootstrap',
  'Management System',
  'https://images.unsplash.com/photo-1581093588401-22d3c9cbb6b1?w=800&auto=format&fit=crop'
),
(
  'Human Resource Management System',
  'HR system for employee records, payroll, leave management, and performance evaluation.',
  'Java, Spring Boot, PostgreSQL, React',
  'Management System',
  'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=800&auto=format&fit=crop'
),
(
  'School Management Information System',
  'Complete school system covering admissions, academics, exams, fees, and communication.',
  'Django, PostgreSQL, Bootstrap',
  'Education System',
  'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&auto=format&fit=crop'
),
(
  'Hospital Information Management System',
  'Integrated hospital system for patient records, appointments, pharmacy, and billing.',
  'Java, Spring Boot, MySQL, Angular',
  'Healthcare System',
  'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=800&auto=format&fit=crop'
),
(
  'Library Management System',
  'Digital library system for cataloging books, member management, and borrowing history.',
  'PHP, MySQL, Bootstrap',
  'Information System',
  'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=800&auto=format&fit=crop'
),
(
  'Hotel Management System',
  'System for managing reservations, rooms, guests, billing, and staff operations.',
  'Node.js, Express, MongoDB, React',
  'Hospitality System',
  'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&auto=format&fit=crop'
),
(
  'Airline Reservation System',
  'Flight booking platform with seat selection, ticketing, and payment processing.',
  'ASP.NET Core, SQL Server, Bootstrap',
  'Reservation System',
  'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800&auto=format&fit=crop'
),
(
  'Personal Expense Tracker',
  'Web and mobile tool for tracking daily expenses, budgets, and financial insights.',
  'Flutter, Firebase, REST API',
  'Finance Application',
  'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&auto=format&fit=crop'
),
(
  'House Hunting Solutions Platform',
  'Platform connecting house seekers with listings, filters, maps, and agent contacts.',
  'Django, PostgreSQL, Google Maps API',
  'Real Estate Application',
  'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=800&auto=format&fit=crop'
),
(
  'Basketball Statistics Tracker',
  'Analytics system for tracking player stats, team performance, and game trends.',
  'Python, Pandas, Flask, Chart.js',
  'Sports Analytics',
  'https://images.unsplash.com/photo-1517649763962-0c623066013b?w=800&auto=format&fit=crop'
),
(
  'E-Commerce Management System',
  'Full-featured e-commerce system with products, cart, orders, and payment integration.',
  'Laravel, MySQL, Stripe API, Vue.js',
  'E-Commerce',
  'https://images.unsplash.com/photo-1556742044-3c52d6e88c62?w=800&auto=format&fit=crop'
),
(
  'Weather Analytics Dashboard',
  'Interactive dashboard displaying real-time and historical weather data.',
  'React, OpenWeather API, D3.js',
  'Data Visualization',
  'https://images.unsplash.com/photo-1501630834273-4b5604d2ee31?w=800&auto=format&fit=crop'
),
(
  'Travel Master Booking Platform',
  'Travel planning system for booking flights, hotels, and curated travel experiences.',
  'Next.js, Node.js, MongoDB',
  'Travel Application',
  'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=800&auto=format&fit=crop'
),
(
  'Teacher Portfolio Website',
  'Professional portfolio showcasing teaching experience, projects, certifications, and achievements.',
  'HTML, CSS, JavaScript, PHP, Bootstrap',
  'Portfolio Website',
  'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&auto=format&fit=crop'
),

-- ===== ORIGINAL FIRST PROJECTS (APPENDED AT THE END) =====
(
  'Student Performance Tracker',
  'A web application to track student grades, attendance, and progress.',
  'PHP, MySQL, JavaScript, Bootstrap',
  'Web Development',
  'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&auto=format&fit=crop'
),
(
  'Smart Attendance System',
  'AI-powered facial recognition system for automated student attendance.',
  'Python, OpenCV, TensorFlow, SQLite',
  'Artificial Intelligence',
  'https://images.unsplash.com/photo-1581091870627-3c5cfc1b8f2f?w=800&auto=format&fit=crop'
),
(
  'E-Learning Mobile App',
  'Cross-platform app for interactive learning and digital classrooms.',
  'Flutter, Firebase, REST API',
  'Mobile App',
  'https://images.unsplash.com/photo-1517433456452-f9633a875f6f?w=800&auto=format&fit=crop'
),
(
  'Blockchain Voting System',
  'Decentralized platform for secure and transparent voting.',
  'Solidity, Ethereum, Web3.js',
  'Blockchain',
  'https://images.unsplash.com/photo-1640340434855-6084b1f4901c?w=800&auto=format&fit=crop'
),
(
  'Hospital Management System',
  'Comprehensive software to manage patients, doctors, billing, and appointments.',
  'Java, Spring Boot, MySQL, React',
  'Software Development',
  'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=800&auto=format&fit=crop'
),
(
  'Online Food Ordering Platform',
  'Platform for browsing restaurants, placing orders, and tracking deliveries.',
  'Node.js, Express, MongoDB, React',
  'Web Development',
  'https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800&auto=format&fit=crop'
),
(
  'Weather Forecast App',
  'Mobile application showing real-time weather updates and predictions.',
  'Kotlin, OpenWeather API, SQLite',
  'Mobile App',
  'https://images.unsplash.com/photo-1501630834273-4b5604d2ee31?w=800&auto=format&fit=crop'
),
(
  'Inventory Management System',
  'System to manage stock, suppliers, and sales reports for businesses.',
  'C#, .NET, SQL Server',
  'Desktop Application',
  'https://images.unsplash.com/photo-1581093588401-22d3c9cbb6b1?w=800&auto=format&fit=crop'
),
(
  'AI Chatbot for Customer Support',
  'Conversational AI assistant for handling customer queries automatically.',
  'Python, NLP, Dialogflow, Flask',
  'Artificial Intelligence',
  'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&auto=format&fit=crop'
),
(
  'IoT Smart Home Automation',
  'IoT-based system to control lights, appliances, and security remotely.',
  'Arduino, Raspberry Pi, MQTT, C++',
  'IoT Project',
  'https://images.unsplash.com/photo-1558002038-1055907df827?w=800&auto=format&fit=crop'
);

