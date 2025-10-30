<style>
.hero-section {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  min-height: 80vh;
  font-family: "Poppins", sans-serif;
  padding: 0;
}

/* LEFT SIDE */
.hero-left {
  flex: 2;
  background: url("assets/images/lpg_gas_plant_indust_a5fd5858.jpg") center/cover no-repeat;
  position: relative;
  color: white;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding: 60px;
}
.hero-content{
    padding: 10px;
    background-color: #3575e87d;
    border-radius: 20px;
}
.hero-content h1 {
  font-size: 3rem;
  line-height: 1.2;
  max-width: 400px;
}

.hero-content .btn {
  margin-top: 20px;
}

/* RIGHT SIDE */
.hero-right {
  flex: 1;
  background-color: #3575e8;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 40px;
}

.overview-box {
  max-width: 400px;
}

.overview-box h4 {
  font-size: 14px;
  letter-spacing: 2px;
  margin-bottom: 10px;
  color: #9aa3c0;
}

.overview-box p {
  font-size: 15px;
  line-height: 1.6;
  margin-bottom: 20px;
}

.overview-images {
  display: flex;
  gap: 10px;
}

.overview-images img {
  width: 125px;
  height: 70px;
  object-fit: cover;
  border-radius: 5px;
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .hero-section {
    flex-direction: column;
  }

  .hero-left,
  .hero-right {
    flex: none;
    width: 100%;
    min-height: 50vh;
  }

  .hero-content h1 {
    font-size: 2.2rem;
  }
}

</style>
<section class="hero-section">
  <div class="hero-left">
    <div class="hero-content">
      <h1>Energy Transition Solutions</h1>
      <a href="#" class="btn btn-secondary">About Us</a>
    </div>
  </div>

  <div class="hero-right">
    <div class="overview-box">
      <h4>OVERVIEW</h4>
      <p>
        Elite Group has its vertically integrated business segments that carry out its own specific scope
        of business and provide comprehensive solutions from designing to the delivery of a single product
        or complete EPCC project.
      </p>
      <div class="overview-images">
        <img src="assets/images/company-4.jpeg" alt="img1" />
        <img src="assets/images/company-5.jpeg" alt="img2" />
        <img src="assets/images/company-6.jpeg" alt="img3" />
      </div>
    </div>
  </div>
</section>

