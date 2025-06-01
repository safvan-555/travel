<?php include 'header.php'; ?>


<style>
.custom-accordion .accordion-button {
    background-color: #f8f9fa;
    font-weight: 600;
    color: #2c3e50;
    transition: all 0.3s ease;
}

.custom-accordion .accordion-button:not(.collapsed) {
    background-color: #e9f5ff;
    color: #0d6efd;
}

.custom-accordion .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0, 0, 0, .125);
}

.custom-accordion .faq-heading {
    font-size: 1.3rem;
    font-weight: 700;
    padding: 0px 30px
}

.custom-accordion .accordion-button .accordion-arrow {
    margin-right: 30px
}


.custom-accordion .accordion-button::after {
    display: none;
}

.custom-accordion .accordion-arrow {
    transition: transform 0.3s ease;
    font-size: 0.8rem;
}

.custom-accordion .accordion-button:not(.collapsed) .accordion-arrow {
    transform: rotate(180deg);
    color: #0d6efd;
}

.custom-accordion .accordion-body {
    border-top: 1px solid rgba(0, 0, 0, .05);
}

.custom-accordion .accordion-button i {
    font-size: 1.2rem;
    width: 30px;
    text-align: center;
}

.visa-types-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.visa-type-card {
    display: flex;
    align-items: center;
    background-color: #FFF;
    border-radius: 10px;
    padding: 15px 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    cursor: pointer;
    border-left: 4px solid transparent;
}

.visa-type-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border-left: 4px solid #0d6efd;
}

.visa-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #e9f5ff, #d0e7ff);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    color: #0d6efd;
    font-size: 1.2rem;
}

.visa-content {
    flex: 1;
}

.visa-content h6 {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 5px;
    font-size: 1.1rem;
}

.visa-content p {
    color: #7a7a7a;
    font-size: 0.85rem;
    margin-bottom: 0;
}

.visa-arrow {
    color: #c0c0c0;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.visa-type-card:hover .visa-arrow {
    color: #0d6efd;
    transform: translateX(3px);
}

/* Specific colors for each visa type */
.visa-type-card:nth-child(1):hover {
    border-left-color: #4e73df;
}

.visa-type-card:nth-child(2):hover {
    border-left-color: #1cc88a;
}

.visa-type-card:nth-child(3):hover {
    border-left-color: #f6c23e;
}

.visa-type-card:nth-child(4):hover {
    border-left-color: #e74a3b;
}

.visa-type-card:nth-child(5):hover {
    border-left-color: #36b9cc;
}

.visa-type-card:nth-child(6):hover {
    border-left-color: #858796;
}

