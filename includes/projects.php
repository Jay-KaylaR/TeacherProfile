<!-- Projects Section -->
<section id="projects" class="py-5" style="background: linear-gradient(135deg, #000428, #004e92); color: white;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold">Projects</h2>
    </div>

    <div class="projects-container">
      <?php
      $stmt = $pdo->query("SELECT * FROM projects ORDER BY title DESC");
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<div class='project shadow-sm'>";
          echo "<h4 class='fw-bold text-info'>" . htmlspecialchars($row['title']) . "</h4>";
          echo "<p class='text-light'>" . htmlspecialchars($row['description']) . "</p>";
          echo "<p><strong>Technologies:</strong> " . htmlspecialchars($row['technologies']) . "</p>";
          echo "<p><strong>Category:</strong> " . htmlspecialchars($row['project_type']) . "</p>";
          echo "</div>";
      }
      ?>
    </div>
  </div>
</section>
