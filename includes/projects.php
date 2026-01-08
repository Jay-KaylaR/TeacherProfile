<!-- Projects Section -->
<section id="projects" class="py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold">Featured Projects</h2>
      <p class="text-muted">Showcasing real-world applications</p>
    </div>

    <!-- GRID -->
    <div class="projects-grid">

      <?php
      $stmt = $pdo->query("SELECT * FROM projects ORDER BY title DESC");

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $image = !empty($row['image'])
          ? htmlspecialchars($row['image'])
          : 'assets/images/default-project.jpg';
      ?>
        <div class="project-card">

          <!-- IMAGE -->
          <div
            class="project-image"
            style="background-image: url('<?= $image ?>');">
          </div>

          <!-- CONTENT -->
          <div class="project-content">
            <h6 class="project-title"><?= htmlspecialchars($row['title']) ?></h6>

            <span class="badge bg-primary mb-2">
              <?= htmlspecialchars($row['project_type']) ?>
            </span>

            <div class="project-tech">
              <?php
              foreach (explode(',', $row['technologies']) as $tech) {
                echo "<span class='badge bg-secondary'>" . htmlspecialchars(trim($tech)) . "</span>";
              }
              ?>
            </div>
          </div>

        </div>
      <?php } ?>

    </div>
  </div>
</section>
