<style>
    .container-fluid {
        max-width: 100%;
        margin-inline: auto;
      
        padding: 0 20px;
          background-color: #f5f9ff;
    }

    .header {
        text-align: center;
        margin-bottom: 40px;
    }

    .main-title {
        font-size: 2.2rem;
        font-weight: bold;
        color: #000;
        margin-bottom: 10px;
    }

    .subtitle {
        font-size: 1.3rem;
        color: #333;
    }

    .vehicles-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 10px;
        margin-bottom: 40px;
    }

    .vehi-card {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .vehi-image img {
        width: 100%;
        max-height: 150px;
        object-fit: contain;
        margin-bottom: 20px;
    }

    .vehi-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #0066ff;
        margin-bottom: 10px;
    }

    .vehi-description {
        font-size: 1.3rem;
        font-weight: 500;
        color: #333;
        margin-bottom: 20px;
        line-height: 1.5;
        text-align: justify;
    }

    .rent-button {
        background-color: #0066ff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 999px;
        font-weight: 600;
        cursor: pointer;
        font-size: 12px;
    }

    .rent-button:hover {
        background-color: #0648ffff;
    }
</style>
<div class="container-fluid" style="margin-top:35px;" >
    <div class="header">
        <h1 class="main-title">Popular Rental Cars in  <span style="color:#0066ff;" >Los Angeles</span></h1>
        <p class="subtitle">Find the perfect vehicle for your needs.</p>
    </div>

    <div class="vehicles-grid">
        <div class="row">
            <div class="col-sm-3">
                <div class="vehi-card">
                    <div class="vehi-image">
                        <img src="./images/car/2024-chevrolet-equinox-lt-suv-angular-front.avif" alt="SUV" />
                    </div>
                    <h3 class="vehi-title">SUVs</h3>
                    <p class="vehi-description">
                        Whether you are going on a weekend family trip or exploring the countryside we are sure to have the ideal SUV for your needs.
                    </p>
                   <a href="tel:(888) 958-1310"> <button class="rent-button">Call Now</button></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="vehi-card">
                    <div class="vehi-image">
                        <img src="./images/car/chry-paci-2021.avif" alt="Vans" />
                    </div>
                    <h3 class="vehi-title">Vans</h3>
                    <p class="vehi-description">
                        Our minivans and passenger vans can seat up to 7 or 15 passengers and are great for family vacations or large groups.
                    </p>
                    <a href="tel:(888) 958-1310"> <button class="rent-button">Call Now</button></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="vehi-card">
                    <div class="vehi-image">
                        <img src="./images/car/ford-f150-2018.avif" alt="Pickup Truck" />
                    </div>
                    <h3 class="vehi-title">Pickup Truck</h3>
                    <p class="vehi-description">
                        Our pickup trucks have the space, power and durability you need for hauling large items or taking a weekend retreat.
                    </p>
                   <a href="tel:(888) 958-1310"> <button class="rent-button">Call Now</button></a>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="vehi-card">
                    <div class="vehi-image">
                        <img src="./images/car/wcar-bmw-7ser-2021-800x600.avif" alt="Luxury Cars" />
                    </div>
                    <h3 class="vehi-title">Luxury Cars</h3>
                    <p class="vehi-description">
                        Choose from our range of premium cars and SUVs to rent, including convertibles, coupes, hybrids and more.
                    </p>
                      <a href="tel:(888) 958-1310"> <button class="rent-button">Call Now</button></a>
                </div>
            </div>

        </div>
    </div>
</div>