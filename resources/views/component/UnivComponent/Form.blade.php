<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                    <h2 class="text-center mb-4">Get started here</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="ticket-form-name" id="ticket-form-name"
                                    class="form-control" placeholder="Full name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="email" name="ticket-form-email" id="ticket-form-email"
                                    pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address"
                                    required>
                            </div>
                        </div>

                        <input type="tel" class="form-control" name="ticket-form-phone"
                            placeholder="No Telp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">

                        <h6>Choose Ticket Type</h6>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-control">
                                    <input class="form-check-input" type="radio" name="TicketForm"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Medium 200rb
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-check-radio form-control">
                                    <input class="form-check-input" type="radio" name="TicketForm"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Reguler 300rb + Fotografer
                                    </label>
                                </div>
                            </div>
                        </div>

                        <input type="number" name="ticket-form-number" id="ticket-form-number"
                            class="form-control" placeholder="Number of Tickets" required>

                        <textarea name="ticket-form-message" rows="3" class="form-control"
                            id="ticket-form-message" placeholder="Additional Request"></textarea>

                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" class="form-control">Buy Ticket</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>