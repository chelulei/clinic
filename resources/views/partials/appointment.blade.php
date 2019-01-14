<section class="appointment-area">
    <div class="container">
        <div class="row justify-content-between align-items-center pb-120 appointment-wrap">
            <div class="col-lg-5 col-md-6 appointment-left">
                <h1>
                    Servicing Hours
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.
                </p>
                <ul class="time-list">
                    <li class="d-flex justify-content-between">
                        <span>Monday-Friday</span>
                        <span>08.00 am - 10.00 pm</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Saturday</span>
                        <span>08.00 am - 10.00 pm</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Sunday</span>
                        <span>08.00 am - 10.00 pm</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
                <form class="form-wrap" action="#">
                    <h3 class="pb-20 text-center mb-30">Book an Appointment</h3>
                    <input type="text" class="form-control" name="name" placeholder="Patient Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'" >
                    <input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" >
                    <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" >
                    <input id="datepicker1" name="dop" class="dates form-control"  placeholder="Date of Birth" type="text">
                    <div class="form-select" id="service-select">
                        <select>
                            <option data-display="">Disease Type</option>
                            <option value="1">Type One</option>
                            <option value="2">Type Two</option>
                            <option value="3">Type Three</option>
                            <option value="4">Type Four</option>
                        </select>
                    </div>
                    <input id="datepicker2" class="dates form-control"  placeholder="appointment Date" type="text">
                    <textarea name="messege" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
                    <button class="primary-btn text-uppercase">Confirm Booking</button>
                </form>
            </div>
        </div>
    </div>
</section>