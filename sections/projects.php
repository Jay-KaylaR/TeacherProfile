<!-- Projects Section -->
<section id="projects" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Featured Projects</h2>
                <p class="lead text-muted">
                    Showcasing technical expertise through real-world applications.
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <?php foreach ($projects as $project): ?>
            <div class="col-lg-6">
                <div class="project-card h-100">
                    <div class="project-header">
                        <div class="project-icon">
                            <i class="<?php echo getProjectIcon($project['title']); ?>"></i>
                        </div>
                        <div class="project-info">
                            <h4 class="project-title"><?php echo sanitizeOutput($project['title']); ?></h4>
                            <span class="badge bg-primary project-category"><?php echo sanitizeOutput($project['category']); ?></span>
                        </div>
                    </div>
                    
                    <div class="project-content">
                        <p class="project-description mb-3">
                            <?php echo sanitizeOutput($project['description']); ?>
                        </p>
                        
                        <div class="project-tech mb-3">
                            <h6 class="text-muted mb-2">Technologies Used:</h6>
                            <div class="tech-tags">
                                <?php 
                                $technologies = explode(', ', $project['technologies']);
                                foreach ($technologies as $tech): 
                                ?>
                                <span class="badge bg-secondary me-1 mb-1"><?php echo sanitizeOutput(trim($tech)); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="project-meta">
                            <small class="text-muted">
                                <i class="fas fa-tag me-1"></i><?php echo sanitizeOutput($project['project_type']); ?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Projects Summary -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="projects-summary text-center">
                    <h4 class="mb-4">Project Categories</h4>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="summary-item">
                                <i class="fas fa-graduation-cap text-primary"></i>
                                <h6 class="mt-2">Educational Technology</h6>
                                <small class="text-muted">School Management Systems</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="summary-item">
                                <i class="fas fa-chart-line text-success"></i>
                                <h6 class="mt-2">Data Analytics</h6>
                                <small class="text-muted">Statistics & Reporting</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="summary-item">
                                <i class="fas fa-globe text-info"></i>
                                <h6 class="mt-2">Web Applications</h6>
                                <small class="text-muted">Full-Stack Development</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="summary-item">
                                <i class="fas fa-building text-warning"></i>
                                <h6 class="mt-2">Enterprise Solutions</h6>
                                <small class="text-muted">Business Management</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>