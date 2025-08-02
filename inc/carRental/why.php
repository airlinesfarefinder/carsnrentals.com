



<style>
  .whyus-section {
    background-color: #f5f9ff;
    padding: 60px 20px;
    text-align: center;
  }

  .whyus-title {
    font-size: 32px;
    font-weight: 700;
    color: #000;
    margin-bottom: 40px;
  }

  .whyus-title span {
    color:#0066ff;
    /* Yellow */
  }

  .whyus-cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
  }

  .whyus-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px 20px;
    max-width: 320px;
    flex: 1 1 280px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
  }

  .whyus-icon {
    background-color: #edf4ff;
    border-radius: 50%;
    width: 70px;
    height: 70px;
    margin: 0 auto 20px auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .whyus-icon img {
    width: 36px;
    height: 36px;
  }

  .whyus-card-title {
    font-weight: 700;
    font-size: 16px;
    margin-bottom: 10px;
  }

  .whyus-card-text {
    font-size: 14px;
    color: #555;
    line-height: 1.5;
  }

  /* Mobile optimization */
  @media (max-width: 768px) {
    .whyus-title {
      font-size: 28px;
    }

    .whyus-cards {
      flex-direction: column;
      align-items: center;
    }

    .whyus-card {
      width: 100%;
      max-width: 100%;
    }
  }
</style>


<section class="whyus-section">
  <div class="whyus-container">
    <h2 class="whyus-title">Why <span>Us</span></h2>

    <div class="whyus-cards">
      <div class="whyus-card">
        <div class="whyus-icon">
          <img src="./images/car/choice.png" alt="Diversity" />
        </div>
        <h3 class="whyus-card-title">Diversity</h3>
        <p class="whyus-card-text">
          We guarantee that you will find the best car for your trip thanks to special offers from 600+ suppliers.
        </p>
      </div>

      <div class="whyus-card">
        <div class="whyus-icon">
          <img src="./images/car/profit.png" alt="Value for money" />
        </div>
        <h3 class="whyus-card-title">Value for money</h3>
        <p class="whyus-card-text">
          We are happy to offer our customers the best prices due to having access to discounts provided by rental companies.
        </p>
      </div>

      <div class="whyus-card">
        <div class="whyus-icon">
          <img src="./images/car/best-employee.png" alt="Experience" />
        </div>
        <h3 class="whyus-card-title">Experience &amp; expertise</h3>
        <p class="whyus-card-text">
          With over a decade on the market, we are one of the most experienced and trusted experts in the car rental field.
        </p>
      </div>
    </div>
  </div>
</section>