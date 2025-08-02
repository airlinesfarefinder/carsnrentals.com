<style>
  .car-banner-wrapper {
    position: relative;
    background: url('./images/car/background-new.8bcdad22.webp') center/cover no-repeat;
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .car-banner-overlay {
    background-color: rgba(255, 204, 0, 0.95);
    padding: 20px;
    border-radius: 10px;
    width: 100%;
    max-width: 1100px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  .car-rental-form {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
  }

  .car-form-group {
    flex: 1 1 30%;
    min-width: 220px;
    display: flex;
    flex-direction: column;
  }

  .car-form-group label {
    font-size: 13px;
    margin-bottom: 5px;
    color: #333;
    font-weight: 600;
  }

  .car-form-group input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    width: 100%;
  }

  .car-search-btn {
    background-color: #0066ff;
    color: white;
    border: none;
    padding: 12px 25px;
    font-weight: bold;
    border-radius: 6px;
    cursor: pointer;
    align-self: flex-end;
    height: 42px;
    margin-top: auto;
  }

  @media (max-width: 768px) {



.car-banner-wrapper {
  
    padding-inline: 10px;
    height:400px;
  }

    .car-rental-form {
      flex-direction: column;
      align-items: stretch;
    }

    .car-form-group {
      flex: 1 1 100%;
      min-width: unset;
    }

    .car-search-btn {
      width: 100%;
      margin-top: 10px;
    }
  }
</style>

<div class="car-banner-wrapper">
  <div class="car-banner-overlay"> 
    <form class="car-rental-form">
      <div class="car-form-group">
        <label for="pickup-location">Pick-up location</label>
        <input type="text" id="pickup-location" placeholder="Where to pick up" />
      </div>
      <div class="car-form-group">
        <label for="pickup-date">Pick-up date</label>
        <input type="date" id="pickup-date" />
      </div>
      <div class="car-form-group">
        <label for="dropoff-date">Drop-off date</label>
        <input type="date" id="dropoff-date" />
      </div>
      <button type="submit" class="car-search-btn">Search</button>
    </form>
  </div>
</div>
