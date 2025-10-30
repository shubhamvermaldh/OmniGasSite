

<style>
.blog-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 30px;
  padding: 80px 0;
}

.blog-card {
  background: #fff;
  border-radius: 15px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  overflow: hidden;
  transition: 0.3s;
}

.blog-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.12);
}

.blog-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

.blog-content {
  padding: 20px;
}

.blog-content h3 {
  font-size: 20px;
  margin: 10px 0;
  color: #222;
}

.blog-content p {
  color: #555;
  line-height: 1.6;
  font-size: 14px;
}

.blog-meta {
  font-size: 13px;
  color: #888;
  margin-bottom: 10px;
}

.read-more {
  display: inline-block;
  color: #1a237e;
  font-weight: 600;
  margin-top: 10px;
  text-decoration: none;
}

.read-more:hover {
  text-decoration: underline;
}
</style>
<section class="page-header" style="background: linear-gradient(135deg, rgba(30, 64, 175, 0.50) 0%, rgba(59, 130, 246, 0.95) 100%), url('assets/images/clean_energy_sustain_05215df7.jpg') center/cover no-repeat;">
    <div class="container">
        <h1>Blogs</h1>
        <p>Latest Insights & Updates</p>
    </div>
</section>

<section class="container">

  <div class="blog-grid">
    <div class="blog-card">
      <img src="assets/images/company-3.jpeg" alt="Blog 1">
      <div class="blog-content">
        <div class="blog-meta">October 24, 2025 | Admin</div>
        <h3>Driving Ethiopia’s Clean Energy Future</h3>
        <p>Learn how OmniGas Technologies is transforming energy solutions with sustainable LPG and CNG systems across the country.</p>
        <a href="/index.php?page=single-blog" class="read-more">Read More →</a>
      </div>
    </div>

    <div class="blog-card">
      <img src="assets/images/company-4.jpeg" alt="Blog 2">
      <div class="blog-content">
        <div class="blog-meta">October 10, 2025 | Admin</div>
        <h3>Innovations in LPG Conversion</h3>
        <p>We explore new advancements in vehicle LPG conversion technology offering safer, more efficient fuel solutions.</p>
        <a href="/index.php?page=single-blog" class="read-more">Read More →</a>
      </div>
    </div>

    <div class="blog-card">
      <img src="assets/images/company-5.jpeg" alt="Blog 3">
      <div class="blog-content">
        <div class="blog-meta">September 30, 2025 | Admin</div>
        <h3>Public-Private Energy Collaboration</h3>
        <p>Partnerships that drive the national goal of clean energy through technology and community initiatives.</p>
        <a href="/index.php?page=single-blog" class="read-more">Read More →</a>
      </div>
    </div>
  </div>
</section>

