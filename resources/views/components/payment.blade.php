<form accept-charset="UTF-8" action="https://api.moyasar.com/v1/payments.html" method="POST" class="flex flex-col w-1/2 m-auto mt-10">
    <input type="hidden" name="callback_url" value="http://localhost:8000/complete-payment" />
    <input type="hidden" name="publishable_api_key" value="pk_test_JkfSi7UmHdMuNrpZYrW8P5QKsJuiYs6wnWe1K3H8" />
    <input type="hidden" name="amount" value="{{$amount}}" />
    <input type="hidden" name="source[type]" value="creditcard" />
    <input type="text" name="source[name]" placeholder="Name on card" class="user-input-style"/>
    <input type="number" name="source[number]" placeholder="Card number" maxlength="14" class="user-input-style"/>
    <input type="number" name="source[month]" placeholder="Expiry MM" maxlength="2" class="user-input-style"/>
    <input type="number" name="source[year]" placeholder="Expiry YY" maxlength="2" class="user-input-style"/>
    <input type="text" name="source[cvc]" placeholder="CVC" maxlength="3" class="user-input-style"/>
    @include('reusable.formButton', ['btnText'=>'Pay now'])
</form>