<style>
    :root{
      --bg:#f6f8fb;
      --card:#ffffff;
      --accent:#0f6fff;
      --muted:#6b7280;
      --radius:14px;
    }
    /* Section wrapper */
    .omni-section{
      margin:0 auto;
      background:linear-gradient(180deg, rgba(255,255,255,0.9), rgba(255,255,255,0.96));
      border-radius:var(--radius);
      padding:28px;
      box-shadow: 0 6px 28px rgba(15,23,42,0.06);
      display:grid;
      grid-template-columns: 1fr 420px;
      gap:24px;
      align-items:center;
    }

    /* Responsive stack */
    @media (max-width:880px){
      .omni-section{ grid-template-columns: 1fr; padding:20px; }
    }

    /* Left content */
    .omni-heading{
      margin:0 0 12px 0;
      font-size:1.5rem;
      letter-spacing:-0.2px;
      font-weight:700;
      display:flex;
      align-items:center;
      gap:12px;
    }

    .badge{
      display:inline-block;
      padding:6px 10px;
      background:linear-gradient(90deg,var(--accent), #2f9bff);
      color:white;
      font-weight:600;
      font-size:0.8rem;
      border-radius:10px;
    }

    .omni-text{
      font-size:0.96rem;
      line-height:1.6;
      color:#111827;
      white-space:pre-wrap; /* keep line-breaks if you paste text */
    }

    .features{
      display:flex;
      flex-wrap:wrap;
      gap:12px 18px;
      margin-top:6px;
    }

    .feature{
      background: #f3f6ff;
      color:#0f4be6;
      padding:8px 12px;
      border-radius:999px;
      font-weight:600;
      font-size:0.85rem;
      box-shadow: 0 1px 0 rgba(15,23,42,0.03) inset;
    }

    /* Right image cluster */
    .image-cluster{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:10px;
      justify-items:center;
      align-items:center;
    }

    .image-cluster img{
      width:100%;
      height:160px;
      object-fit:cover;
      border-radius:12px;
      display:block;
      box-shadow: 0 6px 18px rgba(15,23,42,0.08);
      transition: transform .35s ease, box-shadow .35s ease;
    }

    .image-cluster img:hover{
      transform: translateY(-6px) scale(1.02);
      box-shadow: 0 18px 40px rgba(15,23,42,0.14);
    }

    /* Make one image span two rows for an interesting layout */
    .image-cluster .tall{
      grid-row: span 2;
      height:340px;
    }

    @media (max-width:480px){
      .image-cluster img{height:120px}
      .image-cluster .tall{height:180px}
    }

  </style>

<section class="company-overview">

    <div class="container">
        <div class="omni-section" aria-labelledby="omni-title">
            <div>
            <h2 id="omni-title" class="omni-heading">
                <span class="badge">OmniGas Technologies PLC</span>
            </h2>
            <p class="omni-text">Portfolio includes LPG plant design and construction, certified autogas conversion centers,advanced LPG injection kits for multi-cylinder engines, fuel storage systems, and LPG distribution networks.
            </p>
            <p class="omni-text">Our approach emphasizes engineering excellence, comprehensive safety systems, local capacity building, and measurable environmental benefits — including reductions in CO₂ and particulate emissions and substantial fuel cost savings for fleet operators. We partner with public and private stakeholders to replicate proven models that increase energy security, create skilled jobs and support national climate objectives.
            </p>
            <div class="features" aria-hidden="false">
                <span class="feature">LPG Plant Design</span>
                <span class="feature">Autogas Conversion</span>
                <span class="feature">Fuel Storage Systems</span>
                <span class="feature">Safety & Training</span>
            </div>

            </div>

            <div class="image-cluster" aria-hidden="false">
            <!-- Left top -->
            <img src="https://picsum.photos/id/1067/600/400" alt="LPG plant infrastructure" loading="lazy">
            <!-- Right top (tall image spans two rows) -->
            <img class="tall" src="https://picsum.photos/id/1011/800/1200" alt="Engine autogas conversion workshop" loading="lazy">
            <!-- Left bottom -->
            <img src="https://picsum.photos/id/1043/600/400" alt="Distribution network and cylinders" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="company-overview">
    <div class="container">
        <div class="section-header">
            <h2>Company Overview</h2>
        </div>
        <div class="overview-grid">
            <!-- <div class="overview-card">
                <div class="card-icon"><i class="fas fa-eye"></i></div>
                <h3>Vision</h3>
                <p>To become a leading provider of safe, efficient, and innovative LPG infrastructure and solutions worldwide</p>
            </div>
            <div class="overview-card">
                <div class="card-icon"><i class="fas fa-bullseye"></i></div>
                <h3>Mission</h3>
                <p>To deliver turnkey LPG systems, from concept to commissioning, with uncompromised safety, engineering excellence, and sustainability</p>
            </div> -->
            <div class="overview-card">
                <div class="card-icon"><i class="fas fa-building"></i></div>
                <h3>Established & Industry</h3>
                <p>2025 — OmniGas Technologies PLC</p>
            </div>
            <div class="overview-card">
                <div class="card-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h3>Head Quarter</h3>
                <p>Bole Dembel, behind Abbarus Complex BLD 1st Floor, Addis Ababa, Ethiopia</p>
            </div>
            <div class="overview-card">
                <div class="card-icon"><i class="fas fa-users"></i></div>
                <h3>Founders</h3>
                <p>Mr Banjo Tamiru & Mr Pawlos Tegenye</p>
            </div>
        </div>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Latest Initiatives</h2>
            <p class="section-subtitle">Delivering Excellence in LPG & CNG Solutions</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="assets/images/company-1.jpeg" alt="OmniGas Operations" loading="lazy">
            </div>
            <div class="gallery-item">
                <img src="assets/images/company-2.jpeg" alt="LPG Installation" loading="lazy">
            </div>
            <div class="gallery-item">
                <img src="assets/images/company-3.jpeg" alt="Autogas Conversion" loading="lazy">
            </div>
            <div class="gallery-item">
                <img src="assets/images/company-4.jpeg" alt="Our Team" loading="lazy">
            </div>
            <div class="gallery-item">
                <img src="assets/images/company-5.jpeg" alt="Our Team" loading="lazy">
            </div>
            <div class="gallery-item">
                <img src="assets/images/company-6.jpeg" alt="Our Team" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="energy-shift">
    <div class="container">
        <div class="section-header">
            <h2>Powering Ethiopia's Energy Shift</h2>
            <p class="section-subtitle">From Diesel → Petrol → LPG → EVs</p>
        </div>
        <div class="impact-box">
            <h3>Impact</h3>
            <div class="impact-grid">
                <div class="impact-item">
                    <i class="fas fa-leaf"></i>
                    <p>Promotes cleaner energy</p>
                </div>
                <div class="impact-item">
                    <i class="fas fa-dollar-sign"></i>
                    <p>Reduces fuel costs</p>
                </div>
                <div class="impact-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <p>Enhances vehicle performance</p>
                </div>
                <div class="impact-item">
                    <i class="fas fa-seedling"></i>
                    <p>Supports Ethiopia's green transition</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="conversion-model" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/car_mechanic_autogas_e6830a72.jpg') center/cover no-repeat fixed;">
    <div class="container">
        <div class="section-header" style="color: white;">
            <h2 style="color: white;">LPG Conversion Model</h2>
        </div>
        <div class="conversion-content">
            <div class="conversion-features">
                <div class="feature-box">
                    <i class="fas fa-tools"></i>
                    <h3>Technology</h3>
                    <p>Advanced systems suitable for 4–8-cylinder engines, ensuring optimal performance</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-gas-pump"></i>
                    <h3>Fuel Storage</h3>
                    <p>Includes 40–60-liter LPG tanks for safe and efficient fuel use</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-wrench"></i>
                    <h3>Workshop</h3>
                    <p>Plant fully equipped workshops for installing modern sequential injection kits</p>
                </div>
            </div>
            <div class="conversion-stats">
                <div class="stat-box">
                    <h3>5,000+</h3>
                    <p>Vehicles Converted</p>
                </div>
                <div class="stat-box">
                    <h3>30%</h3>
                    <p>Fuel Cost Savings</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="safety-section">
    <div class="container">
        <div class="section-header">
            <h2>OGT 9 Safety Protections</h2>
        </div>
        <div class="safety-grid">
            <div class="safety-item"><i class="fas fa-shield-alt"></i> Overpressure Protection</div>
            <div class="safety-item"><i class="fas fa-thermometer-half"></i> Temperature Control</div>
            <div class="safety-item"><i class="fas fa-fire-extinguisher"></i> Fire Safety System</div>
            <div class="safety-item"><i class="fas fa-lock"></i> Secure Installation</div>
            <div class="safety-item"><i class="fas fa-check-circle"></i> Quality Assurance</div>
            <div class="safety-item"><i class="fas fa-cog"></i> Regular Maintenance</div>
            <div class="safety-item"><i class="fas fa-bell"></i> Alert Systems</div>
            <div class="safety-item"><i class="fas fa-user-shield"></i> Safety Training</div>
            <div class="safety-item"><i class="fas fa-clipboard-check"></i> Compliance Standards</div>
        </div>
    </div>
