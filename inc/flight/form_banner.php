<style>
    #banner {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 2rem 0;
    }



    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        width: 100%;
    }

    .hero-content {
        text-align: center;
        margin-bottom: 4rem;
        width: 100%;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 2rem;
        text-align: center;
        line-height: 1.1;
    }

    .hero-content .highlight {
       background-color: #ff7b00;
       border-radius: 5px;
       color:#000000;
       padding-left:5px;
       padding-right: 5px;
    }

    .highlighted{
          /* background: linear-gradient(173deg, #0c0c0c, #7d23c1)!important ; */
    color: #000000 !important;

    }

    .hero-content .contact {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        background: #ff7b00;
        color: #0f0f23;
        text-decoration: none;
        font-size: 1.3rem;
        font-weight: 700;
        padding: 1.2rem 2.5rem;
        border-radius: 50px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3);
    }

    .hero-content .contact:hover {
        background: #00b8e6;
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0, 212, 255, 0.4);
    }

    .search-form {
        background: rgb(245 245 245 /61%);

        border-radius: 20px;
        padding: 3rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
    }

    .form-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 2rem;
        font-weight: 700;
        color: #373737;
        margin-bottom: 3rem;
        justify-content: center;
    }

    .form-title i {
        color: #00d4ff;
        font-size: 2.2rem;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-bottom: 2.5rem;
    }

    .input-group {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .date-group {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }

    .input-field {
        width: 100%;
        padding: 1.3rem 1.3rem 1.3rem 3.5rem;
        border: 2px solid rgba(0 0 0 / 30%);
        border-radius: 15px;
        font-size: 1.1rem;
        background: rgba(255, 255, 255, 0.08);
        /* color: #ffffff; */
          color: #3c3c3c;
        transition: all 0.3s ease;
    }

    .input-field:focus {
        outline: none;
        border-color:#ff7b00;
        background: rgba(255, 255, 255, 0.12);
        box-shadow: 0 0 0 3px rgba(0, 212, 255, 0.2);
    }

    .input-field::placeholder {
        /* color: rgba(224, 86, 86, 0.6); */
                color: #3c3c3c;
        font-size: 1.1rem;
    }

    .input-label {
        position: absolute;
        top: -20px;
        left: 7px;
        background: #ff7b00;
        color: #0f0f23;
        padding: 0.3rem 1rem;
        font-size: 0.9rem;
        font-weight: 700;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #00d4ff;
        font-size: 1.3rem;
    }

    .contact-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-bottom: 3rem;
    }

    .search-btn {
        background-color:  #ff7b00;
        color: #0f0f23;
        border: none;
        padding: 1.5rem 4rem;
        font-size: 1.3rem;
        font-weight: 700;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        justify-content: center;
        margin: 0 auto;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 10px 30px rgba(0, 212, 255, 0.4);
    }

    .search-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(0, 212, 255, 0.5);
        background: linear-gradient(135deg, #00b8e6 0%, #007399 100%);
    }

    .search-btn i {
        font-size: 1.4rem;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .container {
            /* padding: 0 1rem; */
        }

        .hero-content{
            padding:0px !important;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            line-height: 1.5;
        }

        .search-form {
            padding: 2rem;
            margin-top: 2rem;
        }

        .form-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .date-group {
            grid-template-columns: 1fr;
        }

        .contact-row {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .hero-content .contact {
            font-size: 1.1rem;
            padding: 1rem 2rem;
        }

        .search-btn {
            width: 100%;
            padding: 1.3rem 2rem;
            font-size: 1.1rem;
        }

        .form-title {
            font-size: 1.7rem;
        }
    }


</style>

<div id="banner">
    <div class="container">
        <div class="hero-content">
            <h1>
                Journey to <span class="highlight">Faraway Lands</span> Without the High Cost
            </h1>

            <!-- <a href="tel:(888) 257-3866" class="contact  highlighted"   >
                <i class="fas fa-phone-alt"></i>
                Call us (888) 257-3866
            </a> -->
        </div>

        <form class="search-form">
            <div class="form-title">
                <i class="fas fa-plane"></i>
                Flight Search
            </div>

            <div class="form-grid">
                <div class="input-group">
                    <label class="input-label highlighted">From</label>
                    <i class="fas fa-plane-departure input-icon"></i>
                    <input type="text" class="input-field" placeholder="Any Airport" />
                </div>

                <div class="input-group">
                    <label class="input-label highlighted">To</label>
                    <i class="fas fa-plane-arrival input-icon"></i>
                    <input type="text" class="input-field" placeholder="Any Airport" />
                </div>

                <div class="input-group">
                    <label class="input-label highlighted">Travel Dates</label>
                    <div class="date-group">
                        <div style="position: relative;">
                            <i class="fas fa-calendar-alt input-icon"></i>
                            <input type="date" class="input-field" placeholder="Departure" style="padding-left: 3.5rem;" />
                        </div>
                        <div style="position: relative;">
                            <i class="fas fa-calendar-check input-icon"></i>
                            <input type="date" class="input-field" placeholder="Return" style="padding-left: 3.5rem;" />
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <label class="input-label highlighted">Travellers</label>
                    <i class="fas fa-users input-icon"></i>
                    <input type="text" class="input-field" placeholder="1 Adult" />
                </div>
            </div>

            <div class="contact-row">
                <div class="input-group">
                    <label class="input-label highlighted">Contact</label>
                    <i class="fas fa-phone input-icon"></i>
                    <input type="tel" class="input-field" placeholder="Your Contact Number" />
                </div>

                <div class="input-group">
                    <label class="input-label highlighted">Email</label>
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" class="input-field" placeholder="Your Email Address" />
                </div>
            </div>

            <button type="submit" class="search-btn highlighted">
                <i class="fas fa-search"></i>
                Search Flights
            </button>
        </form>
    </div>
</div>

<script>
    // Add subtle focus effects
    document.querySelectorAll('.input-field').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });

        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });
</script>