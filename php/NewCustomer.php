<div class="new-customer-form-container">
    <div class="new-customer-wrapper">
        <h1>New Customer</h1>
        <form class="new-customer-form" action="AddCustomer.php" method="POST">
            <div class="form-input-section">
                <div class="new-customer-name">
                    <input type="text" class="first-name-input" placeholder="First Name" name="firstName" autofocus required/>

                </div>

                <div class="new-customer-name">
                    <input type="text" class="last-name-input" placeholder="Last Name" name="lastName" required/>

                </div>

            </div>

            <div class="form-input-section">
                <div class="new-customer-phone-number">
                    <input type="text" class="phone-number-input" placeholder="Phone Number" name="phoneNumber" required/>

                </div>

                <div class="new-customer-email">
                    <input type="text" class="email-input" placeholder="Email" name="email"/>

                </div>

            </div>
            <input type="submit" class="new-customer-submit-button" value="Submit"/>

        </form>

    </div>

</div>