</section>

<section class="benefits-section">
    <div class="container">
        <div class="section-header">
            <h2>Economic & Environmental Benefits</h2>
        </div>
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Economic Benefits</h3>
                <ul>
                    <li>Cost savings up to 30% compared to gasoline</li>
                    <li>Payback in under 12 months</li>
                    <li>Reduced operational costs</li>
                </ul>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon"><i class="fas fa-leaf"></i></div>
                <h3>Environmental Benefits</h3>
                <ul>
                    <li>Emission cuts of 10–15% CO₂</li>
                    <li>90% reduction in particulate matter</li>
                    <li>Supports climate targets and NDCs</li>
                </ul>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon"><i class="fas fa-microchip"></i></div>
                <h3>Technology Innovation</h3>
                <ul>
                    <li>Advanced LPG Injection Kits</li>
                    <li>Eco Reprogramming for engine tuning</li>
                    <li>Optimized fuel efficiency</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="partnership-section">
    <div class="container">
        <div class="section-header">
            <h2>Public-Private Collaboration</h2>
        </div>
        <div class="partnership-content">
            <div class="partnership-box">
                <i class="fas fa-handshake"></i>
                <h3>Partnership Approach</h3>
                <p>OGT Engineering seeks collaboration with ET-GOV local & global stakeholders to expand clean energy infrastructure</p>
            </div>
            <div class="partnership-box">
                <i class="fas fa-landmark"></i>
                <h3>Public Sector Support</h3>
                <p>Policy support, land allocation for fill station development, and import duty waivers on equipment</p>
            </div>
            <div class="partnership-box">
                <i class="fas fa-users-cog"></i>
                <h3>Local Engagement</h3>
                <p>Technical expertise investment, fill station infrastructure, and skill development programs</p>
            </div>
        </div>
        <div class="proven-model">
            <h3>Proven Track Record</h3>
            <div class="model-stats">
                <div class="model-stat">
                    <i class="fas fa-car"></i>
                    <h4>5,000+</h4>
                    <p>Vehicles converted across Africa</p>
                </div>
                <div class="model-stat">
                    <i class="fas fa-gas-pump"></i>
                    <h4>50+</h4>
                    <p>Fill stations established</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    <style>