.visa-type-card:nth-child(1) .visa-icon {
    color: #4e73df;
    background: linear-gradient(135deg, #f0f4ff, #e0e9ff);
}

.visa-type-card:nth-child(2) .visa-icon {
    color: #1cc88a;
    background: linear-gradient(135deg, #f0fff4, #e0ffe9);
}

.visa-type-card:nth-child(3) .visa-icon {
    color: #f6c23e;
    background: linear-gradient(135deg, #fffaf0, #fff5e0);
}

.visa-type-card:nth-child(4) .visa-icon {
    color: #e74a3b;
    background: linear-gradient(135deg, #fff0f0, #ffe0e0);
}

.visa-type-card:nth-child(5) .visa-icon {
    color: #36b9cc;
    background: linear-gradient(135deg, #f0f9ff, #e0f3ff);
}

.visa-type-card:nth-child(6) .visa-icon {
    color: #858796;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
}
</style>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-aos="fade-up" data-aos-delay="700">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Visa</h1>
            <ul class="breadcumb-menu">
                <li><a href="/l">Home</a></li>
                <li>Visa</li>
            </ul>
        </div>
    </div>
</div>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 pt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="visa-types-container">
                            <a class="visa-type-card" href="student-visa.php">
                                <div class="visa-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="visa-content">
                                    <h6>Student Visa</h6>
                                </div>
                                <div class="visa-arrow">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </a>
                            <a class="visa-type-card" href="family-visa.php">
                                <div class="visa-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="visa-content">
                                    <h6>Family Visa</h6>
                                </div>
                                <div class="visa-arrow">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </a>
                            <a class="visa-type-card" href="business-visa.php">
                                <div class="visa-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="visa-content">
                                    <h6>Business Visa</h6>
                                </div>
                                <div class="visa-arrow">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </a>
                            <a class="visa-type-card" href="working-visa.php">
                                <div class="visa-icon">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <div class="visa-content">
                                    <h6>Working Visa</h6>
                                </div>
                                <div class="visa-arrow">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </a>
                            <a class="visa-type-card" href="tourist-visa.php">
                                <div class="visa-icon">
                                    <i class="fas fa-umbrella-beach"></i>
                                </div>
                                <div class="visa-content">
                                    <h6>Tourist Visa</h6>
                                </div>
                                <div class="visa-arrow">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </a>
                            <a class="visa-type-card" href="residence-visa.php">
                                <div class="visa-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="visa-content">
                                    <h6>Residence Visa</h6>
                                </div>
                                <div class="visa-arrow">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 position-relative pt-5">
                        <div
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; padding-left: 50px;">
                            <div style="font-size: 34px; font-weight: bold;color:#fff;margin-top:10px">Dream Tour</div>
                            <div style="font-size: 60px; font-weight: bold;color:#fff;line-height:1.3">Explore The World
                            </div>
                        </div>
                        <img src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/visa-banner.jpg"
                            style="width: 100%;" />
                    </div>
                    <div class="col-md-12 pt-5">
                        <div
                            style="background-color:#fff; border-radius: 4px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px;">
                            <div style="font-size:18px;color:#000; margin-top:20px;padding:0px 20px ">
                                <h6 style="color:#000">Quick Contact</h6>
                            </div>
                            <form action="send_email.php" method="POST" style="padding:20px"
                                class="ajax-contact-visa-form">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Your Phone Number">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="message" name="message" rows="3"
                                        placeholder="Your Message"></textarea>
                                </div>

                                <button type="submit" class="th-btn style4 th-icon">Submit</button>
                                <p style="color:red" class="contact-form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-7 col-md-12  pt-5">
                <div class="row">
                    <div class="col-md-12">
                        <img src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/bg11.jpg" />
                    </div>
                    <div class="col-md-12 pt-5">
                        <h3 style="font-size:1.75rem;color:#000;font-weight:700">Visa Overview</h3>
                        <p>Ultrices conubia vehicula malesuada. Eros commodo a duis accumsan vestibulum adipiscing
                            hendrerit lobortis viverra non justo semper semper rutrum ad risus felis eros. Cursus libero
                            viverra tempus netus diam Semper est cursus viverra lectus nibh Eros commodo a duis accumsan
                            vestibulum adipiscing hendrerit adipiscing libero viverra tempus augue ligula</p>
                    </div>
                    <div class="col-md-6 pt-4">
                        <img src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/bg31-1.jpg" />
                    </div>
                    <div class="col-md-6 pt-4">
                        <h3 style="font-size:1.75rem;color:#000">Institutes:</h3>
                        <ul class="list-unstyled" style="line-height: 2.4;">
                            <li class="">
                                <i aria-hidden="true" class="fas fa-arrow-circle-right" style="color: red;"></i> <span>
                                    Einstein College of Australia</span>
                            </li>

                            <li class="">
                                <i aria-hidden="true" class="fas fa-arrow-circle-right" style="color: red;"></i> <span>
                                    Cambridge College nternational</span>
                            </li>

                            <li class="">
                                <i aria-hidden="true" class="fas fa-arrow-circle-right" style="color: red;"></i> <span>
                                    Adelaide College Of Technology</span>
                            </li>

                            <li class="">
                                <i aria-hidden="true" class="fas fa-arrow-circle-right" style="color: red;"></i> <span>
                                    Central Queensland University</span>
                            </li>

                            <li class="">
                                <i aria-hidden="true" class="fas fa-arrow-circle-right" style="color: red;"></i> <span>
                                    Brisbane College of Australia</span>
                            </li>


                        </ul>
                    </div>








                    <div class="col-md-12 pt-4">
                        <h3 class="mb-4" style="font-size:1.35rem;color:#000">Frequently Asked Questions</h3>
                        <p class="mb-5">Here are answers to some common questions about visa applications, requirements,
                            and processes to help guide you through your journey.</p>

                        <div class="accordion custom-accordion" id="visaFaqAccordion">
                            <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed d-flex align-items-center justify-content-between py-3"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
                                        aria-expanded="false">
                                        <span class="d-flex align-items-center faq-heading">
                                            What documents do I need for a student visa application?
                                        </span>
                                        <i class="fas fa-chevron-down accordion-arrow"></i>
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#visaFaqAccordion">
                                    <div class="accordion-body bg-light">
                                        <p>Typically, you'll need:</p>
                                        <ul class="list-unstyled ps-4">
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Valid
                                                passport</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Letter
                                                of acceptance from your educational institution</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Proof
                                                of financial support (bank statements, scholarship letters)</li>
                                            <li class="mb-2"><i
                                                    class="fas fa-check-circle text-success me-2"></i>Academic
                                                transcripts and certificates</li>
                                            <li class="mb-2"><i
                                                    class="fas fa-check-circle text-success me-2"></i>English
                                                proficiency test results (if required)</li>
                                            <li><i class="fas fa-check-circle text-success me-2"></i>Passport-sized
                                                photographs meeting specifications</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed d-flex align-items-center justify-content-between py-3"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#faq2"
                                        aria-expanded="false">
                                        <span class="d-flex align-items-center faq-heading">
                                            How long does the visa processing usually take?
                                        </span>
                                        <i class="fas fa-chevron-down accordion-arrow"></i>
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#visaFaqAccordion">
                                    <div class="accordion-body bg-light">
                                        <p>Processing times vary depending on:</p>
                                        <ul>
                                            <li class="mb-2"><strong>Country:</strong> Different embassies have
                                                different processing times</li>
                                            <li class="mb-2"><strong>Visa type:</strong> Student visas typically take
                                                4-8 weeks</li>
                                            <li class="mb-2"><strong>Time of year:</strong> Peak seasons (summer) may
                                                have longer processing times</li>
                                            <li><strong>Application completeness:</strong> Incomplete applications cause
                                                delays</li>
                                        </ul>
                                        <p class="mt-3 mb-0">We recommend applying at least 3 months before your
                                            intended travel date.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed d-flex align-items-center justify-content-between py-3"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#faq3"
                                        aria-expanded="false">
                                        <span class="d-flex align-items-center faq-heading">
                                            What are the costs involved in getting a student visa?
                                        </span>
                                        <i class="fas fa-chevron-down accordion-arrow"></i>
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#visaFaqAccordion">
                                    <div class="accordion-body bg-light">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="table-primary">
                                                    <tr>
                                                        <th>Fee Type</th>
                                                        <th>Approximate Cost</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Visa Application Fee</td>
                                                        <td>$400 - $600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Health Insurance</td>
                                                        <td>$300 - $600 per year</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Medical Examination</td>
                                                        <td>$100 - $300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Biometrics Fee</td>
                                                        <td>$50 - $100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Service Charges (if using an agent)</td>
                                                        <td>$100 - $300</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed d-flex align-items-center justify-content-between py-3"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#faq4"
                                        aria-expanded="false">
                                        <span class="d-flex align-items-center faq-heading">
                                            Can I work while on a student visa?
                                        </span>
                                        <i class="fas fa-chevron-down accordion-arrow"></i>
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#visaFaqAccordion">
                                    <div class="accordion-body bg-light">
                                        <p>Most countries allow international students to work with certain
                                            restrictions:</p>
                                        <div class="alert alert-info">
                                            <i class="fas fa-info-circle me-2"></i>
                                            <strong>Typical work allowances:</strong> 20 hours per week during
                                            semesters, full-time during vacations
                                        </div>
                                        <p>Requirements may include:</p>
                                        <ul>
                                            <li>Maintaining full-time enrollment status</li>
                                            <li>Making satisfactory academic progress</li>
                                            <li>Obtaining any required work permits</li>
                                        </ul>
                                        <p class="mb-0">Some programs (like PhD candidates) may have different rules.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed d-flex align-items-center justify-content-between py-3"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#faq5"
                                        aria-expanded="false">
                                        <span class="d-flex align-items-center faq-heading">
                                            Can my family accompany me on a student visa?
                                        </span>
                                        <i class="fas fa-chevron-down accordion-arrow"></i>
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#visaFaqAccordion">
                                    <div class="accordion-body bg-light">
                                        <p>Many countries allow students to bring dependents (spouse/children), but
                                            requirements vary:</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3 bg-white rounded mb-3">
                                                    <h6 class="text-primary"><i
                                                            class="fas fa-check-circle me-2"></i>Usually permitted for:
                                                    </h6>
                                                    <ul>
                                                        <li>Postgraduate students (Master's, PhD)</li>
                                                        <li>Government-sponsored students</li>
                                                        <li>Students in long-term programs (1+ years)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="p-3 bg-white rounded">
                                                    <h6 class="text-primary"><i
                                                            class="fas fa-exclamation-circle me-2"></i>Requirements may
                                                        include:</h6>
                                                    <ul>
                                                        <li>Proof of additional financial support</li>
                                                        <li>Health insurance for dependents</li>
                                                        <li>Marriage/birth certificates</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<script>
document.querySelector('.ajax-contact-visa-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = this;
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.innerHTML = 'Sending...';
    submitBtn.disabled = true;

    fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            const messageEl = form.querySelector('.contact-form-messages');
            if (data.success) {
                messageEl.innerHTML = `<span class="text-success">${data.message}</span>`;
                form.reset();
            } else {
                messageEl.innerHTML = `<span class="text-danger">${data.message}</span>`;
            }
        })
        .catch(error => {

            form.querySelector('.contact-form-messages').innerHTML =
                `<span class="text-danger">An error occurred. Please try again.</span>`;
        })
        .finally(() => {
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
        });
});
</script>

<?php include 'footer.php'; ?>