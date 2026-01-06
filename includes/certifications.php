<!-- Certifications Section -->
<section id="certifications" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Certifications & Achievements</h2>
                <p class="lead text-muted">
                    Validated Expertise through Professional, Industry-Recognized Certifications and Awards; and Educational Achievements.
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <?php
            // Fetch categories dynamically
            $categories = ['Academic Degrees', 'Technical Certifications', 'Professional & Other'];

            foreach ($categories as $category):
                $stmt = $pdo->prepare("SELECT * FROM certifications WHERE category = ? ORDER BY issue_date DESC");
                $stmt->execute([$category]);
                $certs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <div class="col-lg-4">
                <div class="certification-category h-100">
                    <div class="certification-header text-center mb-4">
                        <?php if ($category === 'Academic Degrees'): ?>
                            <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                        <?php elseif ($category === 'Technical Certifications'): ?>
                            <i class="fas fa-code fa-3x text-primary mb-3"></i>
                        <?php else: ?>
                            <i class="fas fa-award fa-3x text-primary mb-3"></i>
                        <?php endif; ?>
                        <h4><?php echo htmlspecialchars($category); ?></h4>
                    </div>
                    <div class="certification-list">
                        <?php if ($certs): ?>
                            <?php foreach ($certs as $cert): ?>
                                <div class="cert-item mb-3">
                                    <h6 class="cert_title"><?php echo htmlspecialchars($cert['title']); ?></h6>
                                    <p class="institution text-muted mb-1">
                                        <?php echo htmlspecialchars($cert['institution']); ?> 
                                        <?php if (!empty($cert['issue_date'])): ?> 
                                            | <?php echo htmlspecialchars($cert['issue_date']); ?> 
                                        <?php endif; ?>
                                    </p>
                                    <p class="certificate_url"><?php echo htmlspecialchars($cert['certificate_url']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-muted">No certifications available in this category yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