body {
  font-family: "Arial", sans-serif;
  background: #f7f8fc;
  margin: 0;
  padding: 0;
  color: #333;
}

.testimonial-section {
  padding: 80px 0;
  background: #ffffff;
}

.section-title {
  text-align: center;
  font-size: 32px;
  color: #1a237e;
  margin-bottom: 50px;
  font-weight: 700;
}

.testimonial-item {
  background: #f9fafc;
  border-radius: 15px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
  padding: 30px 20px;
  text-align: center;
  margin: 10px;
  transition: all 0.3s ease;
}

.testimonial-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.1);
}

.testimonial-content p {
  font-style: italic;
  color: #555;
  line-height: 1.6;
  margin-bottom: 25px;
}


.testimonial-author h4 {
  font-size: 18px;
  color: #1a237e;
  margin: 5px 0;
}

.testimonial-author span {
  color: #777;
  font-size: 14px;
}
</style>

</style>
<section class="testimonial-section">
  <div class="container">
    <h2 class="section-title">What Our Clients Say</h2>

    <div class="owl-carousel testimonial-slider">

      <div class="testimonial-item">
        <div class="testimonial-content">
          <p>“OmniGas Technologies helped us switch to clean energy with professionalism and great support.”</p>
        </div>
        <div class="testimonial-author">
          <!-- <img src="https://via.placeholder.com/80" alt="Client 1"> -->
          <h4>John Doe</h4>
          <!-- <span>Project Manager, GreenFuel</span> -->
        </div>
      </div>

      <div class="testimonial-item">
        <div class="testimonial-content">
          <p>“Their solutions are reliable and cost-effective. Truly a partner for sustainability.”</p>
        </div>
        <div class="testimonial-author">
          <!-- <img src="https://via.placeholder.com/80" alt="Client 2"> -->
          <h4>Sarah Kim</h4>
          <!-- <span>Director, EnergyVision</span> -->
        </div>
      </div>

      <div class="testimonial-item">
        <div class="testimonial-content">
          <p>“Excellent service and innovative LPG systems that make a real difference.”</p>
        </div>
        <div class="testimonial-author">
          <!-- <img src="https://via.placeholder.com/80" alt="Client 3"> -->
          <h4>Michael Tesfaye</h4>
          <!-- <span>CEO, EcoGas</span> -->
        </div>
      </div>

    </div>
  </div>
</section>


<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Join the Clean Energy Revolution?</h2>
            <p>Partner with OmniGas Technologies to transform Ethiopia's energy landscape</p>
            <a href="index.php?page=contact" class="btn btn-primary btn-large">Contact Us Today</a>
        </div>
    </div>
</section>
