<!-- Include AOS CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<!-- About Section -->
<section id="about" class="py-5 bg-gradient-about text-light">
  <div class="container">
    <!-- Section Title -->
    <div class="row">
      <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3 text-dark">About Me</h2>
        <p class="lead text-secondary">
          I am an educator and developer committed to bridging the gap between <strong>learning</strong> and <strong>technology</strong>. I build meaningful digital solutions and design engaging learning experiences that turn complex ideas into practical skills.
          
        </p>
      </div>
    </div>

    <div class="row g-4">
      <!-- Education Timeline -->
      <div class="col-lg-6" data-aos="fade-right">
        <div class="about-content p-4 rounded bg-white shadow-sm h-100">
          <h3 class="h4 fw-bold mb-4 text-primary">
            <i class="fas fa-graduation-cap me-2"></i> Education
          </h3>
          <div class="timeline">
            <div class="timeline-item mb-4" data-aos="fade-up">
              <div class="timeline-dot bg-primary"></div>
              <div class="timeline-content">
                <h4 class="fw-semibold text-dark">Bachelor of Education (Arts)</h4>
                <h5><p class="text mb-1">Graduated 2019</p></h5>
                <p class="mb-0 text">
                  A dedicated educator with a strong foundation in Mathematics and Geography. <br> I specialize in innovative, student-centered teaching methodologies, and have since expanded my expertise to include Computer Studies/ICT.<br> My approach is focused on making learning engaging and relevant, and I'm actively applying my skills to teach technology and geography in the modern classroom.
                </p>
              </div>
            </div>
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
              <div class="timeline-dot bg-primary"></div>
              <div class="timeline-content">
                <h4 class="fw-semibold text-dark">Bachelor of Science in Information Technology</h4>
                <h5><p class="text mb-1">Graduated 2026</p></h5>
                <p class="mb-0 text">
                  A recent graduate with a B.Sc. in Information Technology, specializing in the full-stack development life cycle and emerging technologies.<br> I'm actively expanding my skills in Web Development, Artificial Intelligence, and Database Management. <br>My work focuses on building robust systems and leveraging technology to solve real-world problems, with a particular interest in Educational Technology integration.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Experience Timeline -->
      <div class="col-lg-6" data-aos="fade-left">
        <div class="about-content p-4 rounded bg-white shadow-sm h-100">
          <h3 class="h4 fw-bold mb-4 text-primary">
            <i class="fas fa-briefcase me-2"></i> Experience
          </h3>
          <div class="timeline">
            <div class="timeline-item mb-4" data-aos="fade-up">
              <div class="timeline-dot bg-success"></div>
              <div class="timeline-content">
                <h5 class="fw-semibold text-dark">Computer Science & IT Teacher</h5>
                <p class="text mb-2"><strong> International Schools | Present</strong></p>
                <ul class="list-unstyled text-secondary">
                  <li><i class="fas fa-check text-success me-2"></i> Teach programming (Python, Java, C++, Web)</li>
                  <li><i class="fas fa-check text-success me-2"></i> Guide students in robotics and coding projects</li>
                  <li><i class="fas fa-check text-success me-2"></i> Mentor learners in competitions and hackathons</li>
                </ul>
              </div>
            </div>

            <div class="timeline-item mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="timeline-dot bg-success"></div>
              <div class="timeline-content">
                <h5 class="fw-semibold text-dark">Basketball Coach</h5>
                <p class="text mb-2"><strong>School Teams | Since 2020</strong></p>
                <ul class="list-unstyled text-secondary">
                  <li><i class="fas fa-check text-success me-2"></i> Train and mentor young athletes</li>
                  <li><i class="fas fa-check text-success me-2"></i> Use technology for performance analysis</li>
                  <li><i class="fas fa-check text-success me-2"></i> Promote teamwork and discipline</li>
                </ul>
              </div>
            </div>

            <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
              <div class="timeline-dot bg-success"></div>
              <div class="timeline-content">
                <h5 class="fw-semibold text-dark">Mathematics & Geography Teacher</h5>
                <p class="text mb-2"><strong> High School Level | 6 Years</strong></p>
                <ul class="list-unstyled text-secondary">
                  <li><i class="fas fa-check text-success me-2"></i> Strong STEM background</li>
                  <li><i class="fas fa-check text-success me-2"></i> Integrated digital tools in learning</li>
                  <li><i class="fas fa-check text-success me-2"></i> Connected math, geography, and technology</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Timeline Styles -->
<style>
.timeline {
  position: relative;
  padding-left: 1.5rem;
  border-left: 2px solid #dee2e6;
}
.timeline-item {
  position: relative;
}
.bg-gradient-about {
  background: linear-gradient(to right, #01192e, #00f2fe);
}
.timeline-dot {
  position: absolute;
  left: -11px;
  top: 5px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
}
.timeline-content {
  margin-left: 1rem;
}
h2 {
  color: #1a0212ff; /* Golden Yellow for main headings */
}

h3, h4, h5 {
  color: #66d9ff; /* Light Blue for subheadings */
}

p, li {
  color: #e6f7ff; /* Softer white for body text */
}
</style>

<!-- Include AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // Animation speed (ms)
    once: true      // Run animation only once
  });
</script>
