<?php
// includes/functions.php

/**
 * Safely escape strings for HTML output.
 */
function sanitizeOutput($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

/**
 * Check if a column exists in a table.
 */
function columnExists(PDO $pdo, string $table, string $column): bool {
    try {
        $stmt = $pdo->prepare("SHOW COLUMNS FROM `$table` LIKE :col");
        $stmt->execute([':col' => $column]);
        return (bool)$stmt->fetch();
    } catch (PDOException $e) {
        return false;
    }
}

/* =========================
   PROJECTS
   ========================= */
function getProjects($pdo) {
    $sql = "SELECT id, title, description, technologies, project_type
            FROM projects
            ORDER BY id DESC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/* =========================
   SKILLS
   ========================= */
function getSkills($pdo) {
    $stmt = $pdo->query("SELECT id, skill_name, category, proficiency_level, percentage 
                         FROM skills 
                         ORDER BY category, percentage DESC, skill_name ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getSkillsByCategory($pdo, string $category) {
    $stmt = $pdo->prepare("SELECT id, skill_name, category, proficiency_level, percentage
                           FROM skills
                           WHERE category = ?
                           ORDER BY percentage DESC, skill_name ASC");
    $stmt->execute([$category]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/* =========================
   CERTIFICATIONS
   ========================= */
function getCertifications($pdo) {
    $stmt = $pdo->query("SELECT id, title, category, institution, issue_date, certificate_url
                         FROM certifications
                         ORDER BY issue_date DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCertificationsByCategory($pdo, string $category) {
    $stmt = $pdo->prepare("SELECT id, title, instituition, issue_date, certificate_url, category
                           FROM certifications
                           WHERE category = ?
                           ORDER BY issue_date DESC");
    $stmt->execute([$category]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/* =========================
   CONTACT
   ========================= */
function submitContactForm($pdo, array $data): array {
    $name    = trim($data['name']    ?? '');
    $email   = trim($data['email']   ?? '');
    $subject = trim($data['subject'] ?? '');
    $message = trim($data['message'] ?? '');

    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        return ['success' => false, 'message' => 'All fields are required.'];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'message' => 'Please enter a valid email address.'];
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (name, email, subject, message, created_at) 
                               VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$name, $email, $subject, $message]);
        return ['success' => true, 'message' => 'Thank you! Your message has been sent.'];
    } catch (PDOException $e) {
        error_log('Contact insert error: ' . $e->getMessage());
        return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
    }
}
