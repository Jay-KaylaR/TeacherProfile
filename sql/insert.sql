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
INSERT INTO certifications (title, issuer, issue_date, description, category) VALUES
('Bachelor of Education (Arts)', 'University of Nairobi', '2019-12-15', 'Specialized in Mathematics and Geography education.', 'Academic Degrees'),
('Bachelor of Science in Information Technology', 'Kenyatta University', '2026-07-20', 'Focused on Web Development, AI, Blockchain, and Distributed Systems.', 'Academic Degrees'),

('AWS Certified Cloud Practitioner', 'Amazon Web Services', '2023-06-01', 'Validated knowledge of AWS cloud services and architecture.', 'Technical Certifications'),
('Cisco Certified Network Associate (CCNA)', 'Cisco', '2022-09-15', 'Networking fundamentals, IP connectivity, and security basics.', 'Technical Certifications'),

('Best ICT Teacher Award', 'Kenya ICT Authority', '2021-11-30', 'Recognized for innovative use of technology in education.', 'Professional & Other'),
('Basketball Coaching Level 1', 'FIBA Africa', '2022-04-10', 'Certified basketball coaching skills with youth development focus.', 'Professional & Other');

-- =============================
-- Insert Projects
-- =============================
INSERT INTO projects (title, description, technologies, project_type) VALUES
('Student Performance Tracker', 'A web application to track student grades, attendance, and progress.', 'PHP, MySQL, JavaScript, Bootstrap', 'Web Development'),
('Smart Attendance System', 'AI-powered facial recognition system for automated student attendance.', 'Python, OpenCV, TensorFlow, SQLite', 'Artificial Intelligence'),
('E-Learning Mobile App', 'Cross-platform app for interactive learning and digital classrooms.', 'Flutter, Firebase, REST API', 'Mobile App'),
('Blockchain Voting System', 'Decentralized platform for secure and transparent voting.', 'Solidity, Ethereum, Web3.js', 'Blockchain');
