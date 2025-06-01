<?php include 'header.php'; ?>
  <style>
    .card-btn {
      position: relative;
      background-color: #000000;
      width: 100%;
      font-size: 12px;
      padding: 10px 20px;
      color: #fff;
      display: flex;
      text-align: center;
      white-space: nowrap;
      transition: all 300ms ease;
      line-height: 27px;
      font-weight: 700;
      overflow: hidden;
      text-transform: uppercase;
      justify-content: center;
      z-index: 1;
    }

    .card-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background-color: #df1119;
      transition: all 300ms ease;
      z-index: -1;
    }

    .card-btn:hover::before {
      left: 0;
    }

    .card-btn .btn-title {
      position: relative;
      z-index: 2;
    }

    .card-btn:hover {
      color: #fff;
    }

    .icon-container {
      position: absolute;
      top: -22px;
      left: 18px;
      height: 87px;
      width: 90px;
      line-height: 0;
      font-size: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      background-color: #df1119;
      transition: all 300ms ease;
      z-index: 2;
    }

    .service-icon {
  color: #fff;
  transition: all 300ms ease;
}

.card:hover .icon-container {
  background-color: #fff;
  border:1px solid  #df1119;
}

.card:hover .service-icon {
  color: #df1119;
}
  </style>

  <div class="breadcumb-wrapper"
    data-bg-src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/02/slider1h1.jpg" data-aos="fade-up"
    data-aos-delay="700">
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

  <section class="pt-5 pb-5" style="background-color: #f2f2f2" data-aos="fade-up" data-aos-delay="700">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="700">
          <div class="card">
          <div style="border: 1px solid #ebebeb; overflow: hidden">
            <a href="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg">
              <img class="img-fluid" src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg" alt="" />
            </a>
          </div>
          <div style="background-color: #fff; padding: 20px">
            <div style="position: relative;background: #f8f8f8;padding: 90px 15px 30px 20px;display: inline-block;border-top: 4px solid #df1119;margin-top: -56px;">
              <div class="icon-container">
                <div class="service-icon">
                  <i style="font-size:30px" aria-hidden="true" class="fas fa-graduation-cap"></i>
                </div>
              </div>
              <a href="student-visa.php" style="color:#000;font-size:22px;font-weight:700;">Student Visa</a>
              <p style="margin-top:10px">We provide a skilled staff to help you get the most out of your immigration.</p>
              <a href="student-visa.php" class="card-btn btn-style-one dark-bg"><span class="btn-title">Read More <i class="fa fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="700">
          <div class="card">
          <div style="border: 1px solid #ebebeb; overflow: hidden">
            <a href="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg">
              <img class="img-fluid" src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg" alt="" />
            </a>
          </div>
          <div style="background-color: #fff; padding: 20px">
            <div style="position: relative;background: #f8f8f8;padding: 90px 15px 30px 20px;display: inline-block;border-top: 4px solid #df1119;margin-top: -56px;">
              <div class="icon-container">
                <div class="service-icon">
                  <i style="font-size:30px" aria-hidden="true" class="fas fa-users"></i>
                </div>
              </div>
              <a href="family-visa.php" style="color:#000;font-size:22px;font-weight:700;">Family Visa</a>
              <p style="margin-top:10px">We provide a skilled staff to help you get the most out of your immigration.</p>
              <a href="family-visa.php" class="card-btn btn-style-one dark-bg"><span class="btn-title">Read More <i class="fa fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="700">
          <div class="card">
          <div style="border: 1px solid #ebebeb; overflow: hidden">
            <a href="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg">
              <img class="img-fluid" src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg" alt="" />
            </a>
          </div>
          <div style="background-color: #fff; padding: 20px">
            <div style="position: relative;background: #f8f8f8;padding: 90px 15px 30px 20px;display: inline-block;border-top: 4px solid #df1119;margin-top: -56px;">
              <div class="icon-container">
                <div class="service-icon">
                  <i  style="font-size:30px" aria-hidden="true" class="fas fa-briefcase"></i>
                </div>
              </div>
              <a href="business-visa.php" style="color:#000;font-size:22px;font-weight:700;">Business Visa</a>
              <p style="margin-top:10px">We provide a skilled staff to help you get the most out of your immigration.</p>
              <a href="business-visa.php" class="card-btn btn-style-one dark-bg"><span class="btn-title">Read More <i class="fa fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
         </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="700">
          <div class="card">
          <div style="border: 1px solid #ebebeb; overflow: hidden">
            <a href="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg">
              <img class="img-fluid" src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg" alt="" />
            </a>
          </div>
          <div style="background-color: #fff; padding: 20px">
            <div style="position: relative;background: #f8f8f8;padding: 90px 15px 30px 20px;display: inline-block;border-top: 4px solid #df1119;margin-top: -56px;">
              <div class="icon-container">
                <div class="service-icon">
                  <i style="font-size:30px" aria-hidden="true" class="fas fa-hard-hat"></i>
                </div>
              </div>
              <a href="working-visa.php" style="color:#000;font-size:22px;font-weight:700;">Working Visa</a>
              <p style="margin-top:10px">We provide a skilled staff to help you get the most out of your immigration.</p>
              <a href="working-visa.php" class="card-btn btn-style-one dark-bg"><span class="btn-title">Read More <i class="fa fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
         </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="700">
           <div class="card">
          <div style="border: 1px solid #ebebeb; overflow: hidden">
            <a href="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg">
              <img class="img-fluid" src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg" alt="" />
            </a>
          </div>
          <div style="background-color: #fff; padding: 20px">
            <div style="position: relative;background: #f8f8f8;padding: 90px 15px 30px 20px;display: inline-block;border-top: 4px solid #df1119;margin-top: -56px;">
              <div class="icon-container">
                <div class="service-icon">
                  <i style="font-size:30px" aria-hidden="true" class="fas fa-umbrella-beach"></i>
                </div>
              </div>
              <a href="tourist-visa.php" style="color:#000;font-size:22px;font-weight:700;">Tourist Visa</a>
              <p style="margin-top:10px">We provide a skilled staff to help you get the most out of your immigration.</p>
              <a href="tourist-visa.php" class="card-btn btn-style-one dark-bg"><span class="btn-title">Read More <i class="fa fa-arrow-right"></i></span></a>
            </div>
          </div></div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="700">
          <div class="card">
          <div style="border: 1px solid #ebebeb; overflow: hidden">
            <a href="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg">
              <img class="img-fluid" src="https://dev24.kodesolution.com/visago/wp-content/uploads/2024/05/service5h2.jpg" alt="" />
            </a>
          </div>
          <div style="background-color: #fff; padding: 20px">
            <div style="position: relative;background: #f8f8f8;padding: 90px 15px 30px 20px;display: inline-block;border-top: 4px solid #df1119;margin-top: -56px;">
              <div class="icon-container">
                <div class="service-icon">
                  <i style="font-size:30px" aria-hidden="true" class="fas fa-home"></i>
                </div>
              </div>
              <a href="residence-visa.php" style="color:#000;font-size:22px;font-weight:700;">Residence Visa</a>
              <p>We provide a skilled staff to help you get the most out of your immigration.</p>
              <a href="residence-visa.php" class="card-btn btn-style-one dark-bg"><span class="btn-title">Read More <i class="fa fa-arrow-right"></i></span></